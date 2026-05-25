<?php

use App\Models\Timeslot;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Timeslot::class, "time_slot_id")
            ->constrained("time_slots")
            ->cascadeOnDelete();
 
            // Coordonnées client
            $table->string('prenom', 100);
            $table->string('nom', 100);
            $table->string('email', 255);
            $table->string('telephone', 20)->nullable();
 
            // Statut
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])
                  ->default('pending');
 
            // Token unique pour le lien d'annulation dans l'email
            $table->string('token', 64)->unique();
 
            // Notes libres du client
            $table->text('notes')->nullable();
 
            // Stripe — à remplir plus tard
            $table->string('stripe_payment_intent', 255)->nullable();
            $table->timestamp('paid_at')->nullable();
 
            $table->timestamp('confirmed_at')->nullable();
            $table->timestamps();
 
            $table->index('email');
            $table->index('status');
            $table->index('token');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
