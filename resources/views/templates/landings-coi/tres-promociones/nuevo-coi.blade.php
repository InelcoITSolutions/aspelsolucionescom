@extends('templates.landings-coi.principal')

@section('title','Promocion Aspel COI 8.0')

@push('css-promocion-nuevo-noi')

<link href="/css/landings-coi/landingNuevoCoi.css" rel="stylesheet" type="text/css"/>

<link href="/css/landings-coi/form-promocion.css" rel="stylesheet"/>
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
<script>
    $(document).ready(function() {
    var $total_usuarios=0;
    var href = $(this).data('href');

    $('.checkbox1').on('click', function(e) {

        var $val=parseInt($(this).attr("value"));
        if($(this).prop("checked")){
            $total_usuarios=$val+$total_usuarios;
            alert($total_usuarios);
        }else{
            $total_usuarios=$total_usuarios-$val;
            alert($total_usuarios);
        }

        window.location.href = href + "/" + total_usuarios;
        //var id = $(this).data('id');
        //var href = $(this).data('href');
        //var cantidad = $("#producto_" + id).val();
        //window.location.href = href + "/" + cantidad;
    });
});
</script>
@include('partials.header-landings')
@include('partials.registro-suscripcion')

<section class="secciones-noi" id="inicio-aspel-noi">
    <div class="container">
        <div align="left" class="face">
            <img alt="imagen-face" class="img-responsive" src="/img/img-landings/fondo-nuevo-noi-facebook.PNG" width="0"/>
        </div>
        <div align="right" class="logo">
            <a href="{{url('noi-nuevo')}}">
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
                                funcional
                            </span>
                        </br>
                    </i>
                </h1>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img-left">
                <img alt="COI 8.0" class="img-responsive" src="/img/img-landings-coi/aspelsoluciones-coi80.png" width="400">
                </img>
            </div>
        </div>
        <div class="row">
            <h3 class="slogan wow fadeInDown" data-wow-delay="0.5s">
                El Sistema de administración contable, financiera 
                <br>
                y contabilidad electrónica mas usado del país.
                </br>
            </h3>
        </div>
        <div class="row wow fadeInDown" data-wow-delay="0.5s">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 izquierda">
                <img alt="Actualizacion NOI" class="img-responsive" src="/img/img-landings-coi/promo_nuevo_coi.png" width="400">
                </img>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 boton-espacio">
                <div align="right" class="boton wow fadeInDown" data-wow-delay="0.5s">
                    <a class="button-adquierelo large radius goContrata ancla2" href="#promociones-noi">
                        ¡Adquierelo ahora!
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="secciones-noi" id="lo-nuevo">
    <div class="container">
        <h3 class="text-center titulo-uno wow bounceInLeft" data-wow-delay="0.5s">
            ¡Aspel-COI el brazo derecho del contador!
        </h3>
        <h1 class="titulo-dos texto-degradado wow bounceInRight" data-wow-delay="0.5s">
            EVOLUCIONA
        </h1>
        <div class="logo-producto">
            <center>
                <img alt="logo noi" class="img-responsive wow fadeInDown" data-wow-delay="0.5s" src="/img/aspel-COI.png">
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
                            Crece el número de empresas 
                            <br>
                            de 99 a 999
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
                            Más funciones con Aspel-COI 8.0
                        </h3>
                        
                            <ul>
                                <li> Autenticación con <strong>Ticket empresarial</strong>  
                                </li>

                                <li> Descargar los viajes cerrados del período   
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
                            Nuevos perfiles de usuario
                        </h3>
                        <p>
                            Nuevas interfaces, además personalización
                            en vistas tipo lista y tarjetas y se podra
                            agregar la fotografía del usuario
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
                            Nuevas pestañas para (carpetas e historial). Ya no será necesario el 
                            correo ni contraseña para crear el espacio
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
                            Reporte de Balance General y comprativas
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
                            Personalizar reportes
                        </h3>
                            <ul>
                                <li> Catálogo de cuentas 
                                </li>

                                <li> Balance de comprobación 
                                </li>
                                <li> Diario general 
                                </li>                      
                            </ul>
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
                    <img alt="caracteristicas noi" class="img-responsive" src="/img/img-landings-coi/IIS-collage_coi.png" width="350">
                    </img>
                </div>
            </center>
        </div>
        <div class="row">
            <center>
                <div class="col-md-4 img-derecha wow fadeInLeft" data-wow-delay="0.5s">
                    <img alt="caracteristicas noi" class="img-responsive img-center" src="/img/img-landings-coi/aspel-COI.png" width="200">
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
            {{--<div align="right" class="boton wow fadeInDown dis-fis" data-wow-delay="0.5s">
                <a href="/descargas/Disposiciones-fiscales-para-la-nómina-digital-2017.pdf" target="_blank">
                    Disposiciones fiscales para la Nómina Digital 2017
                </a>
            </div>--}}
        </div>
        <div class="row">
            <div class="col-md-8 text-left texto-abajo wow fadeInLeft" data-wow-delay="0.5s">
                <h2>
                    ¡Aspel COI creece contigo!
                </h2>
                <p>
                    ¿Cada vez atiendes más clientes en tu despacho contable?
                    <br>
                    ¡No te preocupes! Ahora con Aspel COI 8 puedes dar de alta hasta 999 empresas en una sola licencia.
                </p>
            </div>
            <center>
                <div class="col-md-4 img-izquierda wow fadeInRight" data-wow-delay="0.5s">
                    <img alt="caracteristicas coi" class="img-responsive" src="/img/img-landings-coi/999-empresas.png" width="250">
                    </img>
                </div>
            </center>
        </div>

    </div>
    </section>


