<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odontograma extends Model
{
    use HasFactory;
    protected $table = 'odontograma';
    public $timestamps = false;

    protected $fillable = [
    'id_clients',
    'id_doctor',
    'estatus',
    'fecha',
    'observaciones',
    'total',
    ];

    public function Client()
    {
       return $this->belongsTo(Client::class,'id_clients');
    }

    public function Doctor()
    {
       return $this->belongsTo(Especialist::class,'id_doctor');
    }
}
