<?php

namespace App\Http\Controllers;

use App\Models\Alertas;
use App\Models\Colores;
use Illuminate\Http\Request;
use Session;

class ColoresController extends Controller
{
    public function update_colores(Request $request)
    {

        $colores = Colores::get()->count();

        $servicio = $request->servicio;
        $color = $request->color;

        foreach ($request->get('color') as $key => $value){
            $color = Colores::find($request->get('id')[$key]);
            $color -> servicio = $request->get('servicio')[$key];
            $color -> color = $request->get('color')[$key];
            $color->update();
        }



        Session::flash('edit', 'Se ha editado sus datos con exito');
        return redirect()->back();
    }
}
