<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SlideController extends Controller
{

    public function index()
    {
        $slides = Slide::get();
        return view('admin.slides.index',compact('slides'));
    }


    public function create()
    {
        return view('admin.slides.create');
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $slide = $request->titulo;
        $dados = $request->all();
        $nameFile = Str::of($slide)->slug('-').'.'.$request->image->getClientOriginalExtension();
        $dados['image'] = $request->image->storeAs('slides', $nameFile);

        Slide::create($dados);
        return redirect()
            ->route('slide.create')
            ->with('message','Slide cadastrado com sucesso');


    }


    public function show($id)
    {
        $slide = Slide::find($id);
        return view('admin.slides.show',['slide' => $slide]);
    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
