@extends('site.base')
@section('url', route('site.home'))
@section('title', 'Nossos Clientes')
@section('description', 'Empresa de Engenharia Elétrica, Empresa de Engenharia mecânica')
@section('image', url('site/images/logo.png'))
@section('content')
    <div id="mainBlock">
        <div class="interna">
            <div class="cnt-interna">
                <div class="modint-13">
                    <div class="bg-img" style="background-image:url({{ url('site') }}/images/topo.jpg);">
                    </div>
                    <div class="titulo-bread">
                        <h1>Nossos Clientes</h1>
                    </div>
                </div>
                <div class="apps">
                    <div class="full-max">
                        @foreach ($clientes as $cliente)
                            <div class="box-app">
                                <figure>
                                    <img src="{{ url("storage/{$cliente->marca}") }}" data-image-id="97"
                                        data-image-hash="5aa6a33057acb450359e2e86b13b8a69" data-image-zoom="1"
                                        width="200" height="200" alt="{{ $cliente->nome }}"
                                        title="{{ $cliente->nome }}" class="image-thumb" />
                                </figure>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
