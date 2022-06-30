<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\Client;

use Illuminate\Http\Request;
use Session;

class FacturasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $facturas = Factura::orderBy('id', 'desc')->get();

        $client = Client::orderBy('nombre', 'asc')->get();

        return view('facturas.index', compact('facturas','client'));
    }

    public function store($id, Request $request)
    {
        $facturas = new Factura();

        $image  = $request->file('file_name');
        $image2  = $request->file('file_name2');

        $imageName = time() . '.' . $image->getClientOriginalName();
        $imageName2 = time() . '.' . $image2->getClientOriginalName();

        $image->move(public_path('/img/facturas'), $imageName);
        $image2->move(public_path('/img/facturas'), $imageName2);

        $facturas->id_clients = $id;
        $facturas->file_name = $imageName;
        $facturas->file_name2 = $imageName2;
        $facturas->date = $request->date;
        $facturas->name = $request->name;
        $facturas->estatus = 0;
        $facturas->save();

        Session::flash('success', 'Se ha Creado  con exito');
        return redirect()->back();
    }

    public function upload($id, Request $request)
    {
        $facturas = Factura::findorfail($id);

        $name  = $request->get('name');
        $date  = $request->get('date');

        if ($request->hasFile("file_name")){
            $image = $request->file('file_name');
            $imageName = time() . '.' . $image->getClientOriginalName();
            $image->move(public_path('/img/facturas'), $imageName);
            $facturas->file_name = $imageName;
        }

        if ($request->hasFile("file_name2")){
            $image2 = $request->file('file_name2');
            $imageName2 = time() . '.' . $image2->getClientOriginalName();
            $image2->move(public_path('/img/facturas'), $imageName2);
            $facturas->file_name2 = $imageName2;
        }

        $facturas->name = $name;
        $facturas->date = $date;
        $facturas->estatus = 0;
        $facturas->update ();

        Session::flash('edit', 'Se ha editado  con exito');
        return redirect()->back();
    }

    public function store_factura(Request $request)
    {
        $facturas = new Factura();

        $image  = $request->file('file_name');
        $image2  = $request->file('file_name2');

        $imageName = time() . '.' . $image->getClientOriginalName();
        $imageName2 = time() . '.' . $image2->getClientOriginalName();

        $image->move(public_path('/img/facturas'), $imageName);
        $image2->move(public_path('/img/facturas'), $imageName2);

        $facturas->id_clients = $request->id_client;
        $facturas->file_name = $imageName;
        $facturas->file_name2 = $imageName2;
        $facturas->date = $request->date;
        $facturas->name = $request->name;
        $facturas->estatus = 0;
        $facturas->save();

        Session::flash('success', 'Se ha Creado  con exito');
        return redirect()->back();

    }

}
