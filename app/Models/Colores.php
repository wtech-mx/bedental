<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colores extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'colores';

    protected $fillable = ['limpieza','operatoria','ortodoncia','cirugia_extraccion', 'retenedores'];

}
