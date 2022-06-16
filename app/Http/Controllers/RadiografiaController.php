<?php

namespace App\Http\Controllers;

use App\Models\Radiografico;
use Illuminate\Http\Request;
use Session;

class RadiografiaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function upload($id, Request $request)
    {

        $image  = $request->file('file_name');

        $imageName = time().'.'.$image->getClientOriginalName();

        $image->move(public_path('/img/radiografias'),$imageName);

        $projectImage = new Radiografico();
        $projectImage->id_antecedente = $id;
        $projectImage->file_name = $imageName;
        $projectImage->date = $request->date;
        $projectImage->name = $request->name;

        $projectImage->save();

        Session::flash('success', 'Se ha Creado  con exito');
        return redirect()->back();
    }
}
