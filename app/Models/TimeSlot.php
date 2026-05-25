<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TimeSlot extends Model
{
    protected $fillable = [
        'date',
        'start_time',
        'end_time',
        'capacity',
        'is_active',
    ];
 
    protected $casts = [
        'date'      => 'date',
        'is_active' => 'boolean',
    ];
 
    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }
 
    /**
     * Places encore disponibles sur ce créneau.
     */
    public function availablePlaces(): int
    {
        $taken = $this->bookings()
                      ->whereIn('status', ['pending', 'confirmed'])
                      ->count();
 
        return max(0, $this->capacity - $taken);
    }
 
    /**
     * Scope : créneaux actifs à partir d'aujourd'hui.
     */
    #[Scope]

    public function Available(Builder $query): Builder
    {
        return $query
            ->where('is_active', true)
            ->where('date', '>=', now()->toDateString());
    }

}
