<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Especialist;

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

        return view('dashboard', compact('count_client','count_especialist'));
    }
}
