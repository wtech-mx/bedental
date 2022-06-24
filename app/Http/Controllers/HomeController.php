<?php

namespace App\Http\Controllers;

use App\Models\Alertas;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Especialist;
use App\Models\User;
use App\Models\Antecedente;
use App\Models\Colores;
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

        $colores = Colores::find(1);

        $alert_retenedores = Alertas::where('color', '=', $colores->retenedores)->get();
        $count_retenedores = count($alert_retenedores);

        $alert_limpieza = Alertas::where('color', '=', $colores->limpieza)->get();
        $count_limpieza = count($alert_limpieza);

        $recordatorios = $count_retenedores + $count_limpieza;

        return view('dashboard', compact('count_client','count_especialist','count_users','count_antecedentes','client','especialist', 'colores', 'recordatorios'));
    }
}
