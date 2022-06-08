<?php

namespace Database\Factories;

use App\Models\Factura;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FacturaFactory extends Factory
{
    protected $model = Factura::class;

    public function definition()
    {
        return [
			'id_cliente' => $this->faker->name,
			'name' => $this->faker->name,
			'date' => $this->faker->name,
			'file_name' => $this->faker->name,
        ];
    }
}
