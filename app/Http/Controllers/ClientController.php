<?php

namespace App\Http\Controllers;

use App\Models\Antecedente;
use App\Models\Client;
use App\Models\Factura;
use Illuminate\Http\Request;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Session;

/**
 * Class ClientController
 * @package App\Http\Controllers
 */
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::paginate();

        return view('client.index', compact('clients', 'facturas'))
            ->with('i', (request()->input('page', 1) - 1) * $clients->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = new Client();
        return view('client.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Client::$rules);

        $client = Client::create($request->all());

        Session::flash('success', 'Se ha guardado sus datos con exito');
        return redirect()->route('clients.index')
            ->with('success', 'Client created successfully.');
    }

    public function store_client(Request $request)
    {

        $this->validate($request, [
            'nombre' => 'required',
            'telefono' => 'required',
        ]);

           $client = new Client();
           $client->nombre = $request->nombre;
           $client->apellido = $request->apellido;
           $client->email = $request->email;
           $client->telefono = $request->telefono;
           $client->save();

           Antecedente::create([
                'id_client' => $client->id,
            ]);

        Session::flash('success', 'Se ha guardado sus datos con exito');
        return redirect()->back()->with('success','Role created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);

        return view('client.show', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = Client::find($id);

        return view('client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Client $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        request()->validate(Client::$rules);

        $client->update($request->all());

        Session::flash('edit', 'Se ha editado sus datos con exito');
        return redirect()->route('clients.index')
            ->with('success', 'Client updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $client = Client::find($id)->delete();

        Session::flash('delete', 'Se ha eliminado sus datos con exito');
        return redirect()->route('clients.index')
            ->with('success', 'Client deleted successfully');
    }
}
