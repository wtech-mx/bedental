<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

use App\Models\Alertas;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Models\Colores;
use App\Models\Controlpagos;
use Carbon\Carbon;
use DateTime;


class AlertasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index_recordatorios()
    {
        $colores = Colores::get();
        $alert_retenedores = Alertas::where('id_color', '=', 6)->get();
        $alert_limpieza = Alertas::where('id_color', '=', 2)->get();

        return view('recordatorios.view', compact('alert_retenedores','alert_limpieza','colores'));
    }

    public function index_calendar()
    {

        $client = DB::table('clients')->get();
        $especialist = DB::table('especialists')->get();

        $alert = Alertas::get();

        $colores = Colores::get();

        return view('alerts.calendar', compact('client', 'alert','especialist', 'colores'));
    }

    public function store_calendar(Request $request)
    {

        $datosEvento = new Alertas;
        $datosEvento->start = $request->start;
        $datosEvento->end = $request->end;
        $datosEvento->image = $request->image;
        $datosEvento->id_color = $request->id_color;
        $datosEvento->id_client = $request->id_client;
        $datosEvento->title = $datosEvento->Client->nombre;
        $datosEvento->telefono = $datosEvento->Client->telefono;
        $datosEvento->resource_id = $request->resource_id;
        $datosEvento->id_especialist = $request->id_especialist;
        $datosEvento->descripcion = $request->descripcion;
        $datosEvento->check = $request->check;
        $datosEvento->color = $datosEvento->Colores->color;

        if ( $datosEvento->end == $datosEvento->start){
            $now = date($datosEvento->end);
            $new_time = date("Y-m-d H:i", strtotime('+1 hours', strtotime($now))); // $now + 3 hours
            $datosEvento->end = $new_time;
        }

        $datosEvento->save();
    }

    public function show_calendar()
    {
        //Trae datos de db to jason
        $json2 = $data2['alertas'] = Alertas::all();

        //los convieerte en array
        $decode2 = json_decode($json2);

        //Une los array en uno solo
        $resultado = array_merge($decode2);

        //retorna a la vista sn json
        return response()->json($resultado);
    }

    public function update_calendar(Request $request, $id)
    {
        $datosEvento = Alertas::find($id);
        $datosEvento->start = $request->start;
        $datosEvento->end = $request->end;
        $datosEvento->image = $request->image;
        $datosEvento->id_color = $request->id_color;
        $datosEvento->id_client = $request->id_client;
        $datosEvento->title = $datosEvento->Client->nombre;
        $datosEvento->telefono = $datosEvento->Client->telefono;
        $datosEvento->resource_id = $request->resource_id;
        $datosEvento->id_especialist = $request->id_especialist;
        $datosEvento->descripcion = $request->descripcion;
        $datosEvento->check = $request->check;
        $datosEvento->color = $datosEvento->Colores->color;

        $datosEvento->update();

        if ($datosEvento->check == 2){
            $controlpagos = new Controlpagos;
            $controlpagos->fecha = $datosEvento->start;
            $controlpagos->id_clients = $datosEvento->id_client;
            $controlpagos->id_alertas = $id;
            $controlpagos->id_doctor = $datosEvento->id_especialist;
            $controlpagos->save();
        }
    }

    public function destroy_calendar($id)
    {
        Alertas::destroy($id);
        return response()->json($id);
    }
}
