<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'clients';

    protected $fillable = ['nombre','apellido','edad','sanguineo','ocupacion','telefono','fecha_nacimiento','email','domicilio_fiscal','regimen_fiscal','rfc','razon_social','correo_fiscal','cfdi','seguro','poliza','empresa','certificado','tipo_plan'];

    public function Antecedente()
    {
        return $this->hasOne('App\Models\Antecedente', 'id_client', 'id');
    }
}
