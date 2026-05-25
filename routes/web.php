<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");


Route::get("/quote", [QuoteController::class, "create"])->name("quote");
Route::post("/quote", [QuoteController::class, "store"]);


Route::get("/courses/coated", function(){
    return view("formations.enduit");
})->name("enduit");

Route::get("/about", function(){
    return view("about");
})->name("about");

Route::get("/audit", function(){
    return view("formations.audit");
})->name("audit");

Route::name("bookings.")->controller(BookingController::class)->group(function() {

    Route::prefix("/api/bookings")->group(function() {
        // ── API AJAX — dates disponibles (pour Flatpickr)
        Route::get('/available-dates', 'availableDates')
            ->name('available-dates');
        
        // ── API AJAX — créneaux d'une date (pour les boutons de sélection)
        Route::get('/slots', 'slotsForDate')
            ->name('slots-for-date');
    });

    Route::prefix("/formations/enduit")->group(function() {
        // ── Page de réservation (stepper)
        Route::get('/reserver', 'index')
            ->name('index');

                
        // ── Enregistrement de la réservation
        Route::post('/reserver', 'store')
            ->name('store');
        
        // ── Page de confirmation après réservation
        Route::get('/confirmation', 'success')
            ->name('success');

    });

    // ── Annulation via lien email
    Route::get('/reservations/annuler/{token}', 'cancel')
        ->name('cancel');

});