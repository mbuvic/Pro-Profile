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
        // User::factory(10)->create();


        User::factory()->create([
            'name' => 'Robert Kilungya',
            'email' => 'robert@gmail.com',
            'password'=> bcrypt('12345'),
            'is_admin' => true,
        ]);
        User::factory()->create([
            'name' => 'Faith Banda',
            'email' => 'faith@gmail.com',
            'password'=> bcrypt('12345'),
        ]);
    }
}
