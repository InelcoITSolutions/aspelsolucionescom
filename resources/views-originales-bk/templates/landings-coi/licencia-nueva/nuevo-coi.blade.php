@extends('templates.landings-coi.principal')
@section('title','Promocion Aspel COI 8.0')
@push('css-promocion-nuevo-noi')

<link href="/css/landings-COI/promocion-nuevo-noi.css" rel="stylesheet" type="text/css"/>
<link href="/css/landings-COI/form-nuevo-noi.css" rel="stylesheet"/>

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
@include('partials.header-landings')

<section class="secciones-noi" id="inicio-aspel-noi">
    <div class="container">
        <div align="right" class="logo">
            <a href="{{url('coi-nuevo')}}">
                <img alt="Logo Aspel Soluciones" class="img-responsive" src="/img/logo-aspelsoluciones-blanco.png" width="220"/>
            </a>
        </div>

        <div class="row frase-de-impacto wow fadeInDown" data-wow-delay="0.5s">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
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
            {{--la siguiente imagen va a un lado de las palabras anteriores--}}
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img-left">
                <img alt="COI 8.0" class="img-responsive" src="/img/img-landings-coi/aspelsoluciones-coi80.png" width="400">
                </img>
            </div>
        </div>
        
        <div class="row">
            <h3 class="slogan wow fadeInDown" data-wow-delay="0.5s">
                El Sistema de administración contable mas usado del
                <br>
                    del pais.
                </br>
            </h3>
        </div>

        <div class="row wow fadeInDown" data-wow-delay="0.5s">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 izquierda">
                <img alt="Actualizacion COI" class="img-responsive" src="/img/img-landings/aspelsoluciones_noi8_promoactualizacion_14noviembre.png" width="400">
                </img>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 boton-espacio">
                <div align="right" class="boton wow fadeInDown" data-wow-delay="0.5s">
                    <a class="button-adquierelo large radius goContrata ancla2" href="#adquirir">
                        Adquierelo ahora
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="secciones-noi" id="lo-nuevo">

    <div class="container">
        <h3 class="text-center titulo-uno wow bounceInLeft" data-wow-delay="0.5s">
            El brazo derecho del Contador
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
                            Agrega hasta 999 empresas
                        </h3>
                        <p>
                            Crecee el numero de empresas de 99 a 999
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
                            Más funciones con ASPEL-coi 8.0
                        </h3>

                        <ul>
                                <li> Autenticación con <strong>Ticket empresarial</strong>  
                                </li>

                                <li> Descargar los viajes cerradps del periodo.   
                                </li>                      
                        </ul>
                        
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
                            Perfiles de usuario
                        </h3>
                        <p>
                            Nuevas interfaces además personalización
                            en vistas tipo Lista y Tarjetas,se podra
                            agregar la fotografía del usuario.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div align="center" class="imagen">
                        <img alt="logo noi" class="img-responsive" height="250" src="/img/aspel-COI.png" width="250">
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
                            Mis espacios
                        </h3>
                        <p>
                            Nuevas pestañas para (carpetas e historial). Ya no sera necesario el 
                            correo ni contraseña para crearel espacio.
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
                            Reporte de balance general
                        </h3>
                        <p>
                            Balance general comparativo contra el periodo anterior
                            Balance general comparativo contra 
                            presupuesto
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
                            Personalizar reporte
                        </h3>
                        <p>
                            Catalogo de cuentas balanza de
                            comprobación
                            Balance general entre otras
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
                    COI 8.0
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
                    Aspel COI
                </h2>
                <p>
                    Cumple con los requerimientos de la Contabilidad Electrónica de manera fácil, eficiente y oportuna de acuerdo con las disposiciones fiscales vigentes
                </p>
            </div>
            <center>
                <div class="col-md-4 img-izquierda wow fadeInRight" data-wow-delay="0.5s">
                    <img alt="caracteristicas noi" class="img-responsive" src="/img/img-landings-coi/IIS-collage_coi.png" width="250">
                    </img>
                </div>
            </center>
        </div>
        <div class="row">
            <center>
                <div class="col-md-4 img-derecha wow fadeInLeft" data-wow-delay="0.5s">
                    <img alt="caracteristicas Coi" class="img-responsive img-center" src="/img/img-landings-coi/aspel-COI.png" width="200">
                    </img>
                </div>
            </center>
            <div class="col-md-8 text-right wow fadeInRight" data-wow-delay="0.5s">
                <h2>
                    Nuevo y poderoso COI 8.0
                </h2>
                <p>
                    Además, proporciona diversos reportes, documentos y gráficas que permiten evaluar el estado financiero de la organización. Genera oportunamente las diferentes declaraciones fiscales como las correspondientes a IVA, ISR y DIOT. Mantiene interfaz con los Sistemas Aspel y hojas de cálculo.
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
                    <img alt=" " class="img-responsive" src="/img/img-landings-coi/nuevo-coi/inelco-ticket-empresarial.png"/>
                </div>
                <div class="col-md-6 news-text texto-arriba wow fadeInRight" data-wow-delay="0.5s">
                    <h3>
                        Ticket Empresarial
                    </h3>
                    <p>
                        Es una solución de la empresa "Edenred". A partir de una tarjeta corporativa, se realiza el control y administración interna de la gestión de viajes, representación, caja chica y gastos corporativos, facilitando su comprobación y sin la necesidad de usar efectivo.
                    </p>
                </div>
                <div class="clearfix">
                </div>
            </div>
            <div class="news-grid">
                <div class="col-md-6 news-text two wow fadeInLeft" data-wow-delay="0.5s">
                    <h3>
                        Funciones con Aspel-COI 8.0
                    </h3>
                    <ul>
                        <li>
                            Autenticarse con <strong>Ticket empresarial</strong>
                        </li>
                        <li>
                            Descargar los viajes cerrados del periodo
                        </li>
                        <li>
                            Descargar archivos adjuntos de viajes cerrados
                        </li>
                        <li>
                            Contabilizar viajes cerrados por medio de póliza dinámica
                        </li>
                    </ul>
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
                        Perfiles de usuario
                    </h3>

                    <ul>
                        <li>
                            Nueva interfaz
                        </li>
                        <li>
                            Personalización de la vista en tipo <strong>lista</strong> y <strong>tarjetas</strong>
                        </li>
                        <li>
                            Nueva búsqueda
                        </li>
                        <li>
                            Nueva pestaña <strong>Empresas</strong>, que facilita la consulta de las empresas que accede al usuario
                        </li>
                        <li>
                            Se podrá agregar la fotografía del usuario
                        </li>
                    </ul>

                </div>
                <div class="clearfix">
                </div>
            </div>
            <div class="news-grid">
                <div class="col-md-6 news-text two wow fadeInLeft" data-wow-delay="0.5s">
                    <h3>
                        Mis espacios
                    </h3>
                    <ul>
                        <li>
                            Nuevas pestañas para (carpetas, pendientes por enviar e historial)
                        </li>

                        <li>
                            Se podrá agregar varios archivos a la carpeta seleccionada
                        </li>

                        <li>
                            Ya no es necesario el correo del administrador ni la contraseña al crear el espacio
                        </li>
                        
                    </ul>
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
                        Reporte de balance general
                    </h3>
                    <ul>
                        <li>
                            Balance general comparativo contra el periodo anterior
                        </li>
                        <li>
                            Balance general comparativo contra presupuesto
                        </li>
                        <li>
                            Balance general comparativo por ejercicio
                        </li>
                    </ul>
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


{{--
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
--}}




<section class="secciones-noi" id="promociones-noi">
    <div class="container">
        {{--<div class="priceing-table-main">
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
        </div>--}}
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
