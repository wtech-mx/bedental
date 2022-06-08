<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;
use Session;

class FacturasController extends Controller
{
    public function store($id, Request $request)
    {
        $facturas = new Factura();

        $image  = $request->file('file_name');
        $imageName = time() . '.' . $image->getClientOriginalName();
        $image->move(public_path('/img/facturas'), $imageName);

        $image2  = $request->file('file_name2');
        $imageName2 = time() . '.' . $image2->getClientOriginalName();
        $image2->move(public_path('/img/facturas'), $imageName2);

        $facturas->id_clients = $id;
        $facturas->file_name = $imageName;
        $facturas->file_name2 = $imageName2;
        $facturas->date = $request->date;
        $facturas->name = $request->name;
        $facturas->save();

        Session::flash('success', 'Se ha Creado  con exito');
        return redirect()->back();
    }
}
