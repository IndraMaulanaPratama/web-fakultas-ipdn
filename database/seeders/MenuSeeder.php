<?php

namespace Database\Seeders;

use App\Models\menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        menu::insert([
          // Postingan
          [
            'MENU_ORDER' => 1,
            'MENU_NAME' => 'Postingan',
            'MENU_URL' => 'postingan',
            'MENU_ICON' => 'fe fe-trello',

            'MENU_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'MENU_CREATED_BY' => 1,
          ],

          // Pengguna
          [
            'MENU_ORDER' => 2,
            'MENU_NAME' => 'Pengguna',
            'MENU_URL' => 'pengguna',
            'MENU_ICON' => 'fe fe-users',

            'MENU_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'MENU_CREATED_BY' => 1,
          ],

          // Menu
          [
            'MENU_ORDER' => 3,
            'MENU_NAME' => 'Menu',
            'MENU_URL' => 'menu',
            'MENU_ICON' => 'fe fe-menu',

            'MENU_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'MENU_CREATED_BY' => 1,
          ],


          // Setting
          [
            'MENU_ORDER' => 99,
            'MENU_NAME' => 'Setting',
            'MENU_URL' => 'setting',
            'MENU_ICON' => 'fe fe-settings',

            'MENU_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'MENU_CREATED_BY' => 1,
          ]
        ]);
    }
}
