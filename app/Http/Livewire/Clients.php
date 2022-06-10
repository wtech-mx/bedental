<?php

namespace App\Http\Livewire;

use App\Models\Antecedente;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Client;
use App\Models\Factura;
use Livewire\WithFileUploads;


class Clients extends Component
{
    use WithPagination;
    use WithFileUploads;
	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $apellido, $edad, $sanguineo, $ocupacion, $telefono, $fecha_nacimiento, $motivo_consulta,$email, $domicilio_fiscal, $regimen_fiscal, $fiscal, $rfc, $razon_social, $correo_fiscal, $cfdi, $seguro, $poliza, $empresa,$certificado, $tipo_plan, $pdf_fiscal;
    public $updateMode = false;
    public $facturas;

    public function mount(){
        $this->facturas = Factura::all();
    }

    public function render()
    {

		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.clients.view', [
            'clients' => Client::orderBy('apellido', 'asc')->get(),
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
		$this->motivo_consulta = null;
		$this->email = null;
		$this->domicilio_fiscal = null;
		$this->regimen_fiscal = null;
        $this->fiscal = null;
		$this->rfc = null;
		$this->razon_social = null;
		$this->correo_fiscal = null;
		$this->cfdi = null;
		$this->seguro = null;
		$this->poliza = null;
		$this->empresa = null;
		$this->tipo_plan = null;
		$this->certificado = null;
        $this->pdf_fiscal = null;
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
			'motivo_consulta' => $this-> motivo_consulta,
			'email' => $this-> email,
			'domicilio_fiscal' => $this-> domicilio_fiscal,
			'regimen_fiscal' => $this-> regimen_fiscal,
            'fiscal' => $this-> fiscal,
			'rfc' => $this-> rfc,
			'razon_social' => $this-> razon_social,
			'correo_fiscal' => $this-> correo_fiscal,
			'cfdi' => $this-> cfdi,
			'seguro' => $this-> seguro,
			'poliza' => $this-> poliza,
			'tipo_plan' => $this-> tipo_plan,
			'certificado' => $this-> certificado,
			'empresa' => $this-> empresa
        ]);

//        $antecedente = new Antecedente;
//        $antecedente->id_client = $cliente->id;
//        $antecedente->save();

        $this->resetInput();
		$this->emit('closeModal');

		session()->flash('message', 'Client Successfully created.');

        $cliente = Client::orderBy('id', 'DESC')->first();

        Antecedente::create([
             'id_client' => $cliente->id,
         ]);
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
		$this->motivo_consulta = $record-> motivo_consulta;
		$this->email = $record-> email;
		$this->domicilio_fiscal = $record-> domicilio_fiscal;
		$this->regimen_fiscal = $record-> regimen_fiscal;
        $this->fiscal = $record-> fiscal;
		$this->rfc = $record-> rfc;
		$this->razon_social = $record-> razon_social;
		$this->correo_fiscal = $record-> correo_fiscal;
		$this->cfdi = $record-> cfdi;
		$this->seguro = $record-> seguro;
		$this->poliza = $record-> poliza;
		$this->empresa = $record-> empresa;
		$this->tipo_plan = $record-> tipo_plan;
		$this->certificado = $record-> certificado;
        $this->pdf_fiscal = $record-> pdf_fiscal;
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
			'motivo_consulta' => $this-> motivo_consulta,
			'email' => $this-> email,
			'domicilio_fiscal' => $this-> domicilio_fiscal,
			'regimen_fiscal' => $this-> regimen_fiscal,
            'fiscal' => $this-> fiscal,
			'rfc' => $this-> rfc,
			'razon_social' => $this-> razon_social,
			'correo_fiscal' => $this-> correo_fiscal,
			'cfdi' => $this-> cfdi,
			'seguro' => $this-> seguro,
			'poliza' => $this-> poliza,
			'tipo_plan' => $this-> tipo_plan,
			'certificado' => $this-> certificado,
            'pdf_fiscal' => $this-> pdf_fiscal,
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
            $antecedentes = Antecedente::where('id_client','=',$id);
            $antecedentes->delete();
            $record->delete();


        }
    }
}
