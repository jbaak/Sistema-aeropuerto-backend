<?php

use App\Models\Category;
use App\Models\Flight;
use App\Models\User;
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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Flight::class)->constrained();
            $table->foreignIdFor(Category::class)->constrained();
            $table->foreignIdFor(User::class)->constrained();
            $table->string('passenger_name');
            $table->string('passenger_lastname');
            $table->string('seat_number');
            $table->dateTime('paid_at')->nullable();
            $table->dateTime('booking_at')->nullable();
            $table->string('confirmation_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
