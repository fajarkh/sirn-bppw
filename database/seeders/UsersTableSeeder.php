<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Create Users Seeder
         */
        $user = User::create([
            'name' => 'Muhammad Irfan',
            'username' => 'admin',
            'role' => 'superadmin',
            'password' => bcrypt('admin123'),
        ]);
    }
}
