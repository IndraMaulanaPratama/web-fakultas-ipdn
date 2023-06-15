<?php

namespace Database\Seeders;

use App\Models\submenu;
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

          /** Postingan Area */
          // Postingan -> Buat Postingan
          [
            'SUBMENU_MENU' => 1,
            'SUBMENU_ORDER' => 1,
            'SUBMENU_NAME' => 'Buat Postingan',
            'SUBMENU_URL' => 'postingan/create',

            'SUBMENU_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'SUBMENU_CREATED_BY' => 1,
          ],

          // Postingan -> Daftar Postingan
          [
            'SUBMENU_MENU' => 1,
            'SUBMENU_ORDER' => 2,
            'SUBMENU_NAME' => 'Daftar Postingan',
            'SUBMENU_URL' => 'postingan',

            'SUBMENU_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'SUBMENU_CREATED_BY' => 1,
          ],

          // Postingan -> Daftar Kategori
          [
            'SUBMENU_MENU' => 1,
            'SUBMENU_ORDER' => 3,
            'SUBMENU_NAME' => 'Daftar Kategori',
            'SUBMENU_URL' => 'kategori',

            'SUBMENU_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'SUBMENU_CREATED_BY' => 1,
          ],

          // Postingan -> Data Sampah
          [
            'SUBMENU_MENU' => 1,
            'SUBMENU_ORDER' => 4,
            'SUBMENU_NAME' => 'Data Sampah',
            'SUBMENU_URL' => 'postingan/trash',

            'SUBMENU_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'SUBMENU_CREATED_BY' => 1,
          ],


          /** Pengguna Area */
          // Pengguna -> Daftar Pengguna
          [
            'SUBMENU_MENU' => 2,
            'SUBMENU_ORDER' => 1,
            'SUBMENU_NAME' => 'Daftar Pengguna',
            'SUBMENU_URL' => 'pengguna',

            'SUBMENU_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'SUBMENU_CREATED_BY' => 1,
          ],

          // Pengguna -> Role Pengguna
          [
            'SUBMENU_MENU' => 2,
            'SUBMENU_ORDER' => 2,
            'SUBMENU_NAME' => 'Role Pengguna',
            'SUBMENU_URL' => 'role',

            'SUBMENU_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'SUBMENU_CREATED_BY' => 1,
          ],

          /** Menu Area */
          // Menu -> Daftar Menu
          [
            'SUBMENU_MENU' => 3,
            'SUBMENU_ORDER' => 1,
            'SUBMENU_NAME' => 'Daftar Menu',
            'SUBMENU_URL' => 'menu',

            'SUBMENU_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'SUBMENU_CREATED_BY' => 1,
          ],


          /** Setting Area */
          // Setting -> General
          [
            'SUBMENU_MENU' => 4,
            'SUBMENU_ORDER' => 1,
            'SUBMENU_NAME' => 'General',
            'SUBMENU_URL' => 'setting/general',

            'SUBMENU_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'SUBMENU_CREATED_BY' => 1,
          ],

          // Setting -> Testimoni
          [
            'SUBMENU_MENU' => 4,
            'SUBMENU_ORDER' => 2,
            'SUBMENU_NAME' => 'Testimoni',
            'SUBMENU_URL' => 'setting/testimoni',

            'SUBMENU_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'SUBMENU_CREATED_BY' => 1,
          ],

          // Setting -> Contact
          [
            'SUBMENU_MENU' => 4,
            'SUBMENU_ORDER' => 3,
            'SUBMENU_NAME' => 'Contact',
            'SUBMENU_URL' => 'setting/contact',

            'SUBMENU_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'SUBMENU_CREATED_BY' => 1,
          ],
        ]);
    }
}
