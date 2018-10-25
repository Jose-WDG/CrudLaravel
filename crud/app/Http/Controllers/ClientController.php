<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = \App\client::get();
        return view('clientes.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $novo_cliente = new client;
        $novo_cliente->name = $request->input('name');
        $novo_cliente->email = $request->input('email');
        $novo_cliente->age = $request->input('age');

        $novo_cliente->save();
        return redirect()->route('clients.index').'<script>alert("criado com sucesso")</script>';


      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = \App\client::find($id);
        return view('clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = \App\client::find($id);
        return view('clientes.editar',compact('cliente'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   

        $update_cliente = client::find($id);
        $update_cliente->name = $request->input('name');
        $update_cliente->email = $request->input('email');
        $update_cliente->age = $request->input('age');

        $update_cliente->save();
        return redirect()->route('clients.index').'<script>alert("Editado com sucesso!")</script>';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $delete_cliente = client::find($id);
        $delete_cliente->delete();
        return redirect()->route('clients.index');
    }
}
