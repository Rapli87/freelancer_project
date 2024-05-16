<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'name'              => 'Jhon Doe',
                'email'             => 'jhon@mail.com',
                'password'          => Hash::make('Admin@12345'),
                'remember_token'    => NULL,
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s'),
            ],
            [
                'name'              => 'Jane Doe',
                'email'             => 'jane@mail.com',
                'password'          => Hash::make('Admin@12345'),
                'remember_token'    => NULL,
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s'),
            ],
        ];

        User::insert($user);
    }
}
