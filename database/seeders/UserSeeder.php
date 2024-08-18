<?php

namespace Database\Seeders;

use App\Enums\Roles;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $user->assignRole(Roles::ADMIN->value);

        $userBasic = User::factory()->create([
            'name' => 'Test basic',
            'email' => 'basic@example.com',
        ]);

        $userBasic->assignRole(Roles::BASIC->value);

        $userPremiun = User::factory()->create([
            'name' => 'Test premiun',
            'email' => 'premiun@example.com',
        ]);

        $userPremiun->assignRole(Roles::PREMIUM->value);
    }
}
