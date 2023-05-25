<?php

namespace Database\Seeders;

use App\Models\menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
          // Setting
          [
            'MENU_ORDER' => 99,
            'MENU_NAME' => 'Setting',
            'MENU_URL' => 'setting',
            'MENU_ICON' => 'fa fa-cogs',

            'MENU_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'MENU_CREATED_BY' => 1,
          ]
        ]);
    }
}
