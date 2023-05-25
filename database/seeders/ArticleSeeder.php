<?php

namespace Database\Seeders;

use App\Models\article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        article::factory()
        ->count(50)
        ->create();
    }
}
