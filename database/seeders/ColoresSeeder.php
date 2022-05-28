<?php

namespace Database\Seeders;

use App\Models\Colores;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colores = Colores::create([
            'limpieza' => '#8e5252',
            'operatoria' => '#2eff58',
            'ortodoncia' => '#259dad',
            'cirugia_extraccion' => '#aae114'
        ]);
    }
}
