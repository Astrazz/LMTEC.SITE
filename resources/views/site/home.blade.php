@extends('site.base')
@section('titulo', 'LM Tec Automação | Empresa de Automação Industrial')
@section('url', route('site.quem.somos'))
@section('title', 'LM Tec Automação | Empresa de Automação Industrial')
@section('description', ' A LM Tec Automação é uma empresa do ramo de automação elétrica, fabricação instalação
e manutenção de equipamentos e especializada em sistema de combate a incêndio')
@section('image', url("storage/images/logo.png"))
@section('content')
<div id="mainBlock">
    <div class="banner-12">
        <ul class="slider-banner">
            @foreach ($slides as $slide)
            <li>
                <span class="efban">
                    <span class="linhas"></span>
                </span>
                <div class="img-banner" style="background:url({{ url("storage/{$slide->slide}") }}) center no-repeat; background-size:cover;">
                    <div></div>
                </div>
                <div class="legenda">
                    <b>
                        {{ $slide->titulo }}
                        <span> {{ $slide->description }}</span>
                    </b>
                    <a href="{{ route('site.servico',$slide->url) }}" title="Hotéis e Resor - Entre em contato">Saiba mais</a>
                </div>
            </li>
            @endforeach
        </ul>
        <div class="box-ancora">
            <a class="mouse-home" href="{{ url('site') }}/#ancora"></a>
        </div>
        <span id="ancora"></span>
        </div>
    <div class="home">
    <section class="servicos-54">
        <h2>Tudo o que você precisa em um só lugar</h2>
        <span>Desenvolvemos software de gestão personalizado com melhor custo/benefício do mercado projetado por profissionais com mais de 20 anos de experiência.</span>
        <div class="full-max">
            @foreach ($slides as $servico)
                <a href="{{ route('site.servico',$servico->url) }}" class="box-cont">
                    <figure style="background-image: url('{{ url("storage/{$servico->image}") }}');">
                        <img style="width: 350px; height: 200px; object-fit: cover; object-position: center;" src="{{ url("storage/{$servico->image}")  }}">
                    </figure>
                    <div class="box-txt">
                        <h3>{{ $servico->titulo }}</h3>
                        <p>{{ lmWord($servico->description, 100) }}...</p>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
    <div class="destaque-asd" style="background-image: url({{ url('storage/images/destaque.jpg') }});">
        <div class="full-max">
            <span>A {{ env('APP_EMPRESA') }} é líder no mercado há mais de {{calcularIdade("1998-01-01")}}  anos, com uma equipe altamente qualificada e experiente que oferece soluções inovadoras e personalizadas para atender às necessidades de cada cliente.</span>
        </div>
    </div>
        {{-- <section class="servicos-55">
            <h2>Segmentos</h2>
            <div class="full-max">
                <div class="box-slide owl-theme">
                    <a href="javascript:void(0)" title="Hotéis e Resor">
                        <figure>
                            <img src="{{ url('storage/images/hoteis.png') }}" data-image-id="16" data-image-hash="94b23c1af8746caed763d91e7570962c" data-image-zoom="1" width="56" height="56"  alt="Hotéis e Resor" class="image-thumb" />
                        </figure>
                        <h3>Hotéis e Resort</h3>
                    </a>
                    <a href="javascript:void(0)" title="Condomínios">
                        <figure>
                            <img src="{{ url('storage/images/edificios.png') }}" data-image-id="16" data-image-hash="94b23c1af8746caed763d91e7570962c" data-image-zoom="1" width="56" height="56"  alt="Condomínios" class="image-thumb" />
                        </figure>
                        <h3>Condomínios</h3>
                    </a>
                    <a href="javascript:void(0)" title="Indústria">
                        <figure>
                            <img src="{{ url('storage/images/fabrica.png') }}" data-image-id="16" data-image-hash="94b23c1af8746caed763d91e7570962c" data-image-zoom="1" width="56" height="56"  alt="Indústria" class="image-thumb" />
                        </figure>
                        <h3>Indústria</h3>
                    </a>
                    <a href="javascript:void(0)" title="Construtoras">
                        <figure>
                            <img src="{{ url('storage/images/arquitetura.png') }}" data-image-id="16" data-image-hash="94b23c1af8746caed763d91e7570962c" data-image-zoom="1" width="56" height="56"  alt="Construtoras" class="image-thumb" />
                        </figure>
                        <h3>Construtoras</h3>
                    </a>
                    <a href="javascript:void(0)" title="Hospitais e Clínicas">
                        <figure>
                            <img src="{{ url('storage/images/clinica.png') }}" data-image-id="16" data-image-hash="94b23c1af8746caed763d91e7570962c" data-image-zoom="1" width="56" height="56"  alt="Hospitais e Clínicas" class="image-thumb" />
                        </figure>
                        <h3>Hospitais e Clínicas</h3>
                    </a>
                    <a href="javascript:void(0)" title="Igrejas">
                        <figure>
                            <img src="{{ url('storage/images/igreja.png') }}" data-image-id="16" data-image-hash="94b23c1af8746caed763d91e7570962c" data-image-zoom="1" width="56" height="56"  alt="Igrejas" class="image-thumb" />
                        </figure>
                        <h3>Igrejas</h3>
                    </a>
                    <a href="javascript:void(0)" title="Shoppings">
                        <figure>
                            <img src="{{ url('storage/images/shop.png') }}" data-image-id="16" data-image-hash="94b23c1af8746caed763d91e7570962c" data-image-zoom="1" width="56" height="56"  alt="Shoppings" class="image-thumb" />
                        </figure>
                        <h3>Shoppings</h3>
                    </a>
                    <a href="javascript:void(0)" title="Escolas e Faculdades">
                        <figure>
                            <img src="{{ url('storage/images/faculdade.png') }}" data-image-id="16" data-image-hash="94b23c1af8746caed763d91e7570962c" data-image-zoom="1" width="56" height="56"  alt="Escolas e Faculdades" class="image-thumb" />
                        </figure>
                        <h3>Escolas e Faculdades</h3>
                    </a>
                </div>
            </div>
        </section> --}}
        <section class="clientes-parceiros-02">
            <h2>Nossos Clientes</h2>
            <div class="clientes-02-lista owl-theme">
                @foreach ($clientes as $cliente)
                <figure>
                    <img src="{{ url("storage/{$cliente->marca}") }}" data-src="{{ url("storage/{$cliente->marca}") }}" data-src-retina="{{ url("storage/{$cliente->marca}") }}" width="200" height="200"   class="owl-lazy" loading="lazy">
                </figure>
                @endforeach
            </div>
        </section>
    </div>
    </div>
@endsection
