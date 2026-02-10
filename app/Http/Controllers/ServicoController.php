<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use App\Models\Servico;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class ServicoController extends Controller
{

    public function index()
    {
        $servicos = Servico::orderby('id','ASC')->get();
        return view('admin.servicos.index',compact('servicos'));
    }


    public function create()
    {
        return view('admin.servicos.create');
    }

    public function store(Request $request)
    {

        $dados = $request->all();
        $image  = $request->titulo;
        $nameFile = Str::of($image)->slug('-').'.'.$request->image->getClientOriginalExtension();
        $dados['image'] = $request->image->storeAs('servicos', $nameFile);
        $dados['url'] = Str::slug($request->titulo);
        $dados['categoria_url'] = Str::slug($request->categoria);
        if(!empty($request->slide)){
            $slide      = $request->titulo;
            $nameFile       = Str::of($slide)->slug('-').'.'.$request->slide->getClientOriginalExtension();
            $dados['slide'] = $request->slide->storeAs('slides', $nameFile);
        }
        $dados['destaque'] = !empty($request->slides) ? '1' : '0';

        Servico::create($dados);
        return redirect()->back()->with('success','Cadastrado com sucesso');
    }


    public function show($id)
    {
        $servico = Servico::find($id);
        $galeria = Galeria::where('servico_id',$id)->get();
        return view('admin.servicos.show',compact('galeria'),['servico'=>$servico]);
    }

    public function update(Request $request, $id)
    {
        $dados      = $request->all();
        $servico    = Servico::find($id);
        if(!empty($request->image)){
            $image      = $request->titulo;
            $nameFile       = Str::of($image)->slug('-').'.'.$request->image->getClientOriginalExtension();
            $dados['image'] = $request->image->storeAs('servicos', $nameFile);
        }
        if(!empty($request->slide)){
            $slide      = $request->titulo;
            $nameFile       = Str::of($slide)->slug('-').'.'.$request->slide->getClientOriginalExtension();
            $dados['slide'] = $request->slide->storeAs('slides', $nameFile);

        }
        $dados['url']   = Str::slug($request->titulo);
        $dados['categoria_url'] = Str::slug($request->categoria);
        $dados['destaque'] = !empty($request->slides) ? '1' : '0';
        $servico->update($dados);

        $dds['servico_id'] = $id;
        if (!empty($request->galeria)) {
            foreach ($request->galeria as $foto) {
                $imagem                 = Image::make($foto)->resize(600, null, function ($constraint) {$constraint->aspectRatio();});
                $FotoUrl                = $foto->hashName("galeria");
                Storage::disk('local')->put($FotoUrl, $imagem->encode());
                $dds['image']          = $FotoUrl;
                Galeria::create($dds);
            }
        }

        return redirect()->back()->with('success','Atualizado com sucesso');
    }

    public function FotoFestroy($id)
    {
        $galeria    = Galeria::find($id);
        $galeria->delete();
        return redirect()->back()->with('success', 'Deletada com sucesso');
    }

}
