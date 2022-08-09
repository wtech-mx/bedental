<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dientes extends Model
{
    use HasFactory;
    protected $table = 'dientes';
    public $timestamps = false;

    protected $fillable = [
    'id_odontograma',
    'diente',
    'lado1',
    'lado2',
    'lado3',
    'lado4',
    'lado5',
    ];
    public function Odontograma()
    {
        return $this->hasOne('App\Models\Odontograma', 'id_odontograma', 'id');
    }

}
