<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([

            [
                'name' => 'Admin',
                'username' => 'admin',
                'phone' => null,
                'photo' => null,
                'role' => 'admin',
                'status' => 'active',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),
                'created_at' => Carbon::now(),
                'email_verified_at' => Carbon::now(),
            ],
            [
                'name' => 'Manager',
                'username' => 'manager',
                'phone' => null,
                'photo' => null,
                'role' => 'manager',
                'status' => 'active',
                'email' => 'manager@gmail.com',
                'password' => Hash::make('111'),
                'created_at' => Carbon::now(),
                'email_verified_at' => Carbon::now(),
            ],
            [
                'name' => 'User',
                'username' => 'user',
                'phone' => null,
                'photo' => null,
                'role' => 'user',
                'status' => 'active',
                'email' => 'user@gmail.com',
                'password' => Hash::make('111'),
                'created_at' => Carbon::now(),
                'email_verified_at' => Carbon::now(),
            ],



            ]);
    }
}
