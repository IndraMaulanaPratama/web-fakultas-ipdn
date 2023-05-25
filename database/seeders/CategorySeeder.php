<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        category::insert([
          [
            'CATEGORY_NAME' => 'Berita',
            'CATEGORY_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'CATEGORY_CREATED_BY' => 1,
          ],

          [
            'CATEGORY_NAME' => 'Agenda dan Kegiatan',
            'CATEGORY_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'CATEGORY_CREATED_BY' => 1,
          ],

          [
            'CATEGORY_NAME' => 'Pengabdian Masyarakat',
            'CATEGORY_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'CATEGORY_CREATED_BY' => 1,
          ],

          [
            'CATEGORY_NAME' => 'Prestasi Alumni',
            'CATEGORY_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            'CATEGORY_CREATED_BY' => 1,
          ]

        ]);
    }
}