<section class="secciones-noi" id="news-carateristicas">
    <div class="container">
        <h1 class="funciones-nuevas wow fadeInDown" data-wow-delay="0.5s">
            Ahora con nuevas funcionalidades
        </h1><!--TITULO DE LAS NUEVAS FUNCIONALIDADES -->
        <div class="row">

            <div class="news-grid w3l-agile">
                <div class="col-md-6 img-abajo wow fadeInLeft" data-wow-delay="0.5s">
                    <br>
                    <img alt="aspelsoluciones-ticket-empresarial" class="img-responsive" src="/img/img-landings-coi/nuevas-funciones/aspelsoluciones-ticket.png" width="70%"/>

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
                        Nuevas Funciones con Aspel-COI 8.0
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
                    <img alt=" " class="img-responsive" src="/img/img-landings-coi/nuevas-funciones/aspelsoluciones-funciones-noi8.png"/>
                </div>
                <div class="clearfix">
                </div>
            </div>

            <div class="news-grid w3l-agile">

                <div class="col-md-6 news-img img-abajo wow fadeInLeft" data-wow-delay="0.5s">
                    <img alt=" nuevas funciones coi" class="img-responsive" src="/img/img-landings-coi/nuevas-funciones/aspelsoluciones-catalogo-usuarios.png"/>
                </div>
                <div class="col-md-6 news-text texto-arriba2 wow fadeInRight" data-wow-delay="0.5s">
                    <h3>
                        Catalogo de Perfiles de usuario
                    </h3>
                    <ul>
                        <li>
                            Nueva interfaz
                        </li>
                        <li>
                            Personalización de la vista en tipo lista y tarjetas
                        </li>
                        <li>
                            Nueva búsqueda
                        </li>
                        <li>
                            Nueva pestaña empresas, que facilita la consulta de las empresas que accede al usuario
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
                    <img alt=" " class="img-responsive" src="/img/img-landings-coi/nuevas-funciones/aspelsoluciones-mis-espacios.png"/>
                </div>
                <div class="clearfix">
                </div>
            </div>
            
            <div class="news-grid w3l-agile">
                <div class="col-md-6 news-img img-abajo wow fadeInLeft" data-wow-delay="0.5s">
                    <img alt=" " class="img-responsive" src="/img/img-landings-coi/nuevas-funciones/aspelsoluciones-balance-general.png"/>
                </div>
                <div class="col-md-6 news-text texto-arriba wow fadeInRight" data-wow-delay="0.5s">
                    <h3>
                        Reporte de Balance General
                    </h3>
                    <ul>
                        <li>
                            Balance General comparativo contra el periodo anterior
                        </li>
                        <li>
                            Balance General comparativo contra presupuesto
                        </li>
                        <li>
                            Balance General comparativo por ejercicio
                        </li>
                    </ul>
                </div>
                <div class="clearfix">
                </div>
            </div>

            <div class="news-grid">
                <div class="col-md-6 news-text two wow fadeInLeft" data-wow-delay="0.5s">
                    <h3>
                        Personalizar reportes
                    </h3>
                    <ul>
                        <li>
                            Catalogo de cuentas
                        </li>
                        <li>
                            Auxiliares
                        </li>
                        <li>
                            Estado resultados
                        </li>
                        <li>
                            Diario general
                        </li>
                        <li>
                            Libro mayor
                        </li>
                    </ul>
                    
                </div>
                <div class="col-md-6  two wow fadeInRight" data-wow-delay="0.5s">
                    <img alt=" " class="img-responsive" src="/img/img-landings-coi/nuevas-funciones/aspelsoluciones-personalizar-reporte.png" width="70%"/>
                </div>
                <div class="clearfix">
                </div>
            </div>
            <div class="news-grid w3l-agile">
                <div class="col-md-6  news-img img-abajo wow fadeInLeft" data-wow-delay="0.5s">
                    <img alt=" " class="img-responsive" src="/img/img-landings-coi/nuevas-funciones/aspelsoluciones-balanza-comprobacion.png" width="70%"/>
                </div>
                <div class="col-md-6 news-text texto-arriba wow fadeInRight" data-wow-delay="0.5s">
                    <h3>
                       Formatos para la balanza de comprobación 
                    </h3>
                    <ul>
                        <li>
                            Balanza de comprobación:  A través de espacios y sangrías se distingue el nivel de las cuentas contables.

                        </li>
                        <li>
                            Balanza de comprobación (Hoja horizontal): Letra más grande y espacios entre cada cuenta contable.

                        </li>
                        <li>
                            Balanza de comprobación (Fuente grande): Se mantiene la hoja vertical pero con fuente más grande.

                        </li>
                    </ul>
                </div>
                <div class="clearfix">
                </div>
            </div>
            
            <div class="news-grid">
                <div class="col-md-6 news-text two wow fadeInLeft" data-wow-delay="0.5s">
                    <h3>
                        Reporte de Estado de Resultados
                    </h3>
                    <ul>
                        <li>
                            Estado de resultados Comparativo contra periodo anterior.

                        </li>
                        <li>
                           Estado de resultados Comparativo contra presupuesto.

                        </li>
                        
                    </ul>
                    
                </div>
                <div class="col-md-6 two wow fadeInRight" data-wow-delay="0.5s">
                    <img alt=" " class="img-responsive" src="/img/img-landings-coi/nuevas-funciones/aspelsoluciones-reporte-estado.png" width="70%" />
                </div>
                <div class="clearfix">
                </div>
            </div>

        </div>
    </div>



        </div>
    </div>

