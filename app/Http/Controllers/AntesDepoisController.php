<?php

namespace App\Http\Controllers;

use App\Models\AntesDepois;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AntesDepoisController extends Controller
{

    public function index()
    {
        $dds = AntesDepois::get();
        return view('admin.antes-depois.index',compact('dds'));
    }


    public function create()
    {
        return view('admin.antes-depois.create');
    }


    public function store(Request $request)
    {
        $dados      = $request->all();

        $antes      = $request->titulo;
        $nameFile   = Str::of($antes)->slug('-').'.'.$request->antes->getClientOriginalExtension();
        $dados['antes'] = $request->antes->storeAs('antes', $nameFile);

        $depois      = $request->titulo;
        $nameFile   = Str::of($depois)->slug('-').'.'.$request->depois->getClientOriginalExtension();
        $dados['depois'] = $request->depois->storeAs('depois', $nameFile);

        AntesDepois::create($dados);
        return redirect()->back()->with('success','Cadastrado com sucesso');
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
