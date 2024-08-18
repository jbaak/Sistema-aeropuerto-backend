<?php

namespace Database\Seeders;

use App\Enums\Roles;
use App\Models\Airline;
use App\Models\Category;
use App\Models\City;
use App\Models\Flight;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Flight::create([
            'date' => '2024-08-28 15:00:00',
            'city_id' => 1,
            'airline_id' => 1,
            'duration_hour' => 1,
            'duration_minute' => 30,
            'basic_price' => 900.00,
        ]);

        Flight::create([
            'date' => '2024-08-22  18:00:00',
            'city_id' => 2,
            'airline_id' => 1,
            'duration_hour' => 1,
            'duration_minute' => 40,
            'basic_price' => 1000.00,
        ]);

        Flight::create([
            'date' => '2024-08-21  08:00:00',
            'city_id' => 3,
            'airline_id' => 1,
            'duration_hour' => 2,
            'duration_minute' => 0,
            'basic_price' => 1000.00,
        ]);

        Flight::create([
            'date' => '2024-08-28  10:00:00',
            'city_id' => 4,
            'airline_id' => 2,
            'duration_hour' => 2,
            'duration_minute' => 0,
            'basic_price' => 950.00,
        ]);

        Flight::create([
            'date' => '2024-08-28  15:00:00',
            'city_id' => 5,
            'airline_id' => 2,
            'duration_hour' => 1,
            'duration_minute' => 45,
            'basic_price' => 980.00,
        ]);

        Flight::create([
            'date' => '2024-08-28  06:00:00',
            'city_id' => 1,
            'airline_id' => 3,
            'duration_hour' => 1,
            'duration_minute' => 22,
            'basic_price' => 1150.00,
        ]);

    }
}
