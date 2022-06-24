<?php

namespace App\Http\Controllers;

use App\Models\Colores;
use Illuminate\Http\Request;
use Session;

class ColoresController extends Controller
{
    public function update_colores(Request $request, $id)
    {

        $color = Colores::find($id);
        $color->limpieza = $request->limpieza;
        $color->operatoria = $request->operatoria;
        $color->ortodoncia = $request->ortodoncia;
        $color->cirugia_extraccion = $request->cirugia_extraccion;
        $color->retenedores = $request->retenedores;
        $color->update();

        Session::flash('edit', 'Se ha editado sus datos con exito');
        return redirect()->back();
    }
}
