<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(9)->create();

        User::create([
              'name' => 'default user',
              'email' => 'example@example.com',
              'password' => bcrypt('12345678'), 
        ]);
    }
}
