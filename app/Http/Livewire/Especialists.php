<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Especialist;

class Especialists extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id,
           $keyWord,
           $nombre,
           $apellido,
           $cedula,
           $especialidad,
           $telefono,
           $fecha_nacimiento,
           $email,

           $color,
           $domicilio_fiscal,
           $regimen_fiscal,
           $rfc,
           $razon_social,
           $correo_fiscal,
           $cfdi,
           $seguro,
           $poliza,
           $empresa;

    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.especialists.view', [
            'especialists' => Especialist::latest()
				->orWhere('nombre', 'LIKE', $keyWord)
				->orWhere('apellido', 'LIKE', $keyWord)
				->orWhere('cedula', 'LIKE', $keyWord)
				->orWhere('especialidad', 'LIKE', $keyWord)
				->orWhere('telefono', 'LIKE', $keyWord)
				->orWhere('fecha_nacimiento', 'LIKE', $keyWord)
				->orWhere('email', 'LIKE', $keyWord)
				->orWhere('color', 'LIKE', $keyWord)
				->orWhere('domicilio_fiscal', 'LIKE', $keyWord)
				->orWhere('regimen_fiscal', 'LIKE', $keyWord)
				->orWhere('rfc', 'LIKE', $keyWord)
				->orWhere('razon_social', 'LIKE', $keyWord)
				->orWhere('correo_fiscal', 'LIKE', $keyWord)
				->orWhere('cfdi', 'LIKE', $keyWord)
				->orWhere('poliza', 'LIKE', $keyWord)
                ->orWhere('seguro', 'LIKE', $keyWord)
				->orWhere('empresa', 'LIKE', $keyWord)
				->paginate(10)
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
		$this->cedula = null;
		$this->especialidad = null;
		$this->telefono = null;
		$this->fecha_nacimiento = null;
		$this->email = null;
        $this->color = null;
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

        Especialist::create([
			'nombre' => $this-> nombre,
			'apellido' => $this-> apellido,
			'cedula' => $this-> cedula,
			'especialidad' => $this-> especialidad,
			'telefono' => $this-> telefono,
			'fecha_nacimiento' => $this-> fecha_nacimiento,
			'email' => $this-> email,
            'color' => $this-> color,
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
		$this->emit('closeModal');
		session()->flash('message', 'Especialist Successfully created.');
    }

    public function edit($id)
    {
        $record = Especialist::findOrFail($id);

        $this->selected_id = $id;
		$this->nombre = $record-> nombre;
		$this->apellido = $record-> apellido;
		$this->cedula = $record-> cedula;
		$this->especialidad = $record-> especialidad;
		$this->telefono = $record-> telefono;
		$this->fecha_nacimiento = $record-> fecha_nacimiento;
		$this->email = $record-> email;
        $this->color = null;
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
			$record = Especialist::find($this->selected_id);
            $record->update([
			'nombre' => $this-> nombre,
			'apellido' => $this-> apellido,
			'cedula' => $this-> cedula,
			'especialidad' => $this-> especialidad,
			'telefono' => $this-> telefono,
			'fecha_nacimiento' => $this-> fecha_nacimiento,
			'email' => $this-> email,
            'color' => $this-> color,
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
			session()->flash('message', 'Especialist Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Especialist::where('id', $id);
            $record->delete();
        }
    }
}
