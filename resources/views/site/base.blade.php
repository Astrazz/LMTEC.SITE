<!DOCTYPE html>
<html lang="pt-br" id="www-asdtech-com-br">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  {{-- <base href="https://www.asdtech.com.br/" /> --}}
  <title>@yield('titulo') | {{ env('APP_EMPRESA') }}</title>
  <link rel="stylesheet" type="text/css" href="{{ url('site') }}/template/inc_css/frontend.css" />
    <meta name="classification" content="Site Institucional" />
    <meta name="title" content="{{ env('APP_EMPRESA') }}" />
    <meta name="city" content="Lauro de Freitas"/>
    <meta name="state" content="Bahia" />
    <meta name="geo.placename" content="Lauro de Freitas " />
    <meta name="geo.region" content="BR-" />
    <meta name="REVISIT-AFTER" content="3 days"/>
    <meta name="copyright" content="Lopak Tecnologia" />
    <meta name="url" content="www.lmtecautomacao.com.br/" />
    <meta name="robots" content="index,follow" />
    <meta name="rating" content="general" />
    <meta name="RESOURCE-TYPE" content="document"/>
    <meta name="DISTRIBUTION" content="global"/>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('site') }}/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('site') }}/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('site') }}/images/icons/favicon-16x16.png">
    <link rel="manifest" href="{{ url('site') }}/images/icons/site.webmanifest">
    <link rel="mask-icon" href="{{ url('site') }}/images/icons/safari-pinned-tab.svg" color="#002e64">
    <link rel="shortcut icon" href="{{ url('site') }}/images/icons/favicon.ico">
    <meta name="msapplication-TileColor" content="#002e64">
    <meta name="msapplication-config" content="images/icons/browserconfig.xml">
    <meta name="theme-color" content="#496287">
    <meta name="description" content="@yield('description')" />
    <meta name="keyword" content="@yield('keyword')" />
    <link rel="canonical" href="https://www.lmtecautomacao.com.br/" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="@yield('url')">
    <meta property="og:type" content="service">
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('description')">
    <meta property="og:keyword" content="@yield('keyword')">
    <meta property="og:image" content="@yield('image')" />
    <meta property="og:image:secure_url" content="@yield('image')" />
  <!--[if lt IE 9]>
	<script src="https://www.asdtech.com.br/template/lib/html5shiv/html5shiv.min.js"></script>
	<script src="https://www.asdtech.com.br/template/lib/respond/respond.min.js"></script>
  <![endif]-->

  <script src="https://www.google.com/recaptcha/api.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
</head>
<body>


