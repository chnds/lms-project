<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
       User::factory()->count(9)->create();

       $testUser = User::where('email', 'test@example.com')->first();

       if (!$testUser) {
           User::create([
               'name' => 'Test User',
               'email' => 'test@example.com',
               'password' => Hash::make('password'),
           ]);
       }
    }
}
