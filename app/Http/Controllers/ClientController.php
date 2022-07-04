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

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clients = Client::get();
        $facturas = Factura::get();

        return view('clients.view', compact('clients','facturas'));
    }

    public function store_client(Request $request)
    {

            $this->validate($request, [
                'nombre' => 'required',
                'telefono' => 'required',
            ]);

            $client = new Client();
            $client->nombre = $request->nombre;
            $client->apellido = $request-> apellido;
            $client->edad = $request-> edad;
            $client->telefono = $request-> telefono;
            $client->telefono2 = $request-> telefono2;
            $client->fecha_nacimiento = $request-> fecha_nacimiento;
            $client->motivo_consulta = $request-> motivo_consulta;
            $client->email = $request-> email;
            $client->email2 = $request-> email2;
            $client->domicilio_fiscal = $request-> domicilio_fiscal;
            $client->regimen_fiscal = $request-> regimen_fiscal;
            $client->fiscal = $request-> fiscal;
            $client->rfc = $request-> rfc;
            $client->razon_social = $request-> razon_social;
            $client->correo_fiscal = $request-> correo_fiscal;
            $client->cfdi = $request-> cfdi;
            $client->seguro = $request-> seguro;
            $client->poliza = $request-> poliza;
            $client->tipo_plan = $request-> tipo_plan;
            $client->certificado = $request-> certificado;
            $client->empresa = $request-> empresa;
           $client->save();

           Antecedente::create([
                'id_client' => $client->id,
            ]);

        Session::flash('success', 'Se ha guardado sus datos con exito');
        return redirect()->back()->with('success','Role created successfully');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
        ]);

        $client = new Client();
        $client->nombre = $request->nombre;
        $client->apellido = $request-> apellido;
        $client->edad = $request-> edad;
        $client->sanguineo = $request-> sanguineo;
        $client->ocupacion = $request-> ocupacion;
        $client->telefono = $request-> telefono;
        $client->telefono2 = $request-> telefono2;
        $client->fecha_nacimiento = $request-> fecha_nacimiento;
        $client->motivo_consulta = $request-> motivo_consulta;
        $client->email = $request-> email;
        $client->email2 = $request-> email2;
        $client->domicilio_fiscal = $request-> domicilio_fiscal;
        $client->regimen_fiscal = $request-> regimen_fiscal;
        $client->fiscal = $request-> fiscal;
        $client->rfc = $request-> rfc;
        $client->razon_social = $request-> razon_social;
        $client->correo_fiscal = $request-> correo_fiscal;
        $client->cfdi = $request-> cfdi;
        $client->seguro = $request-> seguro;
        $client->poliza = $request-> poliza;
        $client->tipo_plan = $request-> tipo_plan;
        $client->certificado = $request-> certificado;
        $client->empresa = $request-> empresa;

        if ($request->hasFile("pdf_fiscal")){
            $file = $request->file('pdf_fiscal');
            $path = public_path() . '/pdf_fiscal';
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move($path, $fileName);
            $client->pdf_fiscal = $fileName;
        }
        $client->save();

        $antecedente = new Antecedente();
        $antecedente->id_client = $client->id;
        $antecedente->save();

        Session::flash('success', 'Se ha guardado sus datos con exito');
        return redirect()->route('clients.index');
    }

    public function update(Request $request, $id)
    {

        $client = Client::findOrFail($id);
        $client->nombre = $request->nombre;
        $client->apellido = $request-> apellido;
        $client->edad = $request-> edad;
        $client->sanguineo = $request-> sanguineo;
        $client->ocupacion = $request-> ocupacion;
        $client->telefono = $request-> telefono;
        $client->telefono2 = $request-> telefono2;
        $client->fecha_nacimiento = $request-> fecha_nacimiento;
        $client->motivo_consulta = $request-> motivo_consulta;
        $client->email = $request-> email;
        $client->email2 = $request-> email2;
        $client->domicilio_fiscal = $request-> domicilio_fiscal;
        $client->regimen_fiscal = $request-> regimen_fiscal;
        $client->fiscal = $request-> fiscal;
        $client->rfc = $request-> rfc;
        $client->razon_social = $request-> razon_social;
        $client->correo_fiscal = $request-> correo_fiscal;
        $client->cfdi = $request-> cfdi;
        $client->seguro = $request-> seguro;
        $client->poliza = $request-> poliza;
        $client->tipo_plan = $request-> tipo_plan;
        $client->certificado = $request-> certificado;
        $client->empresa = $request-> empresa;

        if ($request->hasFile("pdf_fiscal")){
            $file = $request->file('pdf_fiscal');
            $path = public_path() . '/pdf_fiscal';
            $fileName = uniqid() . $file->getClientOriginalName();
            $file->move($path, $fileName);
            $client->pdf_fiscal = $fileName;
        }
        $client->update();

        Session::flash('edit', 'Se ha editado sus datos con exito');
        return redirect()->route('clients.index');
    }

    public function upload(Request $request, $id){
         $client = Client::findOrFail($id);

         $client->email = $request-> email;
         $client->email2 = $request-> email2;
         $client->correo_fiscal = $request-> correo_fiscal;

         $client->update();

        Session::flash('edit', 'Se ha editado sus datos con exito');
        return redirect()->route('facturas.index');

    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $antecedente = Antecedente::where('id_client','=',$id)->delete();
        $client = Client::find($id)->delete();

        Session::flash('delete', 'Se ha eliminado sus datos con exito');
        return redirect()->route('clients.index')
            ->with('success', 'Client deleted successfully');
    }
}
