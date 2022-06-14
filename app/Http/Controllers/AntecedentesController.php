<?php

namespace App\Http\Controllers;

use App\Models\Antecedente;
use App\Models\Client;
use App\Models\Radiografico;
use Illuminate\Http\Request;
use Session;

class AntecedentesController extends Controller
{
    public function index()
    {
        $antecedentes = Antecedente::get();
        $client = Client::get();
        $radio = Radiografico::get();

        return view('antecedentes.view', compact('antecedentes', 'client', 'radio'));
    }

    public function update(Request $request, $id)
    {
        $antecedentes = Antecedente::findOrFail($id);
        $antecedentes->antecedente1 = $request-> antecedente1;
        $antecedentes->tratamiento1 = $request-> tratamiento1;
        $antecedentes->tiempo1 = $request-> tiempo1;
        $antecedentes->parentesco1 = $request-> parentesco1;
        $antecedentes->antecedente2 = $request-> antecedente2;
        $antecedentes->tratamiento2 = $request-> tratamiento2;
        $antecedentes->tiempo2 = $request-> tiempo2;
        $antecedentes->parentesco2 = $request-> parentesco2;
        $antecedentes->antecedente3 = $request-> antecedente3;
        $antecedentes->tratamiento3 = $request-> tratamiento3;
        $antecedentes->tiempo3 = $request-> tiempo3;
        $antecedentes->parentesco3 = $request-> parentesco3;
        $antecedentes->antecedente4 = $request-> antecedente4;
        $antecedentes->tratamiento4 = $request-> tratamiento4;
        $antecedentes->tiempo4 = $request-> tiempo4;
        $antecedentes->parentesco4 = $request-> parentesco4;
        $antecedentes->antecedente5 = $request-> antecedente5;
        $antecedentes->tratamiento5 = $request-> tratamiento5;
        $antecedentes->tiempo5 = $request-> tiempo5;
        $antecedentes->parentesco5 = $request-> parentesco5;
        $antecedentes->antecedente6 = $request-> antecedente6;
        $antecedentes->tratamiento6 = $request-> tratamiento6;
        $antecedentes->tiempo6 = $request-> tiempo6;
        $antecedentes->parentesco6 = $request-> parentesco6;
        $antecedentes->antecedente7 = $request-> antecedente7;
        $antecedentes->tratamiento7 = $request-> tratamiento7;
        $antecedentes->tiempo7 = $request-> tiempo7;
        $antecedentes->parentesco7 = $request-> parentesco7;
        $antecedentes->antecedente8 = $request-> antecedente8;
        $antecedentes->tratamiento8 = $request-> tratamiento8;
        $antecedentes->tiempo8 = $request-> tiempo8;
        $antecedentes->parentesco8 = $request-> parentesco8;
        $antecedentes->antecedente9 = $request-> antecedente9;
        $antecedentes->tratamiento9 = $request-> tratamiento9;
        $antecedentes->tiempo9 = $request-> tiempo9;
        $antecedentes->parentesco9 = $request-> parentesco9;
        $antecedentes->antecedente10 = $request-> antecedente10;
        $antecedentes->tratamiento10 = $request-> tratamiento10;
        $antecedentes->tiempo10 = $request-> tiempo10;
        $antecedentes->parentesco10 = $request-> parentesco10;
        $antecedentes->antecedente11 = $request-> antecedente11;
        $antecedentes->tratamiento11 = $request-> tratamiento11;
        $antecedentes->tiempo11 = $request-> tiempo11;
        $antecedentes->parentesco11 = $request-> parentesco11;
        $antecedentes->antecedente12 = $request-> antecedente12;
        $antecedentes->tratamiento12 = $request-> tratamiento12;
        $antecedentes->tiempo12 = $request-> tiempo12;
        $antecedentes->parentesco12 = $request-> parentesco12;
        $antecedentes->antecedente13 = $request-> antecedente13;
        $antecedentes->tratamiento13 = $request-> tratamiento13;
        $antecedentes->tiempo13 = $request-> tiempo13;
        $antecedentes->parentesco13 = $request-> parentesco13;
        $antecedentes->antecedente14 = $request-> antecedente14;
        $antecedentes->tratamiento14 = $request-> tratamiento14;
        $antecedentes->tiempo14 = $request-> tiempo14;
        $antecedentes->parentesco14 = $request-> parentesco14;
        $antecedentes->antecedente15 = $request-> antecedente15;
        $antecedentes->tratamiento15 = $request-> tratamiento15;
        $antecedentes->tiempo15 = $request-> tiempo15;
        $antecedentes->parentesco15 = $request-> parentesco15;
        $antecedentes->antecedente16 = $request-> antecedente16;
        $antecedentes->tratamiento16 = $request-> tratamiento16;
        $antecedentes->tiempo16 = $request-> tiempo16;
        $antecedentes->parentesco16 = $request-> parentesco16;
        $antecedentes->antecedente17 = $request-> antecedente17;
        $antecedentes->tratamiento17 = $request-> tratamiento17;
        $antecedentes->tiempo17 = $request-> tiempo17;
        $antecedentes->parentesco17 = $request-> parentesco17;
        $antecedentes->antecedente18 = $request-> antecedente18;
        $antecedentes->tratamiento18 = $request-> tratamiento18;
        $antecedentes->tiempo18 = $request-> tiempo18;
        $antecedentes->parentesco18 = $request-> parentesco18;
        $antecedentes->varicela = $request-> varicela;
        $antecedentes->sarampion = $request-> sarampion;
        $antecedentes->rubeola = $request-> rubeola;
        $antecedentes->escarlatina = $request-> escarlatina;
        $antecedentes->vih = $request-> vih;
        $antecedentes->hepatitis = $request-> hepatitis;
        $antecedentes->vph = $request-> vph;
        $antecedentes->otras_tran = $request-> otras_tran;
        $antecedentes->covid = $request-> covid;
        $antecedentes->influenza = $request-> influenza;
        $antecedentes->epoc = $request-> epoc;
        $antecedentes->asma = $request-> asma;
        $antecedentes->otras_res = $request-> otras_res;

        $antecedentes->medicamentos = $request-> medicamentos;
        $antecedentes->pregunta1 = $request-> pregunta1;
        $antecedentes->pregunta2 = $request-> pregunta2;
        $antecedentes->pregunta3 = $request-> pregunta3;
        $antecedentes->pregunta4 = $request-> pregunta4;
        $antecedentes->pregunta5 = $request-> pregunta5;
        $antecedentes->pregunta6 = $request-> pregunta6;
        $antecedentes->pregunta7 = $request-> pregunta7;
        $antecedentes->pregunta8 = $request-> pregunta8;
        $antecedentes->pregunta9 = $request-> pregunta9;
        $antecedentes->pregunta10 = $request-> pregunta10;
        $antecedentes->pregunta11 = $request-> pregunta11;
        $antecedentes->pregunta12 = $request-> pregunta12;
        $antecedentes->pregunta13 = $request-> pregunta13;
        $antecedentes->descripcion1 = $request-> descripcion1;
        $antecedentes->descripcion2 = $request-> descripcion2;
        $antecedentes->descripcion3 = $request-> descripcion3;
        $antecedentes->descripcion4 = $request-> descripcion4;
        $antecedentes->descripcion5 = $request-> descripcion5;
        $antecedentes->descripcion6 = $request-> descripcion6;
        $antecedentes->descripcion7 = $request-> descripcion7;
        $antecedentes->descripcion8 = $request-> descripcion8;
        $antecedentes->descripcion9 = $request-> descripcion9;
        $antecedentes->descripcion10 = $request-> descripcion10;
        $antecedentes->update();

        Session::flash('edit', 'Se ha editado sus datos con exito');
        return redirect()->route('antecedentes.index');
    }
}