<header id="headerBlock">
    <style>
        .sempreDireita{
            position: fixed;
            z-index: 560;
            bottom: 0px;
            height: 61px;
            width: 60px;
            right: 0;
        }
    </style>
    <div class="sempreDireita">
        <a href="https://api.whatsapp.com/send?phone=55{{ setUri2(env('WHATSAPP')) }}&text=Olá eu estou no site da LM Tec Automação e gostaria de saber mais informações sobre os serviços prestados">
            <img src="http://cartoriodavitoria.com.br/wp-content/uploads/2017/10/whatsapp-messenger-lopak.png">
        </a>
    </div>

    <div class="topo-09">
    <div class="ssm-overlay ssm-toggle-nav ssm-nav-visible" style="display: none;"></div>
    <i class="ico-fone-responsivo icon-phone03"></i>
    <div class="ssm-toggle-nav ssm-nav-visible">
        <i class="botao-menu">
            <span></span>
        </i>
    </div>

    <a class="logo" href="{{ route('site.home') }}" title="{{ env('APP_EMPRESA') }}"></a>
    <div class="topo-right">
        <nav class="menu nav"><ul class="pmenu">
   <li class="drop_ul cat-id_1"><a href="{{ route('site.home') }}">Home</a></li>
   <li class="drop_ul cat-id_1"><a href="{{ route('site.quem.somos') }}">Quem Somos</a></li>
   {{-- <li class="drop_ul link_sub cat-id_2"><a href="javascript:void(0);">Segmentos<!--[if IE 7]><!--></a><!--<![endif]-->
    <ul class="psubmenu">
        <li class="drop_ul cat-id_7"><a href="{{ route('site.servicos') }}" class="horiz_enclose">Hoteis e Resort</a></li>
        <li class="drop_ul cat-id_7"><a href="{{ route('site.servicos') }}" class="horiz_enclose">Condomínios</a></li>
        <li class="drop_ul cat-id_7"><a href="{{ route('site.servicos') }}" class="horiz_enclose">Indústria</a></li>
        <li class="drop_ul cat-id_7"><a href="{{ route('site.servicos') }}" class="horiz_enclose">Construtoras</a></li>
        <li class="drop_ul cat-id_7"><a href="{{ route('site.servicos') }}" class="horiz_enclose">Hospitais e Clínicas</a></li>
        <li class="drop_ul cat-id_7"><a href="{{ route('site.servicos') }}" class="horiz_enclose">Igrejas</a></li>
        <li class="drop_ul cat-id_7"><a href="{{ route('site.servicos') }}" class="horiz_enclose">Shoppings</a></li>
        <li class="drop_ul cat-id_7"><a href="{{ route('site.servicos') }}" class="horiz_enclose">Escolas e Faculdades</a></li>
   </ul>
   </li> --}}
   <li class="drop_ul link_sub cat-id_3"><a href="javascript:void(0);">Nossos Serviços<!--[if IE 7]><!--></a><!--<![endif]-->
    <ul class="psubmenu">
        @foreach ($menus as $menu)
            <li class="drop_ul cat-id_19 li_enclose">
                <a href="{{ route('site.servico',$menu->url) }}" class="horiz_enclose">{{ $menu->titulo }}</a>
            </li>
        @endforeach
   </ul>
   </li>
   <li class="drop_ul cat-id_4"><a href="{{ route('site.produtos') }}">Produtos</a></li>
   <li class="drop_ul cat-id_6 li_enclose"><a href="{{ route('site.contato') }}"  class="horiz_enclose">Contato</a></li>
</ul>
</nav>
        <a href="javascript:void(0)" class="ligamos abre-modal" title="Nós Ligamos para você" data-title="Nós Ligamos para você" data-remodal-target="jumpForm5">NÓS LIGAMOS PARA VOCÊ</a>
        <div class="telefone-topo">
            <div class="abrir-fone">
                <span></span>
            </div>
            <div class="fone-dropdown">
                <div class="numeros-dropdown">
                    <div class="telefone">
                        <a class="tel-top1" href="tel:+55{{ env('TELEFONE') }}" rel="noreferrer" title="Ligue para nós">{{ env('TELEFONE') }}</a>
                        <a class="tel-top1" href="tel:+55{{ env('TELEFONE2') }}" rel="noreferrer" title="Ligue para nós">{{ env('TELEFONE2') }}</a>
                    </div>
                    <div class="whatsapp">
                        <a class="whats-global" href="https://api.whatsapp.com/send?phone=55{{ setUri2(env('WHATSAPP')) }}&text=Olá eu estou no site da LM Tec Automação e gostaria de saber mais informações sobre os serviços prestados" target="_blank" rel="noreferrer" title="Contato via Whatsapp">{{ env('WHATSAPP') }}</a>
                    </div>
                </div>
                <div class="emails">
                    <span>
                        <a href="mailto:{{ env('EMAIL') }}" target="_blank" rel="noreferrer" title="Enviar e-mail">{{ env('EMAIL') }}</a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="redes-topo">
    <a href="{{ env('FACEBOOK') }}" target="_blank" title="Siga-nos: {{ env('FACEBOOK') }}" rel="noreferrer"><i class="icon-facebook"></i></a>
    <a href="{{ env('INSTAGRAM') }}" target="_blank" title="Siga-nos: {{ env('INSTAGRAM') }}" rel="noreferrer"><i class="icon-instagram-02"></i></a>
