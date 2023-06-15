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
        User::create([
            'name' => 'Ghozy Nouval Satya Prasaja',
            'email' => 'ghozyarc12@gmail.com',
            'password' => 'Password123',
            'avatar' => '',
            'role' => 'admin',
        ]);
    }
}
