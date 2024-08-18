<?php

namespace Database\Seeders;

use App\Enums\Roles;
use App\Models\Airline;
use App\Models\Category;
use App\Models\City;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class AirlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Airline::create(['name' => 'Viva Aerobus']);
        Airline::create(['name' => 'Aeroméxico']);
        Airline::create(['name' => 'Volaris']);
        Airline::create(['name' => 'Interjet  ']);
        Airline::create(['name' => 'Aviacsa']);

    }
}
