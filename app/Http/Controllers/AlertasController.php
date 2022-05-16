<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;

use App\Models\Alertas;
use Illuminate\Http\Request;
use DB;
use Session;
use Carbon\Carbon;



class AlertasController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index_calendar()
    {

        $client = DB::table('clients')->get();
        $especialist = DB::table('especialists')->get();

        $alert = Alertas::get();

        return view('alerts.calendar', compact('client', 'alert','especialist'));
    }

    public function store_calendar(Request $request)
    {
        $datosEvento = request()->except(['_token', '_method'], []);

        Alertas::insert($datosEvento);
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
        $datosEvento = request()->except(['_token', '_method']);
        $respuesta = Alertas::where('id', '=', $id)->update($datosEvento);
    }

    public function destroy_calendar($id)
    {
        Alertas::destroy($id);
        return response()->json($id);
    }
}
