<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load JSON file directly from database/json
        $json = File::get(database_path('users.json'));
        $users = collect(json_decode($json, true));

        $users->each(function ($user) {
            User::create([
                'name'     => $user['name'],
                'email'    => $user['email'],
                'age'      => $user['age'],
                'city'     => $user['city'],
                'password' => $user['password'],

            ]);
        });
    }
}