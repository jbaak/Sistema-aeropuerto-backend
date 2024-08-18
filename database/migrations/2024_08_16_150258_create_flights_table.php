<?php

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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->dateTime('date');
            $table->foreignIdFor(\App\Models\City::class)->constrained();
            $table->foreignIdFor(\App\Models\Airline::class)->constrained();
            $table->integer('duration_hour')->nullable();
            $table->integer('duration_minute')->nullable();
            $table->decimal('basic_price', 8, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
