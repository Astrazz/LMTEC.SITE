<?php

namespace App\Http\Controllers;

use App\Models\Analytic;
use App\Models\Lead;
use App\Models\Servico;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        $servicos   = Servico::get();
        $leads      = Lead::get();
        return view('admin.home',compact('servicos','leads'));
    }

    public function LeadUpdate(Request $request,$id)
    {
        $exe = Lead::find($id);
        if($request->status == 'Excluir'){
            $exe->delete();
            return redirect()->back()->with('success','Excluído com sucesso');
        }
        $exe->update($request->all());
        return redirect()->back()->with('success','Atualizado com sucesso');
        dd($request->all(),$exe);
    }

    public function LeadsConvertidos()
    {
        $leads      = Lead::get();
        return view('admin.leads.convertidos',compact('leads'));
    }
}
