<?php

namespace Database\Seeders;

use App\Models\submenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SubmenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        submenu::insert([
          // Setting -> Testimoni
          [
            'SUBMENU_MENU' => 1,
            'SUBMENU_ORDER' => 1,
            'SUBMENU_NAME' => 'Testimoni',
            'SUBMENU_URL' => 'setting/testimoni',

            'SUBMENU_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'SUBMENU_CREATED_BY' => 1,
          ],

          // Setting -> Contact
          [
            'SUBMENU_MENU' => 1,
            'SUBMENU_ORDER' => 2,
            'SUBMENU_NAME' => 'Contact',
            'SUBMENU_URL' => 'setting/contact',

            'SUBMENU_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'SUBMENU_CREATED_BY' => 1,
          ],
        ]);
    }
}
