<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin

        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'role' => 'admin',
            'status' => 'active',
            'image' => 'admin.jpg',
            'password' => bcrypt('admin'),
            'email' => 'admin@example.com',
        ]);

        //Vendor
        // DB::table('users')->insert([
        //     'name' => 'Vendor',
        //     'username' => 'vendor',
        //     'role' => 'vendor',
        //     'status' => 'active',
        //     'image' => 'vendor.jpg',
        //     'password' => bcrypt('vendor'),
        //     'email' => 'vendor@example.com',
        // ]);

        // User
        DB::table('users')->insert([
            'name' => 'User',
            'username' => 'user',
            'role' => 'user',
            'status' => 'active',
            'image' => 'user.jpg',
            'password' => bcrypt('user'),
            'email' => 'user@example.com',
        ]);

    }
}
