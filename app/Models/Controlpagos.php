<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Controlpagos extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'controlpagos';

    protected $fillable = ['id_clients','id_alertas','id_doctor','tratamiento','fecha' ,'costo_total', 'pagado','saldo_pendiente','firma_doctor','firma_paciente'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'id_clients');
    }

    public function especialists()
    {
        return $this->hasOne('App\Models\Especialist', 'id', 'id_doctor');
    }

    public function alertas()
    {
        return $this->hasOne('App\Models\Alertas', 'id', 'id_alertas');
    }

}
