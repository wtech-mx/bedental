<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hunts extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'hunts';

    protected $fillable = ['od','nombre','img','permanentes'];

}
