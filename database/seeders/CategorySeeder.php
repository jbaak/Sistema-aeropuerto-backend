<?php

namespace Database\Seeders;

use App\Enums\Roles;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Económico']);
        Category::create(['name' => 'Normal']);
        Category::create(['name' => 'Ejecutivo']);
    }
}
