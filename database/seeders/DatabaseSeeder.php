<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        \App\Models\User::factory()->create([
            'name' => 'Test Influencer',
            'email' => 'testinfluencer@example.com',
            'role' => 'influencer',
            'password' => bcrypt('password123'),
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test Business',
            'email' => 'testbusiness@example.com',
            'role' => 'business', // '2' for 'Business'
            'password' => bcrypt('password123')
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'role' => 'admin', // '0' for 'Admin'
            'password' => bcrypt('password123')
        ]);

    }


}
