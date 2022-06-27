<?php

namespace App\Http\Controllers;

use App\Models\Alertas;
use App\Models\Colores;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Arr;


class ColoresController extends Controller
{
    public function update_colores(Request $request,$id)
    {

        $color = Colores::find($id);
        $color -> servicio = $request->get('servicio');
        $color -> color = $request->get('color');
        $color->update();


//           $comps2 = Alertas::get()->toArray();
//
//            $arr = array();
//            foreach ($comps2 as $s) {
//                array_push($arr,$s->id);
//            }
//             dd($arr);
//
//
//
//
//
//           $alertas = Alertas::find($comp->id);
//           $alertas->color = $request->get('color');
//




//           $alertas = Alertas::get()->pluck('id_color');
//           $colores = Colores::get()->pluck('id');
//
//           $comps = Alertas::join('colores','alertas.id_color','=','colores.id')
//               ->select('colores.color')->get();
//
//           $comps2 = Alertas::select('id')->get();
//
//           foreach ($comps2 as $comp2){
//
//                $comps = Alertas::join('colores','alertas.id_color','=','colores.id')
//               ->select('colores.color')->get();
//
//                    $alertas = Alertas::find($comp2->id);
//                foreach ($comps as $comp){
//
//                    $alertas->color = $comp->color;
//                    $alertas->update();
//                }
//
//            }


        Session::flash('edit', 'Se ha editado sus datos con exito');
        return redirect()->back();
    }
}
