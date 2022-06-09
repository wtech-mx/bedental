<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Antecedente;
use App\Models\Client;
use App\Models\Radiografico;

class Antecedentes extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_client, $antecedente1, $tratamiento1, $tiempo1, $parentesco1, $antecedente2, $tratamiento2, $tiempo2, $parentesco2, $antecedente3, $tratamiento3, $tiempo3, $parentesco3, $antecedente4, $tratamiento4, $tiempo4, $parentesco4, $antecedente5, $tratamiento5, $tiempo5, $parentesco5, $antecedente6, $tratamiento6, $tiempo6, $parentesco6, $antecedente7, $tratamiento7, $tiempo7, $parentesco7, $antecedente8, $tratamiento8, $tiempo8, $parentesco8, $antecedente9, $tratamiento9, $tiempo9, $parentesco9, $antecedente10, $tratamiento10, $tiempo10, $parentesco10, $antecedente11, $tratamiento11, $tiempo11, $parentesco11, $antecedente12, $tratamiento12, $tiempo12, $parentesco12, $antecedente13, $tratamiento13, $tiempo13, $parentesco13, $antecedente14, $tratamiento14, $tiempo14, $parentesco14, $antecedente15, $tratamiento15, $tiempo15, $parentesco15, $antecedente16, $tratamiento16, $tiempo16, $parentesco16, $antecedente17, $tratamiento17, $tiempo17, $parentesco17, $antecedente18, $tratamiento18, $tiempo18, $parentesco18, $pregunta1, $pregunta2, $pregunta3, $pregunta4, $pregunta6, $pregunta7, $pregunta8, $pregunta9, $pregunta10, $pregunta11, $pregunta12, $pregunta13, $descripcion1, $descripcion2, $descripcion3, $descripcion4, $descripcion5, $descripcion6, $descripcion7, $descripcion8, $descripcion9, $descripcion10, $medicamentos, $varicela, $sarampion, $rubeola, $escarlatina, $vih, $hepatitis, $vph, $otras_tran, $covid, $influenza, $epoc, $asma, $otras_res;
    public $updateMode = false;
    public $countries = [], $cities = [];
    public $country , $city;

    public function mount(){
        $this->countries = Antecedente::all();
        $this->radio = Radiografico::all();
        $this->cities = collect();
    }

    public function render()
    {
         $client = Client::get();
         $radiografico = Radiografico::get();


		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.antecedentes.view', [
            'client' => $client,
            'radiografico' => $radiografico,
            'antecedentes' => Antecedente::latest(),
        ]);
    }

    public function updatedCountry($value){
        $this->cities = Radiografico::where('id_antecedente', $value)->get();
        $this->city =  $this->cities->first()->id ?? null;
    }

    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }

    private function resetInput()
    {
		$this->antecedente1 = null;
		$this->tratamiento1 = null;
		$this->tiempo1 = null;
		$this->parentesco1 = null;
		$this->antecedente2 = null;
		$this->tratamiento2 = null;
		$this->tiempo2 = null;
		$this->parentesco2 = null;
		$this->antecedente3 = null;
		$this->tratamiento3 = null;
		$this->tiempo3 = null;
		$this->parentesco3 = null;
		$this->antecedente4 = null;
		$this->tratamiento4 = null;
		$this->tiempo4 = null;
		$this->parentesco4 = null;
		$this->antecedente5 = null;
		$this->tratamiento5 = null;
		$this->tiempo5 = null;
		$this->parentesco5 = null;
		$this->antecedente6 = null;
		$this->tratamiento6 = null;
		$this->tiempo6 = null;
		$this->parentesco6 = null;
		$this->antecedente7 = null;
		$this->tratamiento7 = null;
		$this->tiempo7 = null;
		$this->parentesco7 = null;
		$this->antecedente8 = null;
		$this->tratamiento8 = null;
		$this->tiempo8 = null;
		$this->parentesco8 = null;
		$this->antecedente9 = null;
		$this->tratamiento9 = null;
		$this->tiempo9 = null;
		$this->parentesco9 = null;
		$this->antecedente10 = null;
		$this->tratamiento10 = null;
		$this->tiempo10 = null;
		$this->parentesco10 = null;
		$this->antecedente11 = null;
		$this->tratamiento11 = null;
		$this->tiempo11 = null;
		$this->parentesco11 = null;
		$this->antecedente12 = null;
		$this->tratamiento12 = null;
		$this->tiempo12 = null;
		$this->parentesco12 = null;
		$this->antecedente13 = null;
		$this->tratamiento13 = null;
		$this->tiempo13 = null;
		$this->parentesco13 = null;
		$this->antecedente14 = null;
		$this->tratamiento14 = null;
		$this->tiempo14 = null;
		$this->parentesco14 = null;
		$this->antecedente15 = null;
		$this->tratamiento15 = null;
		$this->tiempo15 = null;
		$this->parentesco15 = null;
		$this->antecedente16 = null;
		$this->tratamiento16 = null;
		$this->tiempo16 = null;
		$this->parentesco16 = null;
		$this->antecedente17 = null;
		$this->tratamiento17 = null;
		$this->tiempo17 = null;
		$this->parentesco17 = null;
		$this->antecedente18 = null;
		$this->tratamiento18 = null;
		$this->tiempo18 = null;
		$this->parentesco18 = null;
        $this->varicela = null;
        $this->sarampion = null;
        $this->rubeola = null;
        $this->escarlatina = null;
        $this->vih = null;
        $this->hepatitis = null;
        $this->vph = null;
        $this->otras_tran = null;
        $this->covid = null;
        $this->influenza = null;
        $this->epoc = null;
        $this->asma = null;
        $this->otras_res = null;

        $this->medicamentos = null;
        $this->pregunta1 = null;
        $this->pregunta2 = null;
        $this->pregunta3 = null;
        $this->pregunta4 = null;
        $this->pregunta5 = null;
        $this->pregunta6 = null;
        $this->pregunta7 = null;
        $this->pregunta8 = null;
        $this->pregunta9 = null;
        $this->pregunta10 = null;
        $this->pregunta11 = null;
        $this->pregunta12 = null;
        $this->pregunta13 = null;
        $this->descripcion1 = null;
        $this->descripcion2 = null;
        $this->descripcion3 = null;
        $this->descripcion4 = null;
        $this->descripcion5 = null;
        $this->descripcion6 = null;
        $this->descripcion7 = null;
        $this->descripcion8 = null;
        $this->descripcion9 = null;
        $this->descripcion10 = null;
    }

    public function store()
    {
        $this->validate([
		'id_client' => 'required',
        ]);

        Antecedente::create([
			'id_client' => $this-> id_client,
			'antecedente1' => $this-> antecedente1,
			'tratamiento1' => $this-> tratamiento1,
			'tiempo1' => $this-> tiempo1,
			'parentesco1' => $this-> parentesco1,
			'antecedente2' => $this-> antecedente2,
			'tratamiento2' => $this-> tratamiento2,
			'tiempo2' => $this-> tiempo2,
			'parentesco2' => $this-> parentesco2,
			'antecedente3' => $this-> antecedente3,
			'tratamiento3' => $this-> tratamiento3,
			'tiempo3' => $this-> tiempo3,
			'parentesco3' => $this-> parentesco3,
			'antecedente4' => $this-> antecedente4,
			'tratamiento4' => $this-> tratamiento4,
			'tiempo4' => $this-> tiempo4,
			'parentesco4' => $this-> parentesco4,
			'antecedente5' => $this-> antecedente5,
			'tratamiento5' => $this-> tratamiento5,
			'tiempo5' => $this-> tiempo5,
			'parentesco5' => $this-> parentesco5,
			'antecedente6' => $this-> antecedente6,
			'tratamiento6' => $this-> tratamiento6,
			'tiempo6' => $this-> tiempo6,
			'parentesco6' => $this-> parentesco6,
			'antecedente7' => $this-> antecedente7,
			'tratamiento7' => $this-> tratamiento7,
			'tiempo7' => $this-> tiempo7,
			'parentesco7' => $this-> parentesco7,
			'antecedente8' => $this-> antecedente8,
			'tratamiento8' => $this-> tratamiento8,
			'tiempo8' => $this-> tiempo8,
			'parentesco8' => $this-> parentesco8,
			'antecedente9' => $this-> antecedente9,
			'tratamiento9' => $this-> tratamiento9,
			'tiempo9' => $this-> tiempo9,
			'parentesco9' => $this-> parentesco9,
			'antecedente10' => $this-> antecedente10,
			'tratamiento10' => $this-> tratamiento10,
			'tiempo10' => $this-> tiempo10,
			'parentesco10' => $this-> parentesco10,
			'antecedente11' => $this-> antecedente11,
			'tratamiento11' => $this-> tratamiento11,
			'tiempo11' => $this-> tiempo11,
			'parentesco11' => $this-> parentesco11,
			'antecedente12' => $this-> antecedente12,
			'tratamiento12' => $this-> tratamiento12,
			'tiempo12' => $this-> tiempo12,
			'parentesco12' => $this-> parentesco12,
			'antecedente13' => $this-> antecedente13,
			'tratamiento13' => $this-> tratamiento13,
			'tiempo13' => $this-> tiempo13,
			'parentesco13' => $this-> parentesco13,
			'antecedente14' => $this-> antecedente14,
			'tratamiento14' => $this-> tratamiento14,
			'tiempo14' => $this-> tiempo14,
			'parentesco14' => $this-> parentesco14,
			'antecedente15' => $this-> antecedente15,
			'tratamiento15' => $this-> tratamiento15,
			'tiempo15' => $this-> tiempo15,
			'parentesco15' => $this-> parentesco15,
			'antecedente16' => $this-> antecedente16,
			'tratamiento16' => $this-> tratamiento16,
			'tiempo16' => $this-> tiempo16,
			'parentesco16' => $this-> parentesco16,
			'antecedente17' => $this-> antecedente17,
			'tratamiento17' => $this-> tratamiento17,
			'tiempo17' => $this-> tiempo17,
			'parentesco17' => $this-> parentesco17,
			'antecedente18' => $this-> antecedente18,
			'tratamiento18' => $this-> tratamiento18,
			'tiempo18' => $this-> tiempo18,
			'parentesco18' => $this-> parentesco18,
            'varicela' => $this-> varicela,
            'sarampion' => $this-> sarampion,
            'rubeola' => $this-> rubeola,
            'escarlatina' => $this-> escarlatina,
            'vih' => $this-> vih,
            'hepatitis' => $this-> hepatitis,
            'vph' => $this-> vph,
            'otras_tran' => $this-> otras_tran,
            'covid' => $this-> covid,
            'influenza' => $this-> influenza,
            'epoc' => $this-> epoc,
            'asma' => $this-> asma,
            'otras_res' => $this-> otras_res,

            'medicamentos' => $this-> medicamentos,
            'pregunta1' => $this-> pregunta1,
            'pregunta2' => $this-> pregunta2,
            'pregunta3' => $this-> pregunta3,
            'pregunta4' => $this-> pregunta4,
            'pregunta5' => $this-> pregunta5,
            'pregunta6' => $this-> pregunta6,
            'pregunta7' => $this-> pregunta7,
            'pregunta8' => $this-> pregunta8,
            'pregunta9' => $this-> pregunta9,
            'pregunta10' => $this-> pregunta10,
            'pregunta11' => $this-> pregunta11,
            'pregunta12' => $this-> pregunta12,
            'pregunta13' => $this-> pregunta13,
            'descripcion1' => $this-> descripcion1,
            'descripcion2' => $this-> descripcion2,
            'descripcion3' => $this-> descripcion3,
            'descripcion4' => $this-> descripcion4,
            'descripcion5' => $this-> descripcion5,
            'descripcion6' => $this-> descripcion6,
            'descripcion7' => $this-> descripcion7,
            'descripcion8' => $this-> descripcion8,
            'descripcion9' => $this-> descripcion9,
            'descripcion10' => $this-> descripcion10
        ]);

        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Antecedente Successfully created.');
    }

    public function edit($id)
    {
        $record = Antecedente::findOrFail($id);
        $this->selected_id = $id;
		$this->antecedente1 = $record-> antecedente1;
		$this->tratamiento1 = $record-> tratamiento1;
		$this->tiempo1 = $record-> tiempo1;
		$this->parentesco1 = $record-> parentesco1;
		$this->antecedente2 = $record-> antecedente2;
		$this->tratamiento2 = $record-> tratamiento2;
		$this->tiempo2 = $record-> tiempo2;
		$this->parentesco2 = $record-> parentesco2;
		$this->antecedente3 = $record-> antecedente3;
		$this->tratamiento3 = $record-> tratamiento3;
		$this->tiempo3 = $record-> tiempo3;
		$this->parentesco3 = $record-> parentesco3;
		$this->antecedente4 = $record-> antecedente4;
		$this->tratamiento4 = $record-> tratamiento4;
		$this->tiempo4 = $record-> tiempo4;
		$this->parentesco4 = $record-> parentesco4;
		$this->antecedente5 = $record-> antecedente5;
		$this->tratamiento5 = $record-> tratamiento5;
		$this->tiempo5 = $record-> tiempo5;
		$this->parentesco5 = $record-> parentesco5;
		$this->antecedente6 = $record-> antecedente6;
		$this->tratamiento6 = $record-> tratamiento6;
		$this->tiempo6 = $record-> tiempo6;
		$this->parentesco6 = $record-> parentesco6;
		$this->antecedente7 = $record-> antecedente7;
		$this->tratamiento7 = $record-> tratamiento7;
		$this->tiempo7 = $record-> tiempo7;
		$this->parentesco7 = $record-> parentesco7;
		$this->antecedente8 = $record-> antecedente8;
		$this->tratamiento8 = $record-> tratamiento8;
		$this->tiempo8 = $record-> tiempo8;
		$this->parentesco8 = $record-> parentesco8;
		$this->antecedente9 = $record-> antecedente9;
		$this->tratamiento9 = $record-> tratamiento9;
		$this->tiempo9 = $record-> tiempo9;
		$this->parentesco9 = $record-> parentesco9;
		$this->antecedente10 = $record-> antecedente10;
		$this->tratamiento10 = $record-> tratamiento10;
		$this->tiempo10 = $record-> tiempo10;
		$this->parentesco10 = $record-> parentesco10;
		$this->antecedente11 = $record-> antecedente11;
		$this->tratamiento11 = $record-> tratamiento11;
		$this->tiempo11 = $record-> tiempo11;
		$this->parentesco11 = $record-> parentesco11;
		$this->antecedente12 = $record-> antecedente12;
		$this->tratamiento12 = $record-> tratamiento12;
		$this->tiempo12 = $record-> tiempo12;
		$this->parentesco12 = $record-> parentesco12;
		$this->antecedente13 = $record-> antecedente13;
		$this->tratamiento13 = $record-> tratamiento13;
		$this->tiempo13 = $record-> tiempo13;
		$this->parentesco13 = $record-> parentesco13;
		$this->antecedente14 = $record-> antecedente14;
		$this->tratamiento14 = $record-> tratamiento14;
		$this->tiempo14 = $record-> tiempo14;
		$this->parentesco14 = $record-> parentesco14;
		$this->antecedente15 = $record-> antecedente15;
		$this->tratamiento15 = $record-> tratamiento15;
		$this->tiempo15 = $record-> tiempo15;
		$this->parentesco15 = $record-> parentesco15;
		$this->antecedente16 = $record-> antecedente16;
		$this->tratamiento16 = $record-> tratamiento16;
		$this->tiempo16 = $record-> tiempo16;
		$this->parentesco16 = $record-> parentesco16;
		$this->antecedente17 = $record-> antecedente17;
		$this->tratamiento17 = $record-> tratamiento17;
		$this->tiempo17 = $record-> tiempo17;
		$this->parentesco17 = $record-> parentesco17;
		$this->antecedente18 = $record-> antecedente18;
		$this->tratamiento18 = $record-> tratamiento18;
		$this->tiempo18 = $record-> tiempo18;
		$this->parentesco18 = $record-> parentesco18;
        $this->varicela = $record-> varicela;
        $this->sarampion = $record-> sarampion;
        $this->rubeola = $record-> rubeola;
        $this->escarlatina = $record-> escarlatina;
        $this->vih = $record-> vih;
        $this->hepatitis = $record-> hepatitis;
        $this->vph = $record-> vph;
        $this->otras_tran = $record-> otras_tran;
        $this->covid = $record-> covid;
        $this->influenza = $record-> influenza;
        $this->epoc = $record-> epoc;
        $this->asma = $record-> asma;
        $this->otras_res = $record-> otras_res;

        $this->medicamentos = $record-> medicamentos;
        $this->pregunta1 = $record-> pregunta1;
        $this->pregunta2 = $record-> pregunta2;
        $this->pregunta3 = $record-> pregunta3;
        $this->pregunta4 = $record-> pregunta4;
        $this->pregunta5 = $record-> pregunta5;
        $this->pregunta6 = $record-> pregunta6;
        $this->pregunta7 = $record-> pregunta7;
        $this->pregunta8 = $record-> pregunta8;
        $this->pregunta9 = $record-> pregunta9;
        $this->pregunta10 = $record-> pregunta10;
        $this->pregunta11 = $record-> pregunta11;
        $this->pregunta12 = $record-> pregunta12;
        $this->pregunta13 = $record-> pregunta13;
        $this->descripcion1 = $record-> descripcion1;
        $this->descripcion2 = $record-> descripcion2;
        $this->descripcion3 = $record-> descripcion3;
        $this->descripcion4 = $record-> descripcion4;
        $this->descripcion5 = $record-> descripcion5;
        $this->descripcion6 = $record-> descripcion6;
        $this->descripcion7 = $record-> descripcion7;
        $this->descripcion8 = $record-> descripcion8;
        $this->descripcion9 = $record-> descripcion9;
        $this->descripcion10 = $record-> descripcion10;
        $this->updateMode = true;
    }

    public function update()
    {

        if ($this->selected_id) {
			$record = Antecedente::find($this->selected_id);
            $record->update([
			'antecedente1' => $this-> antecedente1,
			'tratamiento1' => $this-> tratamiento1,
			'tiempo1' => $this-> tiempo1,
			'parentesco1' => $this-> parentesco1,
			'antecedente2' => $this-> antecedente2,
			'tratamiento2' => $this-> tratamiento2,
			'tiempo2' => $this-> tiempo2,
			'parentesco2' => $this-> parentesco2,
			'antecedente3' => $this-> antecedente3,
			'tratamiento3' => $this-> tratamiento3,
			'tiempo3' => $this-> tiempo3,
			'parentesco3' => $this-> parentesco3,
			'antecedente4' => $this-> antecedente4,
			'tratamiento4' => $this-> tratamiento4,
			'tiempo4' => $this-> tiempo4,
			'parentesco4' => $this-> parentesco4,
			'antecedente5' => $this-> antecedente5,
			'tratamiento5' => $this-> tratamiento5,
			'tiempo5' => $this-> tiempo5,
			'parentesco5' => $this-> parentesco5,
			'antecedente6' => $this-> antecedente6,
			'tratamiento6' => $this-> tratamiento6,
			'tiempo6' => $this-> tiempo6,
			'parentesco6' => $this-> parentesco6,
			'antecedente7' => $this-> antecedente7,
			'tratamiento7' => $this-> tratamiento7,
			'tiempo7' => $this-> tiempo7,
			'parentesco7' => $this-> parentesco7,
			'antecedente8' => $this-> antecedente8,
			'tratamiento8' => $this-> tratamiento8,
			'tiempo8' => $this-> tiempo8,
			'parentesco8' => $this-> parentesco8,
			'antecedente9' => $this-> antecedente9,
			'tratamiento9' => $this-> tratamiento9,
			'tiempo9' => $this-> tiempo9,
			'parentesco9' => $this-> parentesco9,
			'antecedente10' => $this-> antecedente10,
			'tratamiento10' => $this-> tratamiento10,
			'tiempo10' => $this-> tiempo10,
			'parentesco10' => $this-> parentesco10,
			'antecedente11' => $this-> antecedente11,
			'tratamiento11' => $this-> tratamiento11,
			'tiempo11' => $this-> tiempo11,
			'parentesco11' => $this-> parentesco11,
			'antecedente12' => $this-> antecedente12,
			'tratamiento12' => $this-> tratamiento12,
			'tiempo12' => $this-> tiempo12,
			'parentesco12' => $this-> parentesco12,
			'antecedente13' => $this-> antecedente13,
			'tratamiento13' => $this-> tratamiento13,
			'tiempo13' => $this-> tiempo13,
			'parentesco13' => $this-> parentesco13,
			'antecedente14' => $this-> antecedente14,
			'tratamiento14' => $this-> tratamiento14,
			'tiempo14' => $this-> tiempo14,
			'parentesco14' => $this-> parentesco14,
			'antecedente15' => $this-> antecedente15,
			'tratamiento15' => $this-> tratamiento15,
			'tiempo15' => $this-> tiempo15,
			'parentesco15' => $this-> parentesco15,
			'antecedente16' => $this-> antecedente16,
			'tratamiento16' => $this-> tratamiento16,
			'tiempo16' => $this-> tiempo16,
			'parentesco16' => $this-> parentesco16,
			'antecedente17' => $this-> antecedente17,
			'tratamiento17' => $this-> tratamiento17,
			'tiempo17' => $this-> tiempo17,
			'parentesco17' => $this-> parentesco17,
			'antecedente18' => $this-> antecedente18,
			'tratamiento18' => $this-> tratamiento18,
			'tiempo18' => $this-> tiempo18,
			'parentesco18' => $this-> parentesco18,
            'varicela' => $this-> varicela,
            'sarampion' => $this-> sarampion,
            'rubeola' => $this-> rubeola,
            'escarlatina' => $this-> escarlatina,
            'vih' => $this-> vih,
            'hepatitis' => $this-> hepatitis,
            'vph' => $this-> vph,
            'otras_tran' => $this-> otras_tran,
            'covid' => $this-> covid,
            'influenza' => $this-> influenza,
            'epoc' => $this-> epoc,
            'asma' => $this-> asma,
            'otras_res' => $this-> otras_res,

            'medicamentos' => $this-> medicamentos,
            'pregunta1' => $this-> pregunta1,
            'pregunta2' => $this-> pregunta2,
            'pregunta3' => $this-> pregunta3,
            'pregunta4' => $this-> pregunta4,
            'pregunta5' => $this-> pregunta5,
            'pregunta6' => $this-> pregunta6,
            'pregunta7' => $this-> pregunta7,
            'pregunta8' => $this-> pregunta8,
            'pregunta9' => $this-> pregunta9,
            'pregunta10' => $this-> pregunta10,
            'pregunta11' => $this-> pregunta11,
            'pregunta12' => $this-> pregunta12,
            'pregunta13' => $this-> pregunta13,
            'descripcion1' => $this-> descripcion1,
            'descripcion2' => $this-> descripcion2,
            'descripcion3' => $this-> descripcion3,
            'descripcion4' => $this-> descripcion4,
            'descripcion5' => $this-> descripcion5,
            'descripcion6' => $this-> descripcion6,
            'descripcion7' => $this-> descripcion7,
            'descripcion8' => $this-> descripcion8,
            'descripcion9' => $this-> descripcion9,
            'descripcion10' => $this-> descripcion10,
            ]);


            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Antecedente Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Antecedente::where('id', $id);
            $record->delete();
        }
    }
}
