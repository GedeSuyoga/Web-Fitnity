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
            'name' => 'yoga',
            'email' => 'yoga@gmail.com',
            'age'=> '19',
            'gender' => 'Male',
            'phone_number' => '089659731680',
            'password' => '123456'
        ]);
    }
}
