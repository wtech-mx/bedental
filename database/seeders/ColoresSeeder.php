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
            'color' => '#aad8e4',
        ]);

        $colores = Colores::create([
            'servicio' => 'operatoria',
            'color' => '#b8d77f',
        ]);

        $colores = Colores::create([
            'servicio' => 'ortodoncia',
            'color' => '#ffa857',
        ]);

        $colores = Colores::create([
            'servicio' => 'cirugia_extraccion',
            'color' => '#8ab1ff',
        ]);

        $colores = Colores::create([
            'servicio' => 'retenedores',
            'color' => '#80d67a',
        ]);
    }
}
