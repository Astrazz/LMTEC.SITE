@extends('site.base')
@section('url', route('site.contato'))
@section('title', 'Contato')
@section('description', 'Fale conosco')
@section('image', url('site/images/logo.png'))
@section('content')
<div id="mainBlock">
    <div class="interna">
    <div class="cnt-contato" style="margin-top: 100px;">
        <div class="contato-form" >
            <h1>Contato</h1>
            <form action="{{ route('contato2.store') }}" method="post">
                @csrf
                <div class="formulario">
                    <span class="msg-obrigatorio">Os campos em destaque <em>vermelho</em> são obrigatórios para o
                        envio do formulário.</span>
                    <p>
                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" value="{{ old('nome') }}" required placeholder="Nome" class="floatlabel" />
                    </p>
                    <p>
                        <label for="email">E-mail:</label>
                        <input type="text" name="email" id="email" value="{{ old('email') }}" required
                            placeholder="Email" class="floatlabel" />
                    </p>
                    <p>
                        <label for="telefone">Telefone:</label>
                        <input type="text" name="telefone" id="telefone" value="{{ old('telefone') }}" required
                            placeholder="(DDD) Telefone" class="floatlabel telefone" />
                    </p>
                    <p>
                        <select name="conheceu" id="conheceu">
                            <option value="Como nos Conheceu?">Como nos Conheceu?</option>
                            <option value="Veículo Personalizado">Veículo Personalizado</option>
                            <option value="Google">Google</option>
                            <option value="Redes Sociais">Redes Sociais</option>
                            <option value="Anúncios">Anúncios</option>
                            <option value="E-mail">E-mail</option>
                            <option value="Indicação">Indicação</option>
                        </select>
                    </p>
                    <p>
                        <label for="assunto">Assunto:</label>
                        <input type="text" name="assunto" id="assunto" value="{{ old('assunto') }}" placeholder="Assunto" class="floatlabel" />
                    </p>
                    <p>
                        <label for="info">Informações:</label>
                        <textarea name="msg" id="msg" cols="20" rows="3" placeholder="Informações adicionais">{{ old('msg') }}</textarea>
                    </p>
                    <p>
                        <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
                    </p>
                    <p class="botao-form">
                        <input type="submit" name="enviar" id="submit" value="Enviar" />
                    </p>
                </div>
            </form>
        </div>
        <div class="localizacao">
            <ul>
                <li class="telefone">
                    <strong>Telefone</strong>
                    <a class="tel0" href="tel:{{ env('TELEFONE') }}" rel="noreferrer" title="Ligue para nós">{{ env('TELEFONE') }}</a>
                    <a class="tel0" href="tel:{{ env('TELEFONE2') }}" rel="noreferrer" title="Ligue para nós">{{ env('TELEFONE2') }}</a>
                </li>
                <li class="whatsapp">
                    <strong>WHATSAPP</strong>
                    <a class="whats-global" href="https://api.whatsapp.com/send?phone=55{{ setUri2(env('WHATSAPP')) }}&text=Olá eu estou no site da LM Tec Automação e gostaria de saber mais informações sobre os serviços prestados" target="_blank" rel="noreferrer" title="Contato via Whatsapp">{{ env('WHATSAPP') }}</a>
                </li>
                <li class="email-contato">
                    <strong>E-mail </strong>
                    <a href="mailto:{{ env('EMAIL') }}" target="_blank" rel="noreferrer" title="Enviar e-mail">{{ env('EMAIL') }}</a>
                </li>
                <li class="endereco">
                    <strong>Endereço</strong>
                    {{ env('ENDERECO') }}
                </li>
            </ul>

            <div class="redes">
                <strong>Siga-nos </strong>
                <span>
                    <a href="{{ env('FACEBOOK') }}" target="_blank" title="Siga-nos: {{ env('FACEBOOK') }}" rel="noreferrer"><i class="icon-facebook"></i></a>
                    <a href="{{ env('INSTAGRAM') }}" target="_blank" title="Siga-nos: {{ env('INSTAGRAM') }}" rel="noreferrer"><i class="icon-instagram-02"></i></a>
                </span>
            </div>

        </div>
    </div>

</div>


<div id="canvas1" class="mapa">
    <iframe id="map_canvas1"  loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.1228080210435!2d-38.27495912483403!3d-12.835339887467624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cd1d9ab37768ba3%3A0x87f335381d184274!2zTE1URUMgQVVUT01Bw4fDg08!5e0!3m2!1spt-BR!2sbr!4v1770662981162!5m2!1spt-BR!2sbr" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <form method="get" id="form_route">
        <input type="text" id="route_from" name="route_from" placeholder="Digite aqui seu endereço"/>
        <input type="submit" value="Tra&ccedil;ar Rota" />
    </form>

</div>
</div>
@endsection


