<?php

namespace App\Http\Livewire;

use App\Models\Antecedente;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Client;

class Clients extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $apellido, $edad, $sanguineo, $ocupacion, $telefono, $fecha_nacimiento, $email, $domicilio_fiscal, $regimen_fiscal, $rfc, $razon_social, $correo_fiscal, $cfdi, $seguro, $poliza, $empresa;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.clients.view', [
            'clients' => Client::latest()
						->orWhere('nombre', 'LIKE', $keyWord)
						->orWhere('apellido', 'LIKE', $keyWord)
						->orWhere('edad', 'LIKE', $keyWord)
						->orWhere('sanguineo', 'LIKE', $keyWord)
						->orWhere('ocupacion', 'LIKE', $keyWord)
						->orWhere('telefono', 'LIKE', $keyWord)
						->orWhere('fecha_nacimiento', 'LIKE', $keyWord)
						->orWhere('email', 'LIKE', $keyWord)
						->orWhere('domicilio_fiscal', 'LIKE', $keyWord)
						->orWhere('regimen_fiscal', 'LIKE', $keyWord)
						->orWhere('rfc', 'LIKE', $keyWord)
						->orWhere('razon_social', 'LIKE', $keyWord)
						->orWhere('correo_fiscal', 'LIKE', $keyWord)
						->orWhere('cfdi', 'LIKE', $keyWord)
						->orWhere('seguro', 'LIKE', $keyWord)
						->orWhere('poliza', 'LIKE', $keyWord)
						->orWhere('empresa', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }

    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }

    private function resetInput()
    {
		$this->nombre = null;
		$this->apellido = null;
		$this->edad = null;
		$this->sanguineo = null;
		$this->ocupacion = null;
		$this->telefono = null;
		$this->fecha_nacimiento = null;
		$this->email = null;
		$this->domicilio_fiscal = null;
		$this->regimen_fiscal = null;
		$this->rfc = null;
		$this->razon_social = null;
		$this->correo_fiscal = null;
		$this->cfdi = null;
		$this->seguro = null;
		$this->poliza = null;
		$this->empresa = null;
    }

    public function store()
    {
        $this->validate([
		'nombre' => 'required',
		'apellido' => 'required',
		'telefono' => 'required',
        ]);

        Client::create([
			'nombre' => $this-> nombre,
			'apellido' => $this-> apellido,
			'edad' => $this-> edad,
			'sanguineo' => $this-> sanguineo,
			'ocupacion' => $this-> ocupacion,
			'telefono' => $this-> telefono,
			'fecha_nacimiento' => $this-> fecha_nacimiento,
			'email' => $this-> email,
			'domicilio_fiscal' => $this-> domicilio_fiscal,
			'regimen_fiscal' => $this-> regimen_fiscal,
			'rfc' => $this-> rfc,
			'razon_social' => $this-> razon_social,
			'correo_fiscal' => $this-> correo_fiscal,
			'cfdi' => $this-> cfdi,
			'seguro' => $this-> seguro,
			'poliza' => $this-> poliza,
			'empresa' => $this-> empresa
        ]);

        $cliente = Client::orderBy('id', 'DESC')->first();
        $antecedente = new Antecedente;
        $antecedente->id_client = $cliente->id;
        $antecedente->save();



        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Client Successfully created.');
    }

    public function edit($id)
    {
        $record = Client::findOrFail($id);

        $this->selected_id = $id;
		$this->nombre = $record-> nombre;
		$this->apellido = $record-> apellido;
		$this->edad = $record-> edad;
		$this->sanguineo = $record-> sanguineo;
		$this->ocupacion = $record-> ocupacion;
		$this->telefono = $record-> telefono;
		$this->fecha_nacimiento = $record-> fecha_nacimiento;
		$this->email = $record-> email;
		$this->domicilio_fiscal = $record-> domicilio_fiscal;
		$this->regimen_fiscal = $record-> regimen_fiscal;
		$this->rfc = $record-> rfc;
		$this->razon_social = $record-> razon_social;
		$this->correo_fiscal = $record-> correo_fiscal;
		$this->cfdi = $record-> cfdi;
		$this->seguro = $record-> seguro;
		$this->poliza = $record-> poliza;
		$this->empresa = $record-> empresa;

        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nombre' => 'required',
		'apellido' => 'required',
		'telefono' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Client::find($this->selected_id);
            $record->update([
			'nombre' => $this-> nombre,
			'apellido' => $this-> apellido,
			'edad' => $this-> edad,
			'sanguineo' => $this-> sanguineo,
			'ocupacion' => $this-> ocupacion,
			'telefono' => $this-> telefono,
			'fecha_nacimiento' => $this-> fecha_nacimiento,
			'email' => $this-> email,
			'domicilio_fiscal' => $this-> domicilio_fiscal,
			'regimen_fiscal' => $this-> regimen_fiscal,
			'rfc' => $this-> rfc,
			'razon_social' => $this-> razon_social,
			'correo_fiscal' => $this-> correo_fiscal,
			'cfdi' => $this-> cfdi,
			'seguro' => $this-> seguro,
			'poliza' => $this-> poliza,
			'empresa' => $this-> empresa
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Client Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Client::where('id', $id);
            $record->delete();
        }
    }
}
