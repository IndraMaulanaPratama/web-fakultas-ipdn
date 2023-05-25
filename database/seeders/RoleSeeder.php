<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        role::insert([
            // Super Admin
            [
              'ROLE_NAME' => 'super-admin',

              'ROLE_CREATED_AT' => Carbon::now('Asia/Jakarta'),
              'ROLE_DELETED_AT' => null,
            ],

            // Admin
            [
              'ROLE_NAME' => 'admin',

              'ROLE_CREATED_AT' => Carbon::now('Asia/Jakarta'),
              'ROLE_DELETED_AT' => null,
            ],

            // writer
            [
              'ROLE_NAME' => 'writer',

              'ROLE_CREATED_AT' => Carbon::now('Asia/Jakarta'),
              'ROLE_DELETED_AT' => null,
            ]
        ]);
    }
}
