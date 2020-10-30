<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name' => 'admin123',
            'email' => 'admin@gmail.com',
            'role' => '0',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'seller123',
            'email' => 'seller123@gmail.com',
            'role' => '1',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'buyer123',
            'email' => 'buyer123@gmail.com',
            'role' => '2',
            'password' => Hash::make('password'),
        ]);
    }
}
