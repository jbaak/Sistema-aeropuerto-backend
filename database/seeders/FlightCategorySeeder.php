<?php

namespace Database\Seeders;

use App\Enums\Roles;
use App\Models\Airline;
use App\Models\Category;
use App\Models\City;
use App\Models\Flight;
use App\Models\FlightCategory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class FlightCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FlightCategory::create([
            'flight_id' => 1,
            'category_id' => 1,
            'number_of_seats' => 96,
        ]);

        FlightCategory::create([
            'flight_id' => 1,
            'category_id' => 2,
            'number_of_seats' => 24,
        ]);

        FlightCategory::create([
            'flight_id' => 1,
            'category_id' => 3,
            'number_of_seats' => 8,
        ]);

        FlightCategory::create([
            'flight_id' => 2,
            'category_id' => 1,
            'number_of_seats' => 96,
        ]);

        FlightCategory::create([
            'flight_id' => 2,
            'category_id' => 2,
            'number_of_seats' => 24,
        ]);

        FlightCategory::create([
            'flight_id' => 2,
            'category_id' => 3,
            'number_of_seats' => 8,
        ]);

        FlightCategory::create([
            'flight_id' => 3,
            'category_id' => 1,
            'number_of_seats' => 96,
        ]);

        FlightCategory::create([
            'flight_id' => 3,
            'category_id' => 2,
            'number_of_seats' => 24,
        ]);

        FlightCategory::create([
            'flight_id' => 3,
            'category_id' => 3,
            'number_of_seats' => 8,
        ]);


    }
}
