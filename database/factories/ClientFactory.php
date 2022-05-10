<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition()
    {
        return [
			'nombre' => $this->faker->name,
			'apellido' => $this->faker->name,
			'edad' => $this->faker->name,
			'sanguineo' => $this->faker->name,
			'ocupacion' => $this->faker->name,
			'telefono' => $this->faker->name,
			'fecha_nacimiento' => $this->faker->name,
			'email' => $this->faker->name,
			'domicilio_fiscal' => $this->faker->name,
			'regimen_fiscal' => $this->faker->name,
			'rfc' => $this->faker->name,
			'razon_social' => $this->faker->name,
			'correo_fiscal' => $this->faker->name,
			'cfdi' => $this->faker->name,
			'seguro' => $this->faker->name,
			'poliza' => $this->faker->name,
			'empresa' => $this->faker->name,
        ];
    }
}
