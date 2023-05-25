<?php

namespace Database\Seeders;

use App\Models\setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        setting::insert([
          'SETTING_REGIONAL' => 'Jatinangor',
          'SETTING_FAVICON' => 'favicon.ico',
          'SETTING_LOGO' => 'logo.png',
          'SETTING_HEADER' => 'header.jpg',
          'SETTING_DIRECTOR_IMAGE' => 'default_director.png',

          'SETTING_DIRECTOR_MESSAGE' => 'Selamat Datang di Portal Institut Pemerintahan Dalam Negeri Kampus Daerah Papua. Lembaga Pendidikan Penyedia Calon Birokrat Pemerintahan yang Profesional.',

          'SETTING_URL_MARS' => 'https://youtu.be/Ne-SYQ7GlZw',
          'SETTING_URL_HYMNE' => 'https://youtu.be/7Xro3qZieVQ',

          'SETTING_CREATED_AT' => Carbon::now('Asia/Jakarta'),
          'SETTING_CREATED_BY' => 1,
        ]);
    }
}
