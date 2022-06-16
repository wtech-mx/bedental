<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Client;

class Antecedente extends Model
{
	use HasFactory;

    public $timestamps = true;

    protected $table = 'antecedentes';

    protected $fillable = ['id_client','antecedente1','tratamiento1','tiempo1','parentesco1','antecedente2','tratamiento2','tiempo2','parentesco2','antecedente3','tratamiento3','tiempo3','parentesco3','antecedente4','tratamiento4','tiempo4','parentesco4','antecedente5','tratamiento5','tiempo5','parentesco5','antecedente6','tratamiento6','tiempo6','parentesco6','antecedente7','tratamiento7','tiempo7','parentesco7','antecedente8','tratamiento8','tiempo8','parentesco8','antecedente9','tratamiento9','tiempo9','parentesco9','antecedente10','tratamiento10','tiempo10','parentesco10','antecedente11','tratamiento11','tiempo11','parentesco11','antecedente12','tratamiento12','tiempo12','parentesco12','antecedente13','tratamiento13','tiempo13','parentesco13','antecedente14','tratamiento14','tiempo14','parentesco14','antecedente15','tratamiento15','tiempo15','parentesco15','antecedente16','tratamiento16','tiempo16','parentesco16','antecedente17','tratamiento17','tiempo17','parentesco17','antecedente18','tratamiento18','tiempo18','parentesco18','pregunta1','pregunta2', 'pregunta3', 'pregunta4', 'pregunta5', 'pregunta6', 'pregunta7', 'pregunta8', 'pregunta9', 'pregunta10','pregunta11','pregunta12', 'pregunta13', 'descripcion1', 'descripcion2', 'descripcion3', 'descripcion4', 'descripcion5', 'descripcion6', 'descripcion7', 'descripcion8', 'descripcion9', 'descripcion10', 'medicamentos', 'varicela', 'sarampion', 'rubeola', 'escarlatina', 'vih', 'hepatitis', 'vph', 'otras_tran', 'covid', 'influenza', 'epoc', 'asma', 'otras_res','peso','talla'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function client()
    {
        return $this->hasOne('App\Models\Client', 'id', 'id_client');
    }

    public function Radiografico()
    {
        return $this->hasOne('App\Models\Radiografico', 'id_antecedente', 'id');
    }

}
