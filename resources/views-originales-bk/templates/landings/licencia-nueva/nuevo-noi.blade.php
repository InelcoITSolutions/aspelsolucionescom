@extends('templates.landings.principal')
@section('title','Promocion Aspel NOI 8.0')
@push('css-promocion-nuevo-noi')

<link href="/css/landings/promocion-nuevo-noi.css" rel="stylesheet" type="text/css"/>
<link href="/css/landings/form-nuevo-noi.css" rel="stylesheet"/>

@endpush
@section('content')
@if(Session::has('mensaje'))
<div class="alert alert-success">
    <div class="container-fluid">
        <div class="alert-icon">
            <i class="icon-check ico-notif">
            </i>
            <b>
                {{ Session::get('mensaje') }}
            </b>
            <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                <span aria-hidden="true">
                    <i class="icon-cross2"> 
                    </i>
                </span>
            </button>
        </div>
    </div>
</div>
@endif
<section class="secciones-noi" id="inicio-aspel-noi">
    <div class="container">
        <div align="right" class="logo">
            <a href="{{url('noi-nuevo')}}">
                <img alt="Logo Aspel Soluciones" class="img-responsive" src="/img/logo-aspelsoluciones-blanco.png" width="220"/>
            </a>
        </div>
        <div class="row frase-de-impacto wow fadeInDown" data-wow-delay="0.5s">
            <div class="col-md-6">
                <h1 class="frase">
                    <i>
                        Descubre el
                        <span>
                            nuevo
                        </span>
                        <br>
                            y
                            <span class="poderoso">
                                poderoso
                            </span>
                        </br>
                    </i>
                </h1>
            </div>
            <div class="col-md-6 img-left">
                <img alt="noi 8.0" class="img-responsive" src="/img/img-landings/nuevo_noi8_.png" width="400">
                </img>
            </div>
        </div>
        <div class="row">
            <h3 class="slogan wow fadeInDown" data-wow-delay="0.5s">
                El Sistema más usado en la administración de la nómina
                <br>
                    y el capital humano en México evoluciona
                </br>
            </h3>
        </div>
        <div class="row wow fadeInDown" data-wow-delay="0.5s">
            <div class="col-md-6 izquierda">
                <div class="degradado-dos">
                    <h3>
                        ¡Oferta exclusiva de pre-venta!
                    </h3>
                    <p>
                        Te invitamos de manera gratuita a nuestra presentación de NOI 8
                    </p>
                </div>
            </div>
            <div class="col-md-6 boton-espacio">
                <div align="right" class="boton wow fadeInDown" data-wow-delay="0.5s">
                    <a class="button-adquierelo large radius goContrata ancla2" href="#adquirir">
                        Adquiérelo ahora
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="secciones-noi" id="lo-nuevo">
    <div class="container">
        <h3 class="text-center titulo-uno wow bounceInLeft" data-wow-delay="0.5s">
            El Sistema líder que controla la nómina
        </h3>
        <h1 class="titulo-dos texto-degradado wow bounceInRight" data-wow-delay="0.5s">
            EVOLUCIONA
        </h1>
        <div class="logo-producto">
            <center>
                <img alt="logo noi" class="img-responsive wow fadeInDown" data-wow-delay="0.5s" src="/img/aspel-NOI.png">
                </img>
            </center>
        </div>
        <div class="fondo">
            <div class="row fila1">
                <div class="col-md-4 text-right wow bounceInLeft" data-wow-delay="0.5s">
                    <div class="icon-container default-bg circle">
                        <i class="fa fa-check">
                        </i>
                    </div>
                    <div class="body">
                        <h3>
                            Cumple con las nuevas obligaciones fiscales
                        </h3>
                        <p>
                            Genera tus CFDI de acuerdo con las nuevas disposiciones que la autoridad fiscal está por publicar
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div align="center" class="imagen-uno">
                        <i aria-hidden="true" class="fa fa-cog fa-spin fa-3x fa-fw">
                        </i>
                        <span class="sr-only">
                            Saving. Hang tight!
                        </span>
                    </div>
                </div>
                <div class="col-md-4 text-left wow bounceInRight" data-wow-delay="0.5s">
                    <div class="icon-container default-bg circle">
                        <i class="fa fa-check">
                        </i>
                    </div>
                    <div class="body-dos">
                        <h3>
                            Menú intuitivo
                        </h3>
                        <p>
                            Con el nuevo menú podrás integrar todas las funciones que requieras en una sola sección
                        </p>
                    </div>
                </div>
            </div>
            <div class="row fila2">
                <div class="col-md-4 text-right wow bounceInLeft" data-wow-delay="0.5s">
                    <div class="icon-container default-bg circle">
                        <i class="fa fa-check">
                        </i>
                    </div>
                    <div class="body">
                        <h3>
                            Nuevo diseño
                        </h3>
                        <p>
                            Personaliza tu experiencia con los nuevos skins, además de las mejoras en cada menú e iconos
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div align="center" class="imagen">
                        <img alt="logo noi" class="img-responsive" height="250" src="/img/aspel-NOI.png" width="250">
                        </img>
                    </div>
                    <div align="center" class="imagen-dos">
                        <i aria-hidden="true" class="fa fa-cog fa-spin fa-3x fa-fw">
                        </i>
                        <span class="sr-only">
                            Saving. Hang tight!
                        </span>
                    </div>
                </div>
                <div class="col-md-4 text-left wow bounceInRight" data-wow-delay="0.5s">
                    <div class="icon-container default-bg circle">
                        <i class="fa fa-check">
                        </i>
                    </div>
                    <div class="body-dos">
                        <h3>
                            Consultas
                        </h3>
                        <p>
                            La consulta de percepciones y deducciones es más poderosa, al incluir diferentes gráficas y tipos de vistas
                        </p>
                    </div>
                </div>
            </div>
            <div class="row fila3">
                <div class="col-md-4 text-right wow bounceInLeft" data-wow-delay="0.5s">
                    <div class="icon-container default-bg circle">
                        <i class="fa fa-check">
                        </i>
                    </div>
                    <div class="body">
                        <h3>
                            Barra de búsqueda
                        </h3>
                        <p>
                            Prueba la nueva barra de búsqueda que facilitará tu trabajo
                        </p>
                    </div>
                </div>
                <div align="center" class="imagen-tres">
                    <i aria-hidden="true" class="fa fa-cog fa-spin fa-3x fa-fw">
                    </i>
                    <span class="sr-only">
                        Saving. Hang tight!
                    </span>
                </div>
                <div class="col-md-4">
                    <div align="center" class="imagen-cuatro">
                        <i aria-hidden="true" class="fa fa-cog fa-spin fa-3x fa-fw">
                        </i>
                        <span class="sr-only">
                            Saving. Hang tight!
                        </span>
                    </div>
                </div>
                <div class="col-md-4 text-left wow bounceInRight" data-wow-delay="0.5s">
                    <div class="icon-container default-bg circle">
                        <i class="fa fa-check">
                        </i>
                    </div>
                    <div class="body-dos">
                        <h3>
                            Administrador de períodos
                        </h3>
                        <p>
                            Consulta si existen CFDI pendientes de timbrado
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="secciones-noi" id="barra-solida">
    <div class="fondo-gray">
        <div class="container">
            <h2 class="text-center wow fadeInDown" data-wow-delay="0.5s">
                Ahora
                <b>
                    NOI 8.0
                </b>
                te ofrece una novedosa plataforma tecnológica que
                <b>
                    mejora tu experiencia de uso
                </b>
            </h2>
        </div>
    </div>