</div>
<!-- informações laterais responsivo -->
<div class="info-lateral">
    <div class="telefone-lateral">
        <a class="tel-top1" href="tel:+55{{ env('TELEFONE') }}" rel="noreferrer" title="Ligue para nós">{{ env('TELEFONE') }}</a>
        <a class="tel-top1" href="tel:+55{{ env('TELEFONE2') }}" rel="noreferrer" title="Ligue para nós">{{ env('TELEFONE2') }}</a>
    </div>
    <div class="whatsapp-lateral">
        <a class="whats-global" href="https://api.whatsapp.com/send?phone=55{{ setUri2(env('WHATSAPP')) }}&text=Olá eu estou no site da LM Tec Automação e gostaria de saber mais informações sobre os serviços prestados" target="_blank" rel="noreferrer" title="Contato via Whatsapp">{{ env('WHATSAPP') }}</a>
    </div>
    <div class="email-lateral">
        <a href="mailto:{{ env('EMAIL') }}" target="_blank" rel="noreferrer" title="Enviar e-mail">{{ env('EMAIL') }}</a>
    </div>
    <div class="redes">
        <span>SIGA-NOS</span>
        <a href="{{ env('FACEBOOK') }}" target="_blank" title="Siga-nos: {{ env('FACEBOOK') }}" rel="noreferrer"><i class="icon-facebook"></i></a>
        <a href="{{ env('INSTAGRAM') }}" target="_blank" title="Siga-nos: {{ env('INSTAGRAM') }}" rel="noreferrer"><i class="icon-instagram-02"></i></a>
    </div>
    <a class="formulario-contato" href="{{ url('site') }}/contato-1.html"> Formulário de Contato</a>
</div>
<a href="#" class="voltar-topo cd-top"><p>topo</p></a>
<a href="javascript:void(0)" class="ligamos-mob abre-modal" title="Nós Ligamos para você" data-title="Nós Ligamos para você" data-remodal-target="jumpForm5"></a>
<div class="remodal" data-remodal-id="jumpForm5">
    <!-- <button data-remodal-action="close" class="remodal-close"></button> -->
    <i data-remodal-action="close" class="remodal-close"></i>
    <div class="WRAP_SHOW_CONTENT">
    <a title="Contato Rápido" href="javascript:void(0);" id="jumpForm5"></a>
    <form name="phpwcmsForm5" id="phpwcmsForm5" action="{{ route('contato.store') }}" method="post">
        @csrf
        <!--[if lt IE 10]>
            <style type="text/css">
                .formulario p > label{ display:block}
            </style>
        <![endif]-->
        <div class="formulario">
            <div class="tit-modal"></div>
            <span class="msg-preencha">Preencha todos os campos abaixo para que um especialista entre em contato com você.</span>
            <p>
                <label for="nome1">Nome:</label>
                <input type="text" name="nome1" id="nome1" value="{{ old('nome1') }}" placeholder="Nome" class="floatlabel" />
            </p>
            <p>
                <label for="email1">E-mail:</label>
                <input type="text" name="email1" id="email1" value="{{ old('email1') }}" placeholder="Email" class="floatlabel" />
            </p>
            <p class="m2">
                <label for="telefone1">Telefone:</label>
                <input type="text" name="telefone1" id="telefone1" value="{{ old('telefone1') }}" placeholder="(DDD) Telefone" class="floatlabel telefone" />
            </p>
            <p  class="m2">
                <label for="assunto1">Assunto:</label>
                <input type="text" name="assunto1" id="assunto1" value="{{ old('assunto1') }}" placeholder="Assunto" class="floatlabel" />
            </p>
            <p>
                <select name="conheceu1" id="conheceu1">
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
                <div class="g-recaptcha" data-sitekey="{{ env('RECAPTCHA_SITE_KEY') }}"></div>
            </p>
            <p>
                <label for="info1">Informações:</label>
                <textarea name="info1" id="info1" cols="20" rows="3" placeholder="Informações extras">{{ old('info1') }}</textarea>
                <span class="bt-enviar">
                    <i class="icon-send"></i>Enviar
                    <input type="submit" name="enviar1" id="enviar1" value="">
                </span>
            </p>
        </div>
    </form>
