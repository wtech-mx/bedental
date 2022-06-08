<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'facturas';

    protected $fillable = ['id_cliente','name','date','file_name' ,'file_name2'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'id_cliente');
    }

}
