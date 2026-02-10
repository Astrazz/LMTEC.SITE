@extends('site.base')
@section('url', route('site.home'))
@section('title', 'Banco de Couro em Salvador')
@section('description', 'Expansom Banco de Couro em Salvador é uma empresa que vem atuando a vários anos na distribuição
    de Acessórios Automotivos, com grande variedade de lâmpadas de LED para o setor e diversos produtos para deixar seu
    carro com o seu jeito. Vendemos no Atacado e no Varejo!')
@section('image', url('site/images/logo.png'))
@section('pg','pg-interna estrutura-2 pg-2')
@section('content')
    <div id="mainBlock">
        <div class="interna">
            <div class="cnt-interna">
                <div class="modint-13">
                    <div class="bg-img" style="background-image:url({{ url('site/images/topo.jpg') }});">
                    </div>
                    <div class="titulo-bread">
                        <h1>Nossos Cases</h1>
                    </div>
                </div>
                <div class="galeria-09">
                    <div class="full-max">
                        @foreach ($dds as $item)
                            <div class="box-img">
                                <div class="juxtapose" data-startingposition="50%">
                                    <img class="left" src="{{ url("storage/{$item->antes}") }}" data-label="Before" title="Antes" loading="lazy" style="width: 600px; height: 410px; object-fit: cover; object-position: center;" alt="Antes">
                                    <img class="right" src="{{ url("storage/{$item->depois}") }}" data-label="After" title="Depois" loading="lazy" style="width: 600px; height: 410px; object-fit: cover; object-position: center;" alt="Depois">
                                </div>
                                <span>{{ $item->titulo }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
