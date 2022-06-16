<?php

namespace App\Http\Controllers;
use App\Models\Especialist;

use Illuminate\Http\Request;
use Session;

class EspecialistsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

		$especialists = Especialist::get();

		 return view('especialists.view', compact('especialists'));
    }


    public function store(Request $request)
    {
             $this->validate($request, [
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            ]);

        $doctor = new Especialist();
        $doctor->nombre = $request->nombre;
        $doctor->apellido = $request->apellido;
        $doctor->email = $request->email;
        $doctor->telefono = $request->telefono;
        $doctor->especialidad = $request->especialidad;
        $doctor->cedula = $request->cedula;
        $doctor->fecha_nacimiento = $request->fecha_nacimiento;

        $doctor->save();

        Session::flash('success', 'Se ha guardado sus datos con exito');
        return redirect()->route('especialists.index');
    }


    public function update(Request $request, $id)
    {

        $doctor = Especialist::findOrFail($id);
        $doctor->nombre = $request->nombre;
        $doctor->apellido = $request->apellido;
        $doctor->email = $request->email;
        $doctor->telefono = $request->telefono;
        $doctor->especialidad = $request->especialidad;
        $doctor->cedula = $request->cedula;
        $doctor->fecha_nacimiento = $request->fecha_nacimiento;
        $doctor->update();

        Session::flash('edit', 'Se ha editado sus datos con exito');
        return redirect()->route('especialists.index');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $doctor = Especialist::find($id)->delete();

        Session::flash('delete', 'Se ha eliminado sus datos con exito');
        return redirect()->route('especialists.index')
            ->with('success', 'Client deleted successfully');
    }

}
