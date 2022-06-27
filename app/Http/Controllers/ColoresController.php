<?php

namespace App\Http\Controllers;

use App\Models\Alertas;
use App\Models\Colores;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Arr;
class ColoresController extends Controller
{
    public function create(Request $request)
    {
        $color = new Colores;
        $color -> servicio = $request->get('servicio');
        $color -> color = $request->get('color');
        $color->save();

        Session::flash('create', 'Se ha creado sus datos con exito');
        return redirect()->back();
    }

    public function update_colores(Request $request,$id)
    {

        $color = Colores::find($id);
        $color -> servicio = $request->get('servicio');
        $color -> color = $request->get('color');
        $color->update();

        $alerta = Alertas::where('id_color',$id)->get()->count();
        for($i=1; $i<=$alerta; $i++){
            $alert = Alertas::where('id_color', $id)
                             ->where('color', '!=', $color -> color)
                             ->first();
            $alert->color =$request->get('color');
            $alert->update();
        }

        Session::flash('edit', 'Se ha editado sus datos con exito');
        return redirect()->back();
    }
}
