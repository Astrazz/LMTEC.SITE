@extends('site.base')
@section('url', route('site.servico', $servico->url))
@section('titulo', 'Serviço de '.$servico->titulo.' | Soluções Especializadas e Inovadoras')
@section('title', 'Serviço de '.$servico->titulo.' | Soluções Especializadas e Inovadoras')
@section('description', $servico->description)
@section('image', url("storage/{$servico->image}"))
@section('content')
    <div id="mainBlock">
        <div class="interna">
            <div class="cnt-interna">
                <div class="modint-13">
                    <div class="bg-img" style="background-image:url({{ url("storage/{$servico->image}") }});">
                    </div>
                    <div class="titulo-bread">
                        <h1>{{ $servico->titulo }}</h1>
                        <h2>{{ $servico->description }}</h2>
                        <a href="javascript:void(0)" class="abre-modal" title="Solicitar Demonstração - Infraestrutura" data-title="Solicitar Demonstração - Infraestrutura" data-remodal-target="jumpForm123">Solicitar Orçamento</a>
                    </div>
                </div>

                <div class="remodal" data-remodal-id="jumpForm123">
                    <!-- <button data-remodal-action="close" class="remodal-close"></button> -->
                    <i data-remodal-action="close" class="remodal-close"></i>
                    <div class="WRAP_SHOW_CONTENT">
                        <a title="Contato Rápido" href="JavaScript:Void(0);" id="jumpForm123"></a>
                        <form name="phpwcmsForm123" id="phpwcmsForm123" action="{{ url('contato.store') }}" method="post">
                            <!--[if lt IE 10]>
                                <style type="text/css">
                                    .formulario p > label{ display:block}
                                </style>
                            <![endif]-->
                            <div class="formulario">
                                <div class="tit-modal"></div>
                                <span class="msg-preencha">Preencha todos os campos abaixo para que um especialista entre em contato com você.</span>
                                <p>
                                    <label for="nome2">Nome:</label>
                                    <input type="text" name="nome2" id="nome2" value="" placeholder="Nome" class="floatlabel" />
                                </p>
                                <p>
                                    <label for="email2">E-mail:</label>
                                    <input type="text" name="email2" id="email2" value="" placeholder="Email" class="floatlabel" />
                                </p>
                                <p class="m2">
                                    <label for="telefone2">Telefone:</label>
                                    <input type="text" name="telefone2" id="telefone2" value="" placeholder="(DDD) Telefone" class="floatlabel" />
                                </p>
                                <p class="m2">
                                    <label for="assunto2">Assunto:</label>
                                    <input type="text" name="assunto2" id="assunto2" value="" placeholder="Assunto" class="floatlabel" />
                                </p>
                                <p>
                                    <select name="conheceu2" id="conheceu2">
                                        <option value="Como nos Conheceu?">Como nos Conheceu?</option>
                                        <option value="Google">Google</option>
                                        <option value="Internet">Internet</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Twitter">Twitter</option>
                                        <option value="Anúncios">Anúncios</option>
                                        <option value="Email Marketing">Email Marketing</option>
                                        <option value="Outros">Outros</option>
                                    </select>
                                </p>
                                <p>
                                    <label for="info2">Informações:</label>
                                    <textarea name="info2" id="info2" cols="20" rows="3" placeholder="Informações extras"></textarea>
                                    <span class="bt-enviar">
                                        <i class="icon-send"></i>Enviar
                                        <input type="submit" name="enviar2" id="enviar2" value="">
                                    </span>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="conteudo-int">
            <div class="modtxt mod2" id="rf-1200">
                <div class="full-max">
                    <figure>
                        <img style="border-radius: 20px 75px 20px 30px;" src="{{ url("storage/{$servico->image}") }}" width="635" height="385" alt="{{ $servico->titulo }}" title="{{ $servico->titulo }}" />
                        <div class="bolha move">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </figure>
                    <div class="box-txt">
                        <h2>{{ $servico->titulo }}</h2>
                        <div class="cont-txt" style="text-align: justify;">
                            {!! $servico->descricao !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="conteudo-int"></div>

        <div class="temp-contato">
            <div class="box-contato">
                <figure>
                    <img src="{{ url('site') }}/images/cara.png" width="343" height="345" alt="avatar-contato.png" />
                </figure>
                <div class="box-txt">
                    <h2>Deseja conhecer mais sobre nossos serviços?</h2>
                    <div class="cont-txt">Entre em contato conosco e um especialista ir&aacute; entender sua necessidade e
                        oferecer a melhor solu&ccedil;&atilde;o.</div>

                    <div class="bts-contato">
                        <a href="https://api.whatsapp.com/send?phone=55{{ setUri2(env('WHATSAPP')) }}&text=Olá eu estou no site da LMTEC AUTOMAÇÃO e gostaria de saber mais informações sobre o serviço de {{ $servico->titulo}}" target="_blank" rel="noreferrer" title="Contato via Whatsapp">Whatsapp</a>
                        <a href="mailto:{{ env('EMAIL') }}" title="Contato via e-mail">E-mail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
