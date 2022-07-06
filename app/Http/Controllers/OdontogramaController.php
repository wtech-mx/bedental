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
        $especialist= Especialist::get();

        return view('odontograma.index', compact('odontograma', 'client', 'especialist'));
    }

    public function create()
    {
        $odontograma = Odontograma::get();
        $client = Client::get();
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

        $hunts_child = Hunts::where('permanentes','=',1)->get();
        foreach($hunts_child as $item){
            $lado1 = $request->get('lado1_'.$item->od);
            if($lado1 == null){
                $lado1 = '0';
            }
            $lado2 = $request->get('lado2_'.$item->od);
            if($lado2 == null){
                $lado2 = '0';
            }
            $lado3 = $request->get('lado3_'.$item->od);
            if($lado3 == null){
                $lado3 = '0';
            }
            $lado4 = $request->get('lado4_'.$item->od);
            if($lado4 == null){
                $lado4 = '0';
            }
            $lado5 = $request->get('lado5_'.$item->od);
            if($lado5 == null){
                $lado5 = '0';
            }
            for ($count = 0; $count < 1; $count++) {
                if($request->get('lado1_'.$item->od) || $request->get('lado2_'.$item->od) || $request->get('lado3_'.$item->od) || $request->get('lado4_'.$item->od) || $request->get('lado5_'.$item->od)){

                    $data2 = array(
                        'id_odontograma' => $odontograma->id,
                        'diente' => $item->od,
                        'lado1' => $lado1[$count],
                        'lado2' => $lado2[$count],
                        'lado3' => $lado3[$count],
                        'lado4' => $lado4[$count],
                        'lado5' => $lado5[$count],
                    );
                    $insert_data2[] = $data2;

                }
            }
        }
        dientes::insert($insert_data2);


        $diagnostico = $request->diagnostico;
        $tratamiento = $request->tratamiento;
        $costo = $request->costo;
        $estatus = $request->estatus;
        $od = $request->od;

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

    public function edit($id)
    {
        $odontograma = Odontograma::Find($id);
        $plan_tratamiento = PlanTratamiento::where('id_odontograma','=', $odontograma->id)->get();
        $dientes = Dientes::where('id_odontograma','=', $odontograma->id)->get();
        $client = Client::get();
        $especialist= Especialist::get();
        $hunts_permanentes = Hunts::where('permanentes','=',0)->get();
        $hunts_child = Hunts::where('permanentes','=',1)->get();

        return view('odontograma.edit', compact('odontograma', 'client', 'especialist','hunts_permanentes','hunts_child', 'plan_tratamiento', 'dientes'));
    }

    public function update(Request $request, $id)
    {
        
    }

}