</div>
</div>
</header>
@yield('content')
<footer id="footerBlock">
<div class="rodape-21">
    <div class="col1-rod">
        <b>Informações de Contato</b>
        <ul>
            <li>
                <span>Telefones</span>
                <a class="tel0" href="tel:071992441526" rel="noreferrer" title="Ligue para nós">{{ env('TELEFONE') }}</a>
            <li>
                <span>Whatsapp</span>
                <a class="whats-global" href="https://api.whatsapp.com/send?phone=55{{ setUri2(env('WHATSAPP')) }}&text=Olá eu estou no site da LMTEC AUTOMAÇÃO e gostaria de saber mais informações sobre os serviços prestados" target="_blank" rel="noreferrer" title="Contato via Whatsapp">{{ env('WHATSAPP') }}</a>
            </li>
            <li>
                <span>Endereço</span>
                {{ env('ENDERECO') }}
            </li>
            <li>
                <span>E-mail</span>
                <a href="mailto:{{ env('EMAIL') }}" rel="noreferrer" target="_blank" title="Enviar e-mail">{{ env('EMAIL') }}</a>
            </li>
        </ul>
        <div class="redes">
            <a href="{{ env('FACEBOOK') }}" target="_blank" title="Siga-nos: {{ env('FACEBOOK') }}" rel="noreferrer"><i class="icon-facebook"></i></a>
            <a href="{{ env('INSTAGRAM') }}" target="_blank" title="Siga-nos: {{ env('INSTAGRAM') }}" rel="noreferrer"><i class="icon-instagram-02"></i></a>
        </div>
    </div>
    <div class="col2-rod">
        <h3>Sobre Nós</h3>
        <p style="text-align: justify;">A LMTEC Automação é uma empresa dedicada e especializada no setor elétrico e na segurança contra incêndio e pânico. Com uma sólida experiência no mercado, nossa missão é proporcionar soluções de excelência aos nossos clientes, garantindo que suas empresas operem de maneira segura, eficiente e em total conformidade com as leis e normas vigentes relacionadas a sistemas elétricos e equipamentos de incêndio.</p>
    <div class="cb"></div>
        <a href="{{ route('site.quem.somos') }}" title="Continuar lendo sobre nós">Continuar lendo...</a>
    </div>
    <div class="col3-rod form-rodape">
        <b>Contato Rápido</b>
        <a title="Contato Rápido" href="javascript:void(0);" id="jumpForm7"></a>
        <form name="phpwcmsForm7" id="phpwcmsForm7" action="{{ route('contato.store') }}" method="post">
            @csrf
            <!--[if lt IE 10]>
            <style type="text/css">
            .formulario p > label{ display:block}
            </style>
            <![endif]-->
            <div class="formulario">
                <p>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" value="" placeholder="Nome" class="floatlabel" />
                </p>
                <p>
                    <label for="email">E-mail:</label>
                    <input type="text" name="email" id="email" value="" placeholder="Email" class="floatlabel" />
                </p>
                <p>
                    <label for="telefone">Telefone:</label>
                    <input type="text" name="telefone" id="telefone" value="" placeholder="(DDD) Telefone" class="floatlabel" />
                </p>
                <p>
                    <label for="info">Informações:</label>
                    <textarea name="info" id="info" cols="20" rows="3" placeholder="Informações adicionais"></textarea>
                </p>
                <p class="botao-form-fast">
                    <input type="submit" name="enviar" id="enviar" value="Enviar" />
                </p>
            </div>
        </form>
        <!--<div class="copyright">
            <span>
                &copy; {{ date('Y') }} - {{ env('APP_EMPRESA') }}
                <a href="http://www.lopaktecnologia.com.br" target="_blank" title="Lopak Tecnologia - Criação de sites, otimização de sites, links patrocinados" rel="noopener"><img src="https://lopakdesigner.com/uploads/logo-branca.png"></a>
            </span>
        </div>-->
    </div>
