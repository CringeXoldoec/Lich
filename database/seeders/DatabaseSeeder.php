<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'full_name' => 'Чудинов Кирилл Александрович',
            'phone' => '89393494357',
            'login' => 'админ',
            'email' => 'test@exlam.com',
            'role' => 'admin',
            'password' => Hash::make('1'),
        ]);
    }
}
