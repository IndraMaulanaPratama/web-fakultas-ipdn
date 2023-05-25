<?php

namespace Database\Seeders;

use App\Models\logs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class LogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        logs::insert(
            // Setup Sytem by Super Admin
            [
              'LOGS_USER' => 1,
              'LOGS_ACTIVITY' => 'Setup System Web Kampus IPDN Success, Have a nice day brother',

              'LOGS_CREATED_AT' => Carbon::now('Asia/Jakarta'),
            ]
        );
    }
}
