<?php

namespace Database\Seeders;

use App\Models\FlightCategory;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Model::unguard();

        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(CitySeeder::class);
        $this->call(AirlineSeeder::class);
        $this->call(FlightSeeder::class);
        $this->call(FlightCategorySeeder::class);


        Model::reguard();
    }
}
