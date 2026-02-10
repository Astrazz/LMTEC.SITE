<?php

namespace App\Http\Controllers;

use App\Models\Analytic;
use App\Models\AntesDepois;
use App\Models\Lead;
use App\Models\Marca;
use App\Models\Servico;
use Illuminate\Http\Request;
use Mail;

class SiteController extends Controller
{
    public function home()
    {
        $clientes = Marca::inRandomOrder()->get();
        return view('site.home',compact('clientes'));
    }

    public function clientes()
    {
        $clientes = Marca::inRandomOrder()->get();
        return view('site.clientes',compact('clientes'));
    }

    public function produtos()
    {
        return view('site.produtos');
    }

    public function servico($url)
    {
        $servico = Servico::where('url', $url)->first();

        $exe = Servico::find($servico->id);
        $exe->update(['visitas' => $exe->visita+1]);
        Analytic::create(['servico_id'=>$servico->id]);

        return view('site.servico', ['servico'=>$servico]);
    }

    public function aboutus()
    {
        return view('site.quem-somos');
    }

    public function cases()
    {
        $dds = AntesDepois::get();
        return view('site.cases', compact('dds'));
    }

    public function contato()
    {
        return view('site.contato');
    }

    public function AgendaStore(Request $request)
    {

        $exe = Lead::where('email', $request->email)->first();
        if (!empty($exe)) {
            $dados = $request->all();
            $dados['status'] = 'Pendente';
            $dados['servico'] = $request->assunto;
            Lead::create($dados);

            Mail::send('envia-email-de-contato', [
                'nome' => $request->nome,
                'email' => $request->email,
                'telefone' => $request->telefone,
                'assunto' => $request->assunto,
                'msg' => $request->msg,
            ], function ($mail) use ($request) {
                $mail->from($request->email, $request->nome);
                $mail->to(env('EMAIL'))->subject('Nova solicitação de Agendamento');
            });

            Mail::send('email-leads', [
                'nome' => $request->nome,
                'email' => $request->email,
                'telefone' => $request->telefone,
                'assunto' => $request->assunto,
                'msg' => $request->msg,
            ], function ($mail) use ($request) {
                $mail->from(env('EMAIL'), env('APP_NAME'));
                $mail->to($request->email)->subject(env('APP_NAME'));
            });
            dd($request->all(), $dados);
        }
        return redirect()->back()->with('success', 'Sua mensagem foi enviada com sucesso!');
    }
}
