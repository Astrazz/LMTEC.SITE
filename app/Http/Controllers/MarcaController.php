<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $marcas = Marca::get();
       return view('admin.marcas.index', compact('marcas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.marcas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $marca = $request->nome;
        $dados = $request->all();
        $nameFile = Str::of($marca)->slug('-').'.'.$request->image->getClientOriginalExtension();
        $dados['marca'] = $request->image->storeAs('marcas', $nameFile);

        Marca::create($dados);
        return redirect()
            ->route('marca.create')
            ->with('message','Marca cadastrada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $marca = Marca::find($id);
        return view('admin.marcas.show',['marca' => $marca]);
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

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $marcas = Marca::find($id);
        $marca = $request->nome;
        $dados = $request->all();
        $nameFile = Str::of($marca)->slug('-').'.'.$request->image->getClientOriginalExtension();
        $dados['marca'] = $request->image->storeAs('marcas', $nameFile);

        $marcas->update($dados);
        return  redirect()->back()->with('message', 'Categoria atualizada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$marca = Marca::find($id))
            return redirect()->route('marca.index');

        $marca->delete();
        return redirect()
            ->route('marca.index')
            ->with('message', 'Marca removida com sucesso!!!');

    }
}
