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
            'servicio' => 'limpieza',
            'color' => '#8e5252',
        ]);

        $colores = Colores::create([
            'servicio' => 'operatoria',
            'color' => '#2eff58',
        ]);

        $colores = Colores::create([
            'servicio' => 'ortodoncia',
            'color' => '#259dad',
        ]);

        $colores = Colores::create([
            'servicio' => 'cirugia_extraccion',
            'color' => '#aae114',
        ]);

        $colores = Colores::create([
            'servicio' => 'retenedores',
            'color' => '#2eb280',
        ]);
    }
}
