<?php

namespace App\Http\Controllers;

use App\Models\Alertas;
use App\Models\Factura;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Especialist;
use App\Models\User;
use App\Models\Antecedente;
use App\Models\Colores;
use App\Models\Status;

use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $clients = Client::all();
       $count_client = count($clients);

       $especialists = Especialist::all();
       $count_especialist = count($especialists);

       $users = User::all();
       $count_users = count($users);

       $antecedentes = Antecedente::all();
       $count_antecedentes = count($antecedentes);

        $client = Client::orderBy('nombre', 'asc')->get();

        $especialist = Especialist::orderBy('nombre', 'asc')->get();

        $colores = Colores::get();

        $estatus = Status::get();

       $facturas = Factura::all();
       $count_facturas = count($facturas);

        $alert_retenedores = Alertas::where('id_color', '=', 6)->get();
        $count_retenedores = count($alert_retenedores);

        $alert_limpieza = Alertas::where('id_color', '=', 2)->get();
        $count_limpieza = count($alert_limpieza);



        $recordatorios = $count_retenedores + $count_limpieza;

        return view('dashboard', compact('count_client','count_especialist','count_facturas','count_users','count_antecedentes','client','especialist', 'colores','estatus', 'recordatorios'));
    }
}
