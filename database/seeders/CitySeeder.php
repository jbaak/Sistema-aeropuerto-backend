<?php

namespace Database\Seeders;

use App\Enums\Roles;
use App\Models\Category;
use App\Models\City;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        City::create(['name' => 'Ciudad de Mexico']);
        City::create(['name' => 'Monterrey, Nuevo Leon']);
        City::create(['name' => 'Guadalajara, Jalisco']);
        City::create(['name' => 'Tapachula, Chiapas']);
        City::create(['name' => 'Tijuana, Baja California']);

    }
}
