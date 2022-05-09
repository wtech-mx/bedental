<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialist extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'especialists';

    protected $fillable = ['nombre',
    'apellido',
    'cedula',
    'especialidad',
    'telefono',
    'fecha_nacimiento',
    'email',
    'color',
    'domicilio_fiscal',
    'regimen_fiscal',
    'rfc',
    'razon_social',
    'correo_fiscal',
    'cfdi',
    'seguro',
    'poliza',
    'empresa',
];

}
