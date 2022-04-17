<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
         $this->middleware('permission:product-create', ['only' => ['create','store']]);
         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::latest()->paginate(5);
        return view('clients.index',compact('clients'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        Client::create($request->all());

        return redirect()->route('clients.index')
                        ->with('success','Client created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Client $product)
    {
        return view('clients.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $product)
    {
        return view('clients.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $product)
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('clients.index')
                        ->with('success','Client updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $product)
    {
        $product->delete();

        return redirect()->route('clients.index')
                        ->with('success','Client deleted successfully');
    }
}
