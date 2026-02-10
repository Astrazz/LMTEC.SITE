<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ClienteController extends Controller
{

    public function index()
    {
        $clientes = Cliente::get();
       return view('admin.clientes.index',compact('clientes'));
    }


    public function create()
    {
       return view('admin.clientes.create');
    }


    public function store(Request $request)
    {
        $slide = $request->nome;
        $dados = $request->all();
        $nameFile = Str::of($slide)->slug('-').'.'.$request->image->getClientOriginalExtension();
        $dados['image'] = $request->image->storeAs('clientes', $nameFile);
        // dd($dados);
        Cliente::create($dados);
        return redirect()
            ->route('clientes.create')
            ->with('message','Cliente cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