</section>
<section class="secciones-noi" id="caracteristicas">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-left texto-abajo wow fadeInLeft" data-wow-delay="0.5s">
                <h2>
                    Aspel NOI
                </h2>
                <p>
                    Automatiza el control de los aspectos más importantes de la nómina, su fácil manejo y versatilidad ofrece un cálculo exacto de las percepciones y deducciones de los trabajadores atendiendo los requerimientos específicos de la empresa
                </p>
            </div>
            <center>
                <div class="col-md-4 img-izquierda wow fadeInRight" data-wow-delay="0.5s">
                    <img alt="caracteristicas noi" class="img-responsive" src="/img/img-landings/computadora-noi.png" width="250">
                    </img>
                </div>
            </center>
        </div>
        <div class="row">
            <center>
                <div class="col-md-4 img-derecha wow fadeInLeft" data-wow-delay="0.5s">
                    <img alt="caracteristicas noi" class="img-responsive img-center" src="/img/img-landings/nuevo-noi-ocho.png" width="200">
                    </img>
                </div>
            </center>
            <div class="col-md-8 text-right wow fadeInRight" data-wow-delay="0.5s">
                <h2>
                    Nuevo y poderoso NOI 8.0
                </h2>
                <p>
                    La nueva versión integra nuevas funcionalidades para tu beneficio. Ahora te ofrece una plataforma tecnólogica para mejorar tu experiencia de uso e incluye la nueva versión 1.2 del complemento de nómina, obligatorio para los CFDI en 2017.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="secciones-noi" id="news-carateristicas">
    <div class="container">
        <h1 class="funciones-nuevas wow fadeInDown" data-wow-delay="0.5s">
            Ahora con nuevas funcionalidades
        </h1>
        <div class="row">
            <div class="news-grid w3l-agile">
                <div class="col-md-6 news-img img-abajo wow fadeInLeft" data-wow-delay="0.5s">
                    <img alt=" " class="img-responsive" src="/img/img-landings/nuevo-noi-cancelacion-masiva.png"/>
                </div>
                <div class="col-md-6 news-text texto-arriba wow fadeInRight" data-wow-delay="0.5s">
                    <h3>
                        Cancelación masiva de CFDI's
                    </h3>
                    <p>
                        Cancela múltiples recibos con la útil herramienta de cancelación masiva.
                    </p>
                </div>
                <div class="clearfix">
                </div>
            </div>
            <div class="news-grid">
                <div class="col-md-6 news-text two wow fadeInLeft" data-wow-delay="0.5s">
                    <h3>
                        Nómina del trabajador
                    </h3>
                    <p>
                        Administrar tu nómina de manera más eficiente con el potente panel Nómina del trabajador.
                    </p>
                </div>
                <div class="col-md-6 news-img two wow fadeInRight" data-wow-delay="0.5s">
                    <img alt=" " class="img-responsive" src="/img/img-landings//nuevo-noi-nomina-del-trabajador.png"/>
                </div>
                <div class="clearfix">
                </div>
            </div>
            <div class="news-grid w3l-agile">
                <div class="col-md-6 news-img img-abajo wow fadeInLeft" data-wow-delay="0.5s">
                    <img alt=" " class="img-responsive" src="/img/img-landings/nuevo-noi-numero-de-empresas.png"/>
                </div>
                <div class="col-md-6 news-text texto-arriba2 wow fadeInRight" data-wow-delay="0.5s">
                    <h3>
                        Número de empresa
                    </h3>
                    <p>
                        Exporta tu nómina a otro número de empresa.
                    </p>
                </div>
                <div class="clearfix">
                </div>
            </div>
            <div class="news-grid">
                <div class="col-md-6 news-text two wow fadeInLeft" data-wow-delay="0.5s">
                    <h3>
                        Gráficas
                    </h3>
                    <p>
                        Consulta a través de gráficas predefinidas la información clave que requieres para el cálculo de tu nómina.
                    </p>
                </div>
                <div class="col-md-6 news-img two wow fadeInRight" data-wow-delay="0.5s">
                    <img alt=" " class="img-responsive" src="/img/img-landings//nuevo-noi-graficas.png"/>
                </div>
                <div class="clearfix">
                </div>
            </div>
            <div class="news-grid w3l-agile">
                <div class="col-md-6 news-img img-abajo wow fadeInLeft" data-wow-delay="0.5s">
                    <img alt=" " class="img-responsive" src="/img/img-landings/nuevo-noi-administrador-de-periodos.png"/>
                </div>
                <div class="col-md-6 news-text texto-arriba wow fadeInRight" data-wow-delay="0.5s">
                    <h3>
                        Administrador de periodos
                    </h3>
                    <p>
                        Consulta si existen CFDI´s pendientes de timbrar.
                    </p>
                </div>
                <div class="clearfix">
                </div>
            </div>
            <div class="frase-de-cierre">
                <h1>
                    ¡Asiste a nuestras presentaciones y conoce más detalles!
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="secciones-noi" id="adquirir">
   
    <div class="container">
        <div class="row titulo wow bounceIn" data-wow-delay="0.5s">
            <h2 class="text-center">
                ¿Aún no tienes Aspel NOI?
            </h2>
            <h1 class="text-center">
                ¡Adquiérelo ahora!
            </h1>
        </div>

        <div class="row">
            <div class="col-md-6 form-promocion form-abajo">
                <h4 class="la-promo">
                    ¡Aprovecha la promoción hoy mismo!
                </h4>
                
                @include('partials.form-licencia-nueva')
            </div>
            <div class="col-md-6 img-arriba wow bounceIn" data-wow-delay="0.5s">
                <img alt="Actualizacion NOI" class="img-responsive" src="/img/img-landings/aspelsoluciones_noi8_promo_nuevo_noi_14noviembre.png" width="600">
                </img>
            </div>
        </div>

        <div class="col-md-6">
        </div>
        
        <div class="col-md-6 nota wow fadeInDown" data-wow-delay="0.5s">
            <p>
                NOI 8.0 licencia nueva (1usuario/99empresas) $5,883* | Curso: NOI Básico $1,849*
                *Precios más IVA. Precios en Moneda Nacional MXP Vigencia: 14 de noviembre de 2016
            </p>
        </div>
        <div class="row">
            
        </div>
    </div>
   
