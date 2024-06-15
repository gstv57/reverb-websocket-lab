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
            'name' => 'user1',
            'email' => 'user1@example.com',
            'password' => bcrypt('123'),
        ]);

        User::factory()->create([
            'name' => 'user2',
            'email' => 'user2@example.com',
            'password' => bcrypt('123'),
        ]);
    }
}
