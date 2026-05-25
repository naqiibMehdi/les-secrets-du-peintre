<?php

namespace App\Models;

use App\Models\TimeSlot;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;


class Booking extends Model
{
    protected $fillable = [
        'time_slot_id',
        'prenom',
        'nom',
        'email',
        'telephone',
        'status',
        'token',
        'notes',
        'stripe_payment_intent',
        'paid_at',
        'confirmed_at',
    ];
 
    protected $casts = [
        'paid_at'      => 'datetime',
        'confirmed_at' => 'datetime',
    ];
 
    /**
     * Génère automatiquement un token unique à la création.
     */
    protected static function booted(): void
    {
        static::creating(function (Booking $booking) {
            $booking->token = Str::random(64);
        });
    }
 
    public function timeSlot(): BelongsTo
    {
        return $this->belongsTo(TimeSlot::class);
    }
 
    public function getFullNameAttribute(): string
    {
        return "{$this->prenom} {$this->nom}";
    }
 
    public function confirm(): void
    {
        /** @var \App\Models\Booking $this */
        $this->update([
            'status'       => 'confirmed',
            'confirmed_at' => now(),
        ]);
    }
 
    public function cancel(): void
    {
        /** @var \App\Models\Booking $this */
        $this->update(['status' => 'cancelled']);
    }

}