</section>

<section class="secciones-noi" id="barra-solida">
    <div class="fondo-morado">
        <div class="container">
            <h2 class="text-center wow fadeInDown" data-wow-delay="0.5s">
                ¿Aún no tienes Aspel COI?
            </h2>
            {{--
            <h3 class="frase-gratis">
                Solicita una licencia y prueba toda su funcionalidad por 30 dias ¡gratis!
            </h3>
            --}}
            <div class="row">
                <div align="center" class="col-xs-6 col-sm-6 col-md-6">
                    <div class="boton wow fadeInDown" data-wow-delay="0.5s">
                        <a class="button-gratis large radius goContrata ancla2" data-target="#suscripcion" data-toggle="modal">
                            Solicitar licencia gratuita
                        </a>
                    </div>
                </div>
                <div align="center" class="col-xs-6 col-sm-6 col-md-6">
                    <div class="boton wow fadeInDown" data-wow-delay="0.5s">
                        <a class="button-gratis large radius goContrata ancla2" href="#promociones-coi">
                            <span style="visibility: hidden;">
                                abc
                            </span>
                            Comprar ahora
                            <span style="visibility: hidden;">
                                abc
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--
<section class="secciones-noi" id="promociones-coi">
    <div class="container">
        <div class="priceing-table-main">
            @foreach($productos_nuevos as $productos_coi)
            <div class="col-md-4 price-grid">
                <h4 class="text-center">
                    ¿Aún no cuentas con Aspel COI?
                </h4>
                <h4 class="text-center">
                    ¡Adquiére hoy la licencia nueva!
                </h4>
                <div class="price-block agile">
                    <div class="price-gd-top pric-clr1">
                        <h4>
                            <i aria-hidden="true" class="fa fa-star-o">
                            </i>
                            <br>
                                {{$productos_coi->tipo}}
                            </br>
                        </h4>
                        <h3>
                            ${{number_format($productos_coi->precio)}}
                        </h3>
                        <h5>
                            {{$productos_coi->nombre_producto}}
                        </h5>
                    </div>
                    <div class="incluye">
                        <h5>
                            Incluye:
                        </h5>
                        <ul>
                            <li>
                                {{$productos_coi->incluye1}}
                                <ul>
                                    <li>
                                        <s>
                                            Precio regular: $ {{$productos_coi->precio_incluye1}}
                                        </s>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                {{$productos_coi->incluye2}}
                                <ul>
                                    <li>
                                        <s>
                                            Precio regular: $ {{$productos_coi->precio_incluye2}}
                                        </s>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <span style="visibility: hidden;">
                            {{$a= $productos_coi->precio_incluye1 - $productos_coi->precio}}
                            {{$b= $a + $productos_coi->precio_incluye2}}
                        </span>
                        <p style="padding-left: 7%;">
                            Ahorras: $ {{number_format($b,2)}}
                        </p>
                    </div>
                    <div class="price-gd-bottom">
                        <div class="price-selet pric-sclr1">
                            <a href="{{route('añadir-pedido',$productos_coi->tipo)}}" id="comprar">
                                Comprar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @foreach($productos_nuevos1 as $productos_coi)
            <div class="col-md-4 price-grid">
                <h4 class="text-center">
                    ¿Cuentas con alguna versión anterior?
                </h4>
                <h4 class="text-center">
                    ¡Actualizate ahora!
                </h4>
                <div class="price-block agile">
                    <div class="price-gd-top pric-clr1">
                        <h4>
                            <i aria-hidden="true" class="fa fa-refresh">
                            </i>
                            <br>
                                {{$productos_coi->tipo}}
                            </br>
                        </h4>
                        <h3>
                            ${{number_format($productos_coi->precio)}}
                        </h3>
                        <h5>
                            {{$productos_coi->nombre_producto}}
                        </h5>
                    </div>
                    <div class="incluye">
                        <h5>
                            Incluye:
                        </h5>
                        <ul>
                            <li>
                                {{$productos_coi->incluye1}}
                                <ul>
                                    <li>
                                        <s>
                                            Precio regular: $ {{$productos_coi->precio_incluye1}}
                                        </s>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                {{$productos_coi->incluye2}}
                                <ul>
                                    <li>
                                        <s>
                                            Precio regular: $ {{$productos_coi->precio_incluye2}}
                                        </s>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <span style="visibility: hidden;">
                            {{$a= $productos_coi->precio_incluye1 - $productos_coi->precio}}
                            {{$b= $a + $productos_coi->precio_incluye2}}
                        </span>
                        <p style="padding-left: 7%;">
                            Ahorras: $ {{number_format($b,2)}}
                        </p>
                    </div>
                    <div class="price-gd-bottom">
                        <div class="price-selet pric-sclr1">
                            <a href="{{route('añadir-pedido',$productos_coi->tipo)}}" id="comprar">
                                Comprar
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
            @foreach($productos_nuevos2 as $productos_coi)
            <div class="col-md-4 price-grid">
                <h4 class="text-center">
                    ¿No deseas comprar Aspel NOI?
                </h4>
                <h4 class="text-center">
                    ¡Sólo úsalo el tiempo que necesites!
                </h4>
                <div class="price-block agile">
                    <div class="price-gd-top pric-clr1">
                        <h4>
                            <i aria-hidden="true" class="fa fa-clock-o">
                            </i>
                            <br>
                                {{$productos_coi->tipo}}
                            </br>
                        </h4>
                        <h3>
                            ${{number_format($productos_coi->precio)}}
                        </h3>
                        <h5>
                            {{$productos_coi->nombre_producto}}
                        </h5>
                    </div>
                    <div class="incluye">
                        <h5>
                            Incluye:
                        </h5>
                        <ul>
                            <li>
                                {{$productos_coi->incluye1}}
                                <ul style="visibility: hidden;">
                                    <li>
                                        <s>
                                            nada
                                        </s>
                                    </li>
                                </ul>
                            </li>
                            <li style="visibility: hidden;">
                                nada
                                <ul>
                                    <li>
                                        <s>
                                            nada
                                        </s>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <span style="visibility: hidden;">
                            nada
                        </span>
                        <p style="visibility: hidden;">
                            nada
                        </p>
                    </div>
                    <div class="price-gd-bottom">
                        <div class="price-selet pric-sclr1">
                            <a data-target="#suscripcion" data-toggle="modal" id="comprar">
                                Suscribir
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="clearfix">
            </div>
        </div>
        <div class="col-md-6 nota wow fadeInDown" data-wow-delay="0.5s">
            <p>
                *Precios más IVA. Precios en Moneda Nacional MXP Vigencia: 31 de enero de 2017
            </p>
        </div>
    </div>
</section>
--}}

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
