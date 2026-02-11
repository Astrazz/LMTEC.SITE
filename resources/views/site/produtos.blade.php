@extends('site.base')
@section('url', route('site.home'))
@section('title', 'Banco de Couro em Salvador')
@section('description',
    'Expansom Banco de Couro em Salvador é uma empresa que vem atuando a vários anos na distribuição
    de Acessórios Automotivos, com grande variedade de lâmpadas de LED para o setor e diversos produtos para deixar seu
    carro com o seu jeito. Vendemos no Atacado e no Varejo!')
@section('image', url('site/images/logo.png'))
@section('pg', 'pg-interna estrutura-2 pg-2')
@section('content')
    <div id="mainBlock">
        <div class="interna">
            <div class="cnt-interna">
                <div class="modint-13">
                    <div class="bg-img" style="background-image:url({{ url('storage/servicos/projeto-de-quadros-de-comando-eletrico.jpg') }});">
                    </div>
                    <div class="titulo-bread">
                        <h1>Produtos</h1>
                        <h2>Conheça alguns de nossos produtos</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="conteudo-int">
            <div class="modtxt mod2" id="vmd-1010-ir">
                <div class="full-max">
                    <figure>
                        <img src="{{ url('storage/produtos/1.png') }}" width="462" />

                        <div class="bolha move">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </figure>
                    <div class="box-txt">
                        <h2>Quadros de comando</h2>
                        <div class="cont-txt">Quadros de comando para automação de
                            bombas ou equipamentos elétricos: recalque,
                            pressurização, incêndio, esgotamento, piscina e
                            outros.
                        </div>
                    </div>
                </div>
            </div>
            <div class="modtxt mod2" id="vmd-1010-ir">
                <div class="full-max">
                    <figure>
                        <img src="{{ url('storage/produtos/2.png') }}" width="462" />

                        <div class="bolha move">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </figure>
                    <div class="box-txt">
                        <h2>Válvulas e conexões hidráulicas</h2>
                        <div class="cont-txt">Venda de válvulas e conexões hidráulicas
                            roscas e ranhurados (grooved).
                        </div>
                    </div>
                </div>
            </div>
            <div class="modtxt mod2" id="vmd-1010-ir">
                <div class="full-max">
                    <figure>
                        <img src="{{ url('storage/produtos/3.png') }}" width="462" />

                        <div class="bolha move">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </figure>
                    <div class="box-txt">
                        <h2>SKID</h2>
                        <div class="cont-txt">Conjunto de bombas para
                            pressurização água potável, rede de combate a
                            incêndio e recalque de água.
                        </div>
                    </div>
                </div>
            </div>
            <div class="modtxt mod2" id="vmd-1010-ir">
                <div class="full-max">
                    <figure>
                        <img src="{{ url('storage/produtos/4.png') }}" width="462" />

                        <div class="bolha move">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </figure>
                    <div class="box-txt">
                        <h2>Equipamentos, bombas e centrifugas</h2>
                        <div class="cont-txt">Venda de equipamentos, bombas
                            centrifugas e motores a combustão
                        </div>
                    </div>
                </div>
            </div>
            <div class="modtxt mod2" id="vmd-1010-ir">
                <div class="full-max">
                    <figure>
                        <img src="{{ url('storage/produtos/5.png') }}" width="462" />

                        <div class="bolha move">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </figure>
                    <div class="box-txt">
                        <h2>Equipamentos para combate a incêndio</h2>
                        <div class="cont-txt">Venda de equipamentos para combate a incêndio.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection