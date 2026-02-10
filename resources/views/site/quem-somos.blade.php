@extends('site.base')
@section('titulo', 'Sobre a LMTEC Automação | Empresa de Automação Industrial')
@section('url', route('site.quem.somos'))
@section('title', 'Sobre a LMTEC Automação | Empresa de Automação Industrial')
@section('description', ' A LMTEC Automação é uma empresa do ramo de automação elétrica, fabricação instalação
e manutenção de equipamentos e especializada em sistema de combate a incêndio')
@section('keyword', '')
@section('image', url('storage/images/logo.jpg'))
@section('content')
    <div id="mainBlock">
        <div class="interna">
            <div class="cnt-interna">
                <div class="modint-13">
                    <div class="bg-img" style="background-image:url({{ url('site') }}/images/topo.jpg);">
                    </div>
                    <div class="titulo-bread">
                        <h1>Quem Somos</h1>
                    </div>
                </div>

                <div class="imagem-direita ar fr">
                    <div class="image_td">
                        <img src="{{ url('site') }}/images/6241293c534174f8e8d2674f76248746.png" width="450"
                            height="316" data-image-id="138" data-image-hash="8a1b8203c601c2e7e48b93adf68c4c1c"
                            class="image_img" alt="empresa.png" />
                    </div>
                </div>
                <p style="text-align: justify;">
                    A LMTEC Automação é uma empresa do ramo de automação elétrica, fabricação instalação
                    e manutenção de equipamentos e especializada em sistema de combate a incêndio. Com
                    experiência no mercado desde 2016, buscamos através de avaliações de qualidade e inspeções
                    periódicas, manter as empresas de acordo com o estabelecido nas Leis e Normas vigentes com
                    relação sistema elétricos e fabricar equipamentos que atenda a necessidade dos clientes
                </p>
                <br><br>
                <h3>Nosso Objetivo</h3>
                1. Desenvolver ambientes de negócios internos e externo que propiciem satisfação dos clientes e da comunidade em geral, por meio de produtos e serviços diferenciados;<br><br>
                2. Fornecer produtos e serviços aos clientes de qualidade e aplicar procedimentos com objetividade e práticas da qualidade total;<br><br>
                3. Criar soluções em de acordo com as necessidades dos clientes, colaboradores e parceiros de forma sustentável;<br><br>
                4. Prover medidas corretivas e preventivas para que os equipamentos atendam as expectativas quando necessário
                <div class="cb"></div>
            </div>
        </div>


        <div class="mvv-01">
            <div class="full-max">
                <div class="txt-missao">
                    <figure>
                        <img src="{{ url('site') }}/images/b47f0091522908e7af357a2d998911be.png" data-image-id="130"
                            data-image-hash="9bccb957ab31a48a4a95b26f6a708df9" data-image-zoom="1" width="50"
                            height="50" alt="Missão" class="image-thumb" />
                    </figure>

                    <h2>Missão</h2>
                    <p>
                        A LMTEC Automação tem a missão de ser uma empresa focada em automação e
                        especializada em sistema de combate a incêndio, buscando oferecer um atendimento rápido com
                        qualidade, comprometida com a excelência de seus produtos, trabalhando de forma justa e leal,
                        valorizando a capacidade de seus cooperadores e lutando por esse bem comum
                    </p>
                </div>

                <div class="txt-missao">
                    <figure>
                        <img src="{{ url('site') }}/images/b4a8b996282187819acb806b02dfa137.png" data-image-id="131"
                            data-image-hash="f8b320541b13d3ec8915977081d33cde" data-image-zoom="2" width="50"
                            height="50" alt="Visão" class="image-thumb" />
                    </figure>
                    <h2>Visão</h2>
                    <p>
                        Tenha a coragem de ser o seu próprio critico construtivo, procure seus erros e fraquezas, corrija-
                        os. Isso fará de você um grande profissional.
                    </p>
                </div>

                <div class="txt-missao">
                    <figure>
                        <img src="{{ url('site') }}/images/08ce9251513d121ffc020d6218ebf9a9.png" data-image-id="132"
                            data-image-hash="ba9573934254699af00676f4742fcf97" data-image-zoom="3" width="50"
                            height="50" alt="Valores" class="image-thumb" />
                    </figure>
                    <h2>Valores</h2>
                    <p>
                        Oferecer a melhor solução ao cliente através da especialização (conhecimento do negócio
                        do cliente);<br><br>
                        Oferecer a menor preço com a maior qualidade possível.<br><br>
                        Oferecer excelência no atendimento e suporte técnico para os clientes.<br><br>
                        A satisfação de nossos clientes e a nossa busca
                    </p>
                </div>

            </div>
        </div>


        <!-- <div class="box-cont-mvv">
            <div class="full-max">


            </div>
        </div> -->
    </div>
@endsection
