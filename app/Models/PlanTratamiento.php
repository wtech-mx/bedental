<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanTratamiento extends Model
{
    use HasFactory;
    protected $table = 'plan_tratamiento';
    public $timestamps = false;

    protected $fillable = [
    'id_odontograma',
    'od',
    'diagnostico',
    'tratamiento',
    'costo',
    'estatus',
    'fecha',
    ];

    public function Odontograma()
    {
       return $this->belongsTo(Odontograma::class,'id_odontograma');
    }
}