</div>
</footer>
<input name="cookieData" type="hidden" data-cookie-customDialogSelector="null" data-cookie-colorText="#424a4d" data-cookie-colorBg="rgba(234, 239, 241, 0.99)" data-cookie-textButton="Aceitar e Fechar" data-cookie-colorButton="" data-cookie-colorLink="#424a4d" data-cookie-underlineLink="true" data-cookie-text="Este site utiliza cookies e outras tecnologias semelhantes para melhorar a sua experiência de navegação, ao continuar navegando você concorda com nossa Política de Privacidade.">	<!--[if lt IE 9]><script src="{{ url('site') }}/template/lib/jquery/jquery-1.11.1.min.js"></script><![endif]-->
	<!--[if gte IE 9]><!--><script src="{{ url('site') }}/template/lib/jquery/jquery-2.1.1.min.js"></script><!--<![endif]-->
	<script src="{{ url('site') }}/Scripts/whats-v2.js"></script>
	<script src="{{ url('site') }}/Scripts/jquery.validate.js"></script>
	<script>
    $().ready(function () {
        $("#phpwcmsForm5").validate({
            rules: {
                nome1: "required",
                email1: { required: true, email: true },
                telefone1: "required"
            },
            messages: {
                nome1: "",
                email1: { required: "", email: "" },
                telefone1: ""
            }
        });

        $('select option:nth-child(1)').val('');
    });
</script>
	<script src="{{ url('site') }}/Scripts/jquery.totop.js"></script>
	<script>
$(window).scroll(function() {

    let scroll = $(window).scrollTop();

    if(scroll > 30){
        $('#headerBlock').addClass('topo-fixo');
        $('.pg-interna #mainBlock').addClass('margin-t');
    }
    else{
        $('#headerBlock').removeClass('topo-fixo');
        $('.pg-interna #mainBlock').removeClass('margin-t');
    }
});
</script>
	<script src="{{ url('site') }}/Scripts/remodal.js"></script>
	<script>
$().ready(function(e) {

    var camposerv = $('.remodal').find('#servico1');
    var titleModal = $('.remodal').find('.tit-modal');

    $('.abre-modal').on('click', function(){

        var servico = $(this).attr('data-title');
        console.log(servico);
        $(camposerv).val(servico);
        $(titleModal).html(servico);

    });

    if(window.location.href.indexOf('#jumpForm5')>-1){
        $('.remodal .tit-modal').hide();
        $('a[data-remodal-target="jumpForm5"]').click();
    }

});
</script>
	<script src="{{ url('site') }}/Scripts/jquery.bxslider.js"></script>
	<script>
        $(document).ready(function(){
            $('.slider-banner').bxSlider({
                mode:"fade",
                controls:true,
                pager:false,
                responsive:true,
                adaptiveHeight:true,
                nextText:"",
                prevText:"",
                auto:true,
                pause:8000,
                touchEnabled : (navigator.maxTouchPoints > 0),
                preventDefaultSwipeY: false
            });
        });
    </script>
	<script src="{{ url('site') }}/Scripts/owl.carousel.min.js"></script>
	<script>
    $(document).ready(function() {
        $('.box-slide').owlCarousel({
            margin:35,
            autoplay:true,
            autoplayTimeout:2000,
            loop:false,
            rewind:true,
            lazyLoad:true,
            dots:false,
            nav:true,
            mouseDrag:false,
            autoplayHoverPause:true,
            responsive: {
                0: {
                    items:2,
                    nav:false,
                    margin:10
                },
                481: {
                    items: 3,
                    nav:false,
                    margin:20
                },
                769: {
                    items: 4,
                    nav:false,
                    margin:30
                },
                1024: {
                    items: 5,
                    margin:10
                },
                1281:{
                    items: 6,
                    margin:40
                }
            }
        })
    });
