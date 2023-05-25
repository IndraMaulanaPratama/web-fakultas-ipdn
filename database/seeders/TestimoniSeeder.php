<?php

namespace Database\Seeders;

use App\Models\testimoni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        testimoni::insert([
          [
            'TESTIMONI_SETTING' => 1,
            'TESTIMONI_USERNAME' => 'Bagus Muhamad Affandi',

            'TESTIMONI_CONTENT' => 'Suatu kebanggan bagi angkatan kami , IPDN XXX Satya Haprabu yang menginjakan kaki pertama dan menjadi angkatan pertama yang dididik dan ditempa di IPDN Kampus Kalbar yang baru.',

            'TESTIMONI_BATCH' => 2000,
            'TESTIMONI_IMAGE' => 'default_testimoni.jpg',
          ],

          [
            'TESTIMONI_SETTING' => 1,
            'TESTIMONI_USERNAME' => 'Riska Merlinda',

            'TESTIMONI_CONTENT' => 'Suatu kebanggan bagi angkatan kami , IPDN XXX Satya Haprabu yang menginjakan kaki pertama dan menjadi angkatan pertama yang dididik dan ditempa di IPDN Kampus Kalbar yang baru.',

            'TESTIMONI_BATCH' => 1998,
            'TESTIMONI_IMAGE' => 'default_testimoni.jpg',
          ],

          [
            'TESTIMONI_SETTING' => 1,
            'TESTIMONI_USERNAME' => 'Rama Wirahma',

            'TESTIMONI_CONTENT' => 'Suatu kebanggan bagi angkatan kami , IPDN XXX Satya Haprabu yang menginjakan kaki pertama dan menjadi angkatan pertama yang dididik dan ditempa di IPDN Kampus Kalbar yang baru.',

            'TESTIMONI_BATCH' => 2005,
            'TESTIMONI_IMAGE' => 'default_testimoni.jpg',
          ],
        ]);
    }
}
