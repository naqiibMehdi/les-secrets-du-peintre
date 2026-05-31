<?php
// app/Http/Controllers/BookingController.php

namespace App\Http\Controllers;

use App\Mail\BookingConfirmation;
use App\Models\Booking;
use App\Models\TimeSlot;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class BookingController extends Controller
{
    /**
     * Affiche le stepper de réservation.
     */
    public function index(): View
    {
        return view('bookings.index');
    }

    /**
     * API — dates ayant au moins un créneau disponible.
     * Utilisé par Flatpickr pour activer/désactiver les jours.
     */
    public function availableDates(): JsonResponse
    {
        $dates = TimeSlot::query()->available()
            ->get()
            ->filter(fn($slot) => $slot->availablePlaces() > 0)
            ->pluck('date')
            ->map(fn($d) => $d->format('Y-m-d'))
            ->unique()
            ->values();

        return response()->json($dates);
    }

    /**
     * API — créneaux disponibles pour une date donnée.
     * Appelé en AJAX quand le client sélectionne une date dans Flatpickr.
     */
    public function slotsForDate(Request $request): JsonResponse
    {
        $request->validate(['date' => 'required|date']);

        $slots = TimeSlot::query()->available()
            ->where('date', $request->date)
            ->get()
            ->filter(fn($slot) => $slot->availablePlaces() > 0)
            ->map(fn($slot) => [
                'id'    => $slot->id,
                'label' => substr($slot->start_time, 0, 5)
                           . ' – '
                           . substr($slot->end_time, 0, 5),
            ])
            ->values();

        return response()->json($slots);
    }

    /**
     * Enregistre la réservation et envoie l'email de confirmation.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'prenom'       => 'required|string|max:100',
            'nom'          => 'required|string|max:100',
            'email'        => 'required|email|max:255',
            'telephone'    => 'nullable|string|max:20',
            'time_slot_id' => 'required|exists:time_slots,id',
            'notes'        => 'nullable|string|max:1000',
        ]);

        // Vérifie que le créneau est encore libre (évite les doubles réservations)
        $slot = TimeSlot::findOrFail($validated['time_slot_id']);

        if ($slot->availablePlaces() < 1) {
            return back()
                ->withErrors(['time_slot_id' => 'Ce créneau vient d\'être pris. Veuillez en choisir un autre.'])
                ->withInput();
        }

        $booking = Booking::create($validated);

        // Mail::to($booking->email)
        //     ->send(new BookingConfirmation($booking));

        return redirect()->route('bookings.success', ['token' => $booking->token]);
    }

    /**
     * Page de succès après réservation.
     */
    public function success(Request $request): View
    {
        $booking = Booking::where('token', $request->token)->firstOrFail();

        return view('bookings.success', compact('booking'));
    }

    /**
     * Annulation via le lien reçu par email.
     */
    public function cancel(string $token): View
    {
        $booking = Booking::where('token', $token)
                          ->where('status', '!=', 'cancelled')
                          ->firstOrFail();

        $booking->cancel();

        return view('bookings.cancelled', compact('booking'));
    }
}