</script>
	<script>

$.setasAbas = function (){

    var largura = 0;

    $( "#abas li" ).each(function( index ) {
    largura += $( this ).width();
    });

    if( largura >  $( "#abas" ).width())
    $('.conteudo-vertical2').addClass('showSetas');

}

$.abasSimples = function (){

    var abas      = 'ul#abas';
    var conteudos = 'ul#conteudos';
    var hash      = window.location.hash;

    $(conteudos+'> li').each(function(){
        var div      = $(this),
            content1 = div.find('img:first'),
            content2 = div.find('img:first').remove()
            content2 = div.html();
        if(content1.length > 0){
            div.html('<figure></figure><div class="text-tabs">'+content2+'</div>')
            div.find('figure').append(content1)
        }
    });

    if(hash){

        var aba      = $(abas).find('a[href="{{ url('site') }}/'+hash+'"]').parents('li'),
            id       = hash.replace('#',''),
            conteudo = $(conteudos).find('li[id="'+id+'"]');

        $(aba).addClass('selected');

        if($(hash).find('.text-tabs').length){
            $(hash).find('.text-tabs').prepend('<h3 class="tituloTabs">'+$('a[href="{{ url('site') }}/'+hash+'"]').text()+'</h3>');
        } else {
            $(hash).prepend('<h3 class="tituloTabs">'+$('a[href="{{ url('site') }}/'+hash+'"]').text()+'</h3>');
        }
        $(conteudo).show();

        $('html, body').animate({ scrollTop: $('.conteudo-vertical2').offset().top - 150 }, 'slow');

    }  else {

        $(abas + '> li:first-child').addClass('selected');
        $(conteudos + '> li:first-child').show();

        if($(conteudos + '> li:first-child').find('.text-tabs').length){
            $(conteudos + '> li:first-child').find('.text-tabs').prepend('<h3 class="tituloTabs">'+$(abas + '> li:first-child a').text()+'</h3>');
        } else {
            $(conteudos + '> li:first-child').prepend('<h3 class="tituloTabs">'+$(abas + '> li:first-child a').text()+'</h3>');
        }

    }

    $(abas + ' a').click(function (){

        var id     = $(this).attr('href'),
            url    = window.location.href.replace(window.location.hash,''),
            titulo = $(this).text();

        $('.tituloTabs').remove();
        $(abas + ' li').removeAttr('class');
        $(this).parents('li').addClass('selected');
        $(conteudos + '> li').hide();

        if($(id).find('img:first').length){
            var img = $(id).find('.text-tabs');
            $(img).prepend('<h3 class="tituloTabs">'+titulo+'</h3>');
        } else {
            $(id).prepend('<h3 class="tituloTabs">'+titulo+'</h3>');
        }

        $(id).show();
        history.pushState(null, null, url+$(this).attr('href'));
        $('html, body').animate({
            scrollTop: $('.conteudo-vertical2').offset().top-250
        }, 'slow');
        return false;

    });

};

