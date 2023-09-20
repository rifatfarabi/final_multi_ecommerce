<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [

            [
                'id' => '1',
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => \Hash::make('password'),
                'role' => 'admin'
            ],
            [
                'id' => '2',
                'name' => 'Customer',
                'email' => 'customer@gmail.com',
                'password' => \Hash::make('password'),
                'role' => 'customer'
            ]
        ];

        User::insert($users);
    }
}
