{{--extiendo de la plantilla principal la estructura y archivos para esta landing--}}
@extends('templates.landings.principal')
@section('title','Curso Aspel SAE Basico')
{{--llamo a los estilos para esta landing desde la plantilla pricipal--}}
@push('css-curso-sae')
<link href="/css/landings/curso-sae.css" rel="stylesheet" type="text/css"/>
<link href="/css/temporizador.css" rel="stylesheet"/>
<link href="/css/style-contador.css" rel="stylesheet"/>
<link href="/css/formulario.css" rel="stylesheet"/>
@endpush
{{--seccion del contenido--}}
@section('content')
@if(Session::has('mensaje'))
<div class="alert alert-success">
    <div class="container-fluid">
        <div class="alert-icon">
            <i class="icon-check ico-notif">
            </i>
        </div>
        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
            <span aria-hidden="true">
                <i class="icon-cross2">
                </i>
            </span>
        </button>
        <b>
            {{ Session::get('mensaje') }}
        </b>
    </div>
</div>
@endif
<section class="secciones-noi" id="inicio-aspel-noi">
    <div class="container">
        <div align="right" class="logo">
            <a href="{{url('presentacion/nuevo-noi')}}">
                <img alt="Logo Aspel Soluciones" class="img-responsive" src="/img/logo.png" width="150"/>
            </a>
        </div>
        <div class="row img-producto">
            <img alt="" src="">
            </img>
        </div>
        <h1 class="text-right">
            Curso Básico
        </h1>
        <div class="row">
            <h3 class="slogan text-left">
                El Sistema más usado en la administración de la nómina y el capital humano en México
            </h3>
        </div>
        <div class="row">
            <div align="center" class="boton">
                <a class="button large radius goContrata" href="#registrarme">
                    Registrarme
                </a>
            </div>
        </div>
    </div>
</section>
<section class="secciones-noi" id="presentacion">
    <div class="container">
        <h1 class="text-center">
            Presentación
            <strong>
                Aspel NOI 8.0
            </strong>
        </h1>
        <div class="info">
            <p>
                Asiste nuestra presentación y conoce la nueva versión del sistema preferido de las empresas mexicanas para administrar y automatizar el proceso de la nómina y emisión de recibos CFDI
            </p>
            <ul>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Nueva arquitectura tecnológica
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Nuevos menús más funcionales y búsquedas más ágiles
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Nuevas consultas más eficientes y gráficas
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Reporte concentrado de CFDI
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Nueva versión 1.2 del complemento de nómina, obligatorio para los CFDI en 2017
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="secciones-noi" id="para-quien">
    <div class="container">
        <div class="row">
            <h1 class="titulo-uno">
                <span>
                    ¿
                </span>
                Para quién es esta
                <br>
                    presentación
                    <span>
                        ?
                    </span>
                </br>
            </h1>
        </div>
        <div class="row">
            <ul>
                <li>
                    <img alt="" src="/img/img-landings/icon-check.png">
                        Dueños y administradores de negocio, administradores de recursos humanos.
                    </img>
                </li>
                <li>
                    <img alt="" src="/img/img-landings/icon-check.png">
                        Despachos de contabilidad y nómina, y de administración de personal.
                    </img>
                </li>
                <li>
                    <img alt="" src="/img/img-landings/icon-check.png">
                        Personas interesadas en conocer el mejor sistema de administración de nómina y capital humano
                    </img>
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="secciones-noi" id="barra-solida">
    <div class="container">
        <h2 class="text-center">
            Ahora
            <strong>
                NOI 8.0
            </strong>
            te ofrece una novedosa plataforma
            tecnológica para
            <strong>
                mejorar tu experiencia de uso
            </strong>
        </h2>
    </div>
</section>
<section class="secciones-noi" id="caracteristicas">
    <div class="container">
        <div class="row">
            <div class="col-md-8 text-left">
                <h2>
                    Aspel NOI
                </h2>
                <p>
                    Automatiza el control de los aspectos más importantes de la nómina, su fácil manejo y versatilidad ofrece un cálculo exacto de las percepciones y deducciones de los trabajadores atendiendo los requerimientos específicos de la empresa
                </p>
            </div>
            <center>
                <div class="col-md-4">
                    <img alt="caracteristicas noi" class="img-responsive" src="/img/img-landings/caracteristica-noi.png" width="250">
                    </img>
                </div>
            </center>
        </div>
        <div class="row">
            <center>
                <div class="col-md-4">
                    <img alt="caracteristicas noi" class="img-responsive" src="/img/img-landings/nuevo-noi-ocho.png" width="200">
                    </img>
                </div>
            </center>
            <div class="col-md-8 text-right">
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
<section class="secciones-noi" id="lugar">
    <div class="container">
        <div class="row">
            <div class="col-md-6 inelco">
                <p>
                    La presentación
                    <br>
                        se llevará a cabo en el
                        <br>
                            <span>
                                Centro de Capacitación Inelco
                            </span>
                            <br>
                                en Monterrey
                            </br>
                        </br>
                    </br>
                </p>
            </div>
            <div class="col-md-6">
                <img alt="national-soft-logo" class="img-responsive" src="/img/img-landings/logo-aspel.png" width="250">
                    <div class="direccion">
                        <p class="dir">
                            Edificio Cintermex
                        </p>
                        <p class="dir">
                            Av. Fundidora N°501 local 18 planta baja
                        </p>
                        <p class="dir">
                            64010 Monterrey, México
                        </p>
                        <p class="dir">
                            (81) 1352 2222
                        </p>
                    </div>
                </img>
            </div>
        </div>
    </div>
    <div class="map" id="canvas1">
        <iframe allowfullscreen="" frameborder="0" height="400" id="map_canvas1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.695669874172!2d-100.29269608489707!3d25.681381183673388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8662956399352013%3A0x4a07476a18d9e488!2sInelco+It+Solutions%2C+S.A.+De+C.V.!5e0!3m2!1ses-419!2smx!4v1476726304776" style="border:0" width="100%">
        </iframe>
    </div>
    <div class="container fecha" id="lugar-y-fecha">
        <div class="row">
            <p class="text-center dia">
                Miércoles 26 de octubre de 2016
            </p>
            <p class="text-center hora">
                10:00 – 12:00
            </p>
            <p class="text-center cupo">
                <b>
                    CUPO LIMITADO
                </b>
            </p>
        </div>
    </div>
</section>
<section class="secciones-noi" id="tiempo">
    @include('partials.temporizador')
</section>
<section class="secciones-noi" id="registrarme">
    <div class="container">
        <div class="row">
            <p class="text-center">
                ¡No dejes pasar esta oportunidad! Regístrate GRATIS hoy mismo
            </p>
            @include('partials.form-contacto')
        </div>
    </div>
</section>
@stop
