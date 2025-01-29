<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role' => 'admin'
        ]);

        User::factory()->create([
            'name' => 'Test Specialist',
            'email' => 'specialist@example.com',
            'role' => 'specialist'
        ]);

        User::factory()->create([
            'name' => 'Test Patient',
            'email' => 'patient@example.com',
            'role' => 'patient'
        ]);
        
        User::factory(10)->create();
    }
}