$(document).ready(function () {
    $.abasSimples();

    // -- Script Botões Tabs
    $('.tabs-next').click(function() {
        event.preventDefault();
        $('#abas').animate({
            scrollLeft: "+=210px"
        }, 300);
    });

    $('.tabs-prev').click(function() {
        event.preventDefault();
        $('#abas').animate({
            scrollLeft: "-=210px"
        }, 300);
    });
    // -- Fim Script Botões Tabs

    $.setasAbas();

});
</script>
	<script src="{{ url('site') }}/Scripts/jquery.accordion.js"></script>
	<script>
    $(document).ready(function() {
        $('.clientes-02-lista').owlCarousel({
            margin:35,
            autoplay:true,
            autoplayTimeout:2000,
            loop:false,
            rewind:true,
            lazyLoad:true,
            dots:false,
            nav:true,
            mouseDrag:false,
            autoplayHoverPause:true,
            responsive: {
                0: {
                    items:2,
                    // nav:false,
                    margin:10
                },
                481: {
                    items: 3,
                    // nav:false,
                    margin:20
                },
                769: {
                    items: 4,
                    // nav:true,
                    margin:30
                },
                1024: {
                    items: 5,
                }
            }
        })
    });
</script>
	<script>
$(document).ready(function () {
    $('#form_route_footer').submit(function () {
        var origem = $('#route_from_footer').val();
        window.open('https://www.google.com.br/maps/dir/' + origem + '/{{ env('ENDERECO') }} ', '_blank');
        return false;
    });
});
</script>
	<script>
    $().ready(function() {
        $("#phpwcmsForm7").validate({
            rules:{
                nome: "required",
                email: {required: true, email: true},
                telefone: "required"
            },
            messages:{
                nome: "",
                email: {required: "", email: ""},
                telefone: ""
            }
        });
    });
    </script>
	<script src="{{ url('site') }}/Scripts/global-scripts.js"></script>
	<script>
function systemMsg(s,e){var t=Math.floor(1e8*Math.random()+1e7),i=1===e?"msg-sucess":"msg-error",a=1===e?"icon-check02":"icon-close",n=$(".message-wrapper").length>0?0:500;0===$(".message-wrapper").length&&$("html").append('<div class="message-wrapper"></div>'),setTimeout(function(){$(".message-wrapper").prepend('<div class="msg'+t+" sistem-message "+i+'" title="Esconder mensagem"><i class="'+a+'"></i><span>'+s+"</span></div>")},0+n),setTimeout(function(){$(".msg"+t).css({opacity:1,transition:"opacity 1s"}).slideDown(400)},50+n),setTimeout(function(){$(".msg"+t).css({opacity:0,transition:"opacity 1s"}).slideUp(400)},6500+n),setTimeout(function(){$(".msg"+t).remove()},7e3+n)}

// abre e fecha o menu e fone responsivo
$().ready(function(){$(".menu-fixo").scrollToFixed(),$(".nav").slideAndSwipe(),$(".botao-menu").click(function(){$(this).toggleClass("on");$("#mainBlock").toggleClass("blurcont")}),$(".abrir-fone").click(function(){$("div.abrir-fone, div.fone-dropdown").toggleClass("on")}),$(".ico-fone-responsivo").click(function(){$("div.info-lateral, i.ico-fone-responsivo").toggleClass("on")})});

// Voltar ao topo | Ancora animada | Whatapp Web/App | Horario Whats
$(document).ready(function(){$("a.mouse-home").click(function(t){t.preventDefault(),$("html, body").animate({scrollTop:$($(this).attr("href")).offset().top},300)}),$(".whats-global").on("click",function(t){t.preventDefault(),link=$(this).attr("href"),$(window).width()>1023&&(link=link.replace("api","web")),window.open(link,"Contato via WhatsApp").focus()})});

// Service Worker
"serviceWorker"in navigator&&window.addEventListener("load",()=>{navigator.serviceWorker.register("/service-worker.js")});
</script>
	<script src="{{ url('site') }}/Scripts/cookie-alert.js"></script>


    <script src="{{ url('admin') }}/assets/js/scripts.bundle.js"></script>

    <script>
        $(document).ready(function(){
            @if (session('success'))
                alert('{{ session('success') }}');
            @endif
        });

        $(document).ready(function() {
            $(".telefone").inputmask({
                mask: ["(99) 9999-9999", "(99) 99999-9999"],
                keepStatic: true
            });
        });

    </script>
</body>
</html>
