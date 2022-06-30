<?php

namespace App\Http\Controllers;

use App\Models\Alertas;
use App\Models\Client;
use App\Models\Especialist;
use App\Models\Controlpagos;
use Illuminate\Http\Request;

class ControlpagosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alertas = Alertas::orderBy('id', 'desc')->get();
        $client = Client::orderBy('nombre', 'asc')->get();
        $controlpagos = Controlpagos::orderBy('fecha', 'asc')->get();

        return view('controlpagos.index', compact('alertas','client','controlpagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Controlpagos  $controlpagos
     * @return \Illuminate\Http\Response
     */
    public function show(Controlpagos $controlpagos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Controlpagos  $controlpagos
     * @return \Illuminate\Http\Response
     */
    public function edit(Controlpagos $controlpagos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Controlpagos  $controlpagos
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $facturas = Factura::findorfail($id);

        $name  = $request->get('name');
        $date  = $request->get('date');

        $facturas->name = $name;
        $facturas->date = $date;
        $facturas->estatus = 0;
        $facturas->update ();

        Session::flash('edit', 'Se ha editado  con exito');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Controlpagos  $controlpagos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Controlpagos $controlpagos)
    {
        //
    }
}
