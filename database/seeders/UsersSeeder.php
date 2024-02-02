<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory('users')->create([
            'name' => 'Anastasija',
            'lastname' => 'Krstanoska',
            'email' => 'anastasija@example.com',

        ]);
    }
}