</section>




// aqui ya contiene las referencias a la BD
<section class="secciones-noi" id="promociones-noi">
    <div class="container">
        <div class="priceing-table-main">
            @foreach($productos_nuevos as $productos_noi)
            <div class="col-md-4 price-grid">
                <div class="price-block agile">
                    <div class="price-gd-top pric-clr1">
                        <h4>
                            {{$productos_noi->tipo." ".$productos_noi->nombre_producto}}
                        </h4>
                        <h3>
                            ${{number_format($productos_noi->precio)}}
                        </h3>
                        <h5>
                            {{$productos_noi->nombre_producto}}
                        </h5>
                    </div>
                    <div class="incluye">
                        <h5>
                            Incluye:
                        </h5>
                        <ul>
                            <li>
                                {{$productos_noi->incluye1}}
                            </li>
                            <li>
                                {{$productos_noi->incluye2}}
                            </li>
                        </ul>
                    </div>
                    <div class="price-gd-bottom">
                        <div class="price-selet pric-sclr1">
                            <a href="{{route('añadir-pedido',$productos_noi->tipo)}}" id="comprar">
                                Comprar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="clearfix">
            </div>
        </div>
    </div>
</section>

@push('js-desplazamiento-animado')
{{--scripts para los efectos de ir de una seccion a otra--}}
<script type="text/javascript">
    $(document).ready(function(){
  // Add smooth scrolling to all links
  $(".ancla2").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 1800, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
});
</script>
@endpush
@stop
