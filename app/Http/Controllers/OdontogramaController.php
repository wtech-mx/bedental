<?php

namespace App\Http\Controllers;

use App\Models\Hunts;
use App\Models\Client;
use App\Models\Dientes;
use App\Models\Especialist;
use App\Models\Odontograma;
use App\Models\PlanTratamiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class OdontogramaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $odontograma = Odontograma::get();
        $client = Client::get();

        return view('odontograma.index', compact('odontograma', 'client', 'especialist'));
    }

    public function create()
    {
        $odontograma = Odontograma::get();
        $client = Client::get();
        $especialist= Especialist::get();
        $especialist= Especialist::get();
        $hunts_permanentes = Hunts::where('permanentes','=',0)->get();
        $hunts_child = Hunts::where('permanentes','=',1)->get();

        return view('odontograma.create', compact('odontograma', 'client', 'especialist','hunts_permanentes','hunts_child'));
    }

    public function store(Request $request)
    {
        $odontograma = new Odontograma();
        $odontograma->id_clients = $request->get('id_clients');
        $odontograma->id_doctor = $request->get('id_doctor');
        $odontograma->fecha = $request->get('fecha');
        $odontograma->observaciones = $request->get('observaciones');
        $odontograma->estatus = 0;
        $odontograma->save();

        if($request->get('lado1_1') || $request->get('lado2_1') || $request->get('lado3_1') || $request->get('lado4_1') || $request->get('lado5_1')){
            $dintes = new Dientes();
            $dintes->id_odontograma = $odontograma->id;
            $dintes->diente = 1;
            $dintes->lado1 = $request->get('lado1_1');
            $dintes->lado2 = $request->get('lado2_1');
            $dintes->lado3 = $request->get('lado3_1');
            $dintes->lado4 = $request->get('lado4_1');
            $dintes->lado5 = $request->get('lado5_1');
            $dintes->save();
        }

        if($request->get('lado1_2') || $request->get('lado2_2') || $request->get('lado3_2') || $request->get('lado4_2') || $request->get('lado5_2')){
            $dintes = new Dientes();
            $dintes->id_odontograma = $odontograma->id;
            $dintes->diente = 2;
            $dintes->lado1 = $request->get('lado1_2');
            $dintes->lado2 = $request->get('lado2_2');
            $dintes->lado3 = $request->get('lado3_2');
            $dintes->lado4 = $request->get('lado4_2');
            $dintes->lado5 = $request->get('lado5_2');
            $dintes->save();
        }

        $od = $request->od;
        $diagnostico = $request->diagnostico;
        $tratamiento = $request->tratamiento;
        $costo = $request->costo;
        $estatus = $request->estatus;

        for ($count = 0; $count < count($od); $count++) {
            $data = array(
                'id_odontograma' => $odontograma->id,
                'od' => $od[$count],
                'diagnostico' => $diagnostico[$count],
                'tratamiento' => $tratamiento[$count],
                'costo' => $costo[$count],
                'estatus' => $estatus[$count],
            );
            $insert_data[] = $data;
        }

        PlanTratamiento::insert($insert_data);

        Session::flash('success', 'Se ha Creado  con exito');
        return redirect()->route('odontograma.index');
    }
}
