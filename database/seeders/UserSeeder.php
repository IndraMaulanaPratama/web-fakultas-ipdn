<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            // Super Admin
            [
               'role' => 1,
               'name' => 'Rama Wirahma',
               'email' => 'rama-wirahma@ipdn.ac.id',
               'password' => bcrypt('password'),
            ],

            // Admin
            [
              'role' => 2,
              'name' => 'Admin Web',
              'email' => 'admin@ipdn.ac.id',
              'password' => bcrypt('password'),
            ],

            // Writer
            [
              'role' => 3,
              'name' => 'Writer Content',
              'email' => 'writer@ipdn.ac.id',
              'password' => bcrypt('password'),
            ],
        ]);
    }
}
