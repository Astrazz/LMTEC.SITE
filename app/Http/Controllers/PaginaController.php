<?php

namespace App\Http\Controllers;

use App\Models\Pagina;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PaginaController extends Controller
{
    public function index()
    {
        $paginas = Pagina::get();
        return view('admin.paginas.index', compact('paginas'));
    }


    public function create()
    {
        return view('admin.paginas.create');
    }


    public function store(Request $request)
    {
        $pagina             = Pagina::where('menu', $request->menu)->first();
        $dados              = $request->all();
        if ($pagina) {
            $nameFile           = Str::of($request->titulo)->slug('-') . rand() . '.' . $request->image->getClientOriginalExtension();
            $dados['image']     = $request->image->storeAs('paginas', $nameFile);
            $dados['url']       = Str::of($request->titulo)->slug('-');
            $pagina->update($dados);
        } else {
            $nameFile           = Str::of($request->titulo)->slug('-') . rand() . '.' . $request->image->getClientOriginalExtension();
            $dados['image']     = $request->image->storeAs('paginas', $nameFile);
            $dados['url']       = Str::of($request->titulo)->slug('-');
            Pagina::create($dados);
        }

        return redirect()->back()->with('success', 'Página Criada');
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


    public function edit($id)
    {
        $pagina = Pagina::find($id);
        return view('admin.paginas.edit', ['pagina' => $pagina]);
    }


    public function update(Request $request, $id)
    {
        $pagina             = Pagina::find($id);

        $dados              = $request->all();
        if($request->image){
            $nameFile           = Str::of($request->titulo)->slug('-') . rand() . '.' . $request->image->getClientOriginalExtension();
            $dados['image']     = $request->image->storeAs('paginas', $nameFile);
        }
        $dados['url']       = Str::of($request->titulo)->slug('-');
        $pagina->update($dados);

        return redirect()->back()->with('success', 'Página atualizada');
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
