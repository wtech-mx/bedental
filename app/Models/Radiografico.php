<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radiografico extends Model
{
	use HasFactory;

    public $timestamps = false;

    protected $table = 'radiograficos';

    protected $fillable = ['id_antecedente','name','name','date','file_name'];


}
