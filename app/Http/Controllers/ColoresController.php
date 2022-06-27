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
        foreach ($request->get('color') as $key => $value){
            $color = Colores::find($request->get('id')[$key]);
            $color -> servicio = $request->get('servicio')[$key];
            $color -> color = $request->get('color')[$key];
            $color->update();
        }

           $alertas = Alertas::get()->pluck('id_color');
           $colores = Colores::get()->pluck('id');

           $comps = Alertas::join('colores','alertas.id_color','=','colores.id')
               ->select('colores.color')->get();

           $comps2 = Alertas::select('id')->get();

           foreach ($comps2 as $comp2){

                $comps = Alertas::join('colores','alertas.id_color','=','colores.id')
               ->select('colores.color')->get();

                foreach ($comps as $comp){
                    $alertas = Alertas::find($comp2->id);
                    $alertas->color = $comp->color;
                    $alertas->update();
                }
            }
           

        Session::flash('edit', 'Se ha editado sus datos con exito');
        return redirect()->back();
    }
}
