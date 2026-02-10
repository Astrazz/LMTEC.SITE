<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function store(Request $request){
        // dd($request->all());

        $recaptcha_response = $_POST['g-recaptcha-response'];
        $secret_key = env('RECAPTCHA_SECRET_KEY');
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array('secret' => $secret_key, 'response' => $recaptcha_response);
        $options = array('http' => array('method' => 'POST', 'content' => http_build_query($data)));
        $options['http']['header'] = "Content-type: application/x-www-form-urlencoded\r\n";
        $context = stream_context_create($options);
        $verify = file_get_contents($url, false, $context);
        $captcha_success = json_decode($verify);
        if (!$captcha_success->success) {
            return redirect()->back()->with('success','Marque que você não é um robô para continuar')->withInput();
        } else {
            Mail::send('envia-email-de-contato', [
                'nome' => $request->nome1,
                'email' => $request->email1,
                'telefone' => $request->telefone1,
                'assunto' => $request->assunto1,
                'msg' => $request->info1,
            ], function($mail) use($request){
                $mail->from($request->email1, $request->nome1);
                $mail->to(env('EMAIL'))->subject('Nova Contato do Site');
            });

            Mail::send('resposta-email-de-contato', [
                'nome' => $request->nome1,
                'email' => $request->email1,
                'telefone' => $request->telefone1,
                'assunto' => $request->assunto1,
                'msg' => $request->info1,
            ], function($mail) use($request){
                $mail->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
                $mail->to($request->email1)->subject(env('APP_NAME'));
            });

            // dd($request->all());
            return redirect()->back()->with('success','Sua mensagem foi enviada com sucesso!');
        }



    }

    public function QuoteStore(Request $request){

        $recaptcha_response = $_POST['g-recaptcha-response'];
        $secret_key = env('RECAPTCHA_SECRET_KEY');
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array('secret' => $secret_key, 'response' => $recaptcha_response);
        $options = array('http' => array('method' => 'POST', 'content' => http_build_query($data)));
        $options['http']['header'] = "Content-type: application/x-www-form-urlencoded\r\n";
        $context = stream_context_create($options);
        $verify = file_get_contents($url, false, $context);
        $captcha_success = json_decode($verify);
        if (!$captcha_success->success) {
            return redirect()->back()->with('success','Marque que você não é um robô para continuar')->withInput();
        } else {
            Mail::send('envia-email-de-contato', [
                'nome' => $request->nome,
                'email' => $request->email,
                'telefone' => $request->telefone,
                'assunto' => $request->assunto,
                'msg' => $request->info,
            ], function($mail) use($request){
                $mail->from($request->email, $request->nome);
                $mail->to(env('EMAIL'))->subject('Nova Contato do Site');
            });

            Mail::send('resposta-email-de-contato', [
                'nome' => $request->nome,
                'email' => $request->email,
                'telefone' => $request->telefone,
                'assunto' => $request->assunto,
                'msg' => $request->info,
            ], function($mail) use($request){
                $mail->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
                $mail->to($request->email)->subject(env('APP_NAME'));
            });

            // dd($request->all());
            return redirect()->back()->with('success','Sua mensagem foi enviada com sucesso!');
        }
    }
}
