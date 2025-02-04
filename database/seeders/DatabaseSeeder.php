<?php

namespace Database\Seeders;

use App\Models\Patient;
use App\Models\Specialist;
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
            'role' => 'admin',
        ]);

        if (app()->environment('local')) {

            User::factory()->has(Specialist::factory()->count(1))->create([
                'name' => 'Test Specialist',
                'email' => 'specialist@example.com',
                'role' => 'specialist',
            ]);

            User::factory()->has(Patient::factory()->count(1))->create([
                'name' => 'Test Patient',
                'email' => 'patient@example.com',
                'role' => 'patient',
            ]);

            $users = User::factory(50)->create();
            foreach ($users as $user) {
                if ($user->role == 'patient') {
                    Patient::factory()->state([
                        'user_id' => $user->id,
                    ])->create();
                }
                if ($user->role == 'specialist') {
                    Specialist::factory()->state([
                        'user_id' => $user->id,
                    ])->create();
                }
            }
        }
    }
}
