<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
  
        DB::table('users')->insert([
            [
                'name'                 => 'Admin User',
                'email'                => 'admin@example.com',
                'email_verified_at'    => now(),
                'password'             => Hash::make('password'), // Hashed password
                'role'                 => 1, // Admin
                'status'               => 1, // Active
                'remember_token'       => null,
                'created_at'           => Carbon::now(),
                'updated_at'           => Carbon::now(),
            ],
            [
                'name'                 => 'Regular User',
                'email'                => 'user@example.com',
                'email_verified_at'    => now(),
                'password'             => Hash::make('password'), // Hashed password
                'role'                 => 0, // Regular User
                'status'               => 0, // Inactive
                'remember_token'       => null,
                'created_at'           => Carbon::now(),
                'updated_at'           => Carbon::now(),
            ]
        ]);

    }
}
