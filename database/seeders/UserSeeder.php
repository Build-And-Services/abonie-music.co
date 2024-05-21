<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'user@mail.com')->first();
        if (is_null($user)) {
            $user = new User();
            $user->name = "user";
            $user->email = "user@mail.com";
            $user->password = Hash::make('password123');
            $user->save();
        }
    }
}