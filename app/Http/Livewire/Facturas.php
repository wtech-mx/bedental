<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Factura;

class Facturas extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_cliente, $name, $date, $file_name;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.facturas.view', [
            'facturas' => Factura::latest()
						->orWhere('id_cliente', 'LIKE', $keyWord)
						->orWhere('name', 'LIKE', $keyWord)
						->orWhere('date', 'LIKE', $keyWord)
						->orWhere('file_name', 'LIKE', $keyWord)
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
		$this->id_cliente = null;
		$this->name = null;
		$this->date = null;
		$this->file_name = null;
    }

    public function store()
    {
        $this->validate([
		'id_cliente' => 'required',
		'file_name' => 'required',
        ]);

        Factura::create([ 
			'id_cliente' => $this-> id_cliente,
			'name' => $this-> name,
			'date' => $this-> date,
			'file_name' => $this-> file_name
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Factura Successfully created.');
    }

    public function edit($id)
    {
        $record = Factura::findOrFail($id);

        $this->selected_id = $id; 
		$this->id_cliente = $record-> id_cliente;
		$this->name = $record-> name;
		$this->date = $record-> date;
		$this->file_name = $record-> file_name;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'id_cliente' => 'required',
		'file_name' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Factura::find($this->selected_id);
            $record->update([ 
			'id_cliente' => $this-> id_cliente,
			'name' => $this-> name,
			'date' => $this-> date,
			'file_name' => $this-> file_name
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Factura Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Factura::where('id', $id);
            $record->delete();
        }
    }
}
