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
        $color->servicio = $request->servicio;
        $color->color = $request->color;
        $color->update();

        Session::flash('edit', 'Se ha editado sus datos con exito');
        return redirect()->back();
    }
}
