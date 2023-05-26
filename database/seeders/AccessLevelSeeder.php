<?php

namespace Database\Seeders;

use App\Models\access_level;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class AccessLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        access_level::insert([
            /** SUPER ADMIN AREA */
            // Access Menu Super Admin
            [
              'ACCESS_ROLE' => 1,
              'ACCESS_NAME' => 'Menu Postingan Super Admin',
              'ACCESS_MENU' => '1,2,3,4',
              'ACCESS_SUBMENU' => '1,2,3,4',

              'ACCESS_READ' => true,
              'ACCESS_DETAIL' => true,
              'ACCESS_CREATE' => true,
              'ACCESS_UPDATE' => true,
              'ACCESS_SOFT_DELETE' => true,
              'ACCESS_DELETE' => true,
              'ACCESS_HIDE' => true,
              'ACCESS_SHOW' => true,

              'ACCESS_CREATED_AT' => Carbon::now('Asia/Jakarta'),
              'ACCESS_UPDATED_AT' => null,
              'ACCESS_DELETED_AT' => null,

              'ACCESS_CREATED_BY' => 1,
              'ACCESS_UPDATED_BY' => null,
              'ACCESS_DELETED_BY' => null,
            ],

            /** ADMIN AREA */
            // Access Menu Admin
            [
              'ACCESS_ROLE' => 1,
              'ACCESS_NAME' => 'Menu Postingan Super Admin',
              'ACCESS_MENU' => '1,2,3',
              'ACCESS_SUBMENU' => '1,2,3,4',

              'ACCESS_READ' => true,
              'ACCESS_DETAIL' => true,
              'ACCESS_CREATE' => true,
              'ACCESS_UPDATE' => true,
              'ACCESS_SOFT_DELETE' => true,
              'ACCESS_DELETE' => false,
              'ACCESS_HIDE' => false,
              'ACCESS_SHOW' => false,

              'ACCESS_CREATED_AT' => Carbon::now('Asia/Jakarta'),
              'ACCESS_UPDATED_AT' => null,
              'ACCESS_DELETED_AT' => null,

              'ACCESS_CREATED_BY' => 1,
              'ACCESS_UPDATED_BY' => null,
              'ACCESS_DELETED_BY' => null,
            ],
          ]);
    }
}
