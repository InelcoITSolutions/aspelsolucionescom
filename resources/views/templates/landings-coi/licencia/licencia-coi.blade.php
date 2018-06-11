@extends('templates.landings-coi.principal')
@section('title','Promoción Aspel COI 8.0')
@push('css-promocion-nuevo-noi')
<link href="/css/landings-COI/promocion-nuevo-noi.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="/css/modal-promociones.css">
 <link rel="stylesheet" href="{{ URL::asset('/css/landings-COI/promocion-nuevo-noi.css') }}">

{{-- IMAGEN QUE SE muestra cuando se comparte en redes sociales --}}
<link href="http://www.aspelsoluciones.com/img/share/nuevo-coi.png" rel="image_src"/>
        

{{--estilos para landing de la presentacion del nuevo noi--}}
        @stack('css-presentacion-nuevo-noi')

        {{--estilos para landing de la promocion del nuevo noi--}}
        @stack('css-promocion-nuevo-noi')
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
       <div id="myModalPromo" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" style="font-size:1.7em;color:red;opacity: 1;"><i class="fa fa-times-circle" aria-hidden="true"></i></button>
                        {{--
                        <h4 class="modal-title">¡Descarga exitosa!</h4> --}}
                    </div>
                    <div class="modal-body">
                        <a href="{{ url('/promociones') }}" target="_blank">
                                        <img src="/images-new/inelco/promocion/banner/promocion-popup.png" class="img-responsive img-promocion" alt="prom">
                                    </a>
                    </div>
{{--                    <div class="modal-footer">
                        <div class="col-md-2 col-md-offset-5 col-xs-2 col-xs-offset-3">
                            <a class="btn btn-inelco" href="https://inelco.mx/promociones" target="_blank">Ver promoción</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
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
                        <span style="display:block;"></span>
                            y
                            <span class="poderoso">
                                funcional
                            </span>
                        <span style="display:block;"></span>
                    </i>
                </h1>
            </div>
            {{--la siguiente imagen va a un lado de las palabras anteriores--}}
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img-left">
                <img alt="COI 8.0" class="img-responsive" src="/img/img-landings-coi/aspelsoluciones-coi80.png" width="400">
                </img>
            </div>
        </div>
        
        <div class="row" style="margin-top:18px;">
            <h3 class="slogan wow fadeInDown" data-wow-delay="0.5s">
                El Sistema de contabilidad integral que te ayuda a manejar 
                <span style="display:block;"></span>
                y cumplir con la contabilidad electrónica.
                <span style="display:block;"></span>
            </h3>
        </div>

        <div class="row wow fadeInDown" data-wow-delay="0.5s">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 izquierda">
                <img alt="Actualizacion COI" class="img-responsive" src="/img/precios-julio/aspelsoluciones-coi-sus.png" width="400">
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

<section class="secciones-noi par-nuevo" id="lo-nuevo">
    <div class="container">
        <h3 class="text-center titulo-uno wow bounceInLeft" data-wow-delay="0.5s">
            Aspel COI 8.0 es tu mejor aliado para la contabilidad electrónica.
        </h3>
        <h1 class="titulo-dos texto-degradado wow bounceInRight" data-wow-delay="0.5s">
            EVOLUCIONA
        </h1>

        <div class="logo-producto">
            <div class="center-block">
                <img alt="logo COI" class="img-responsive wow fadeInDown" data-wow-delay="0.5s" src="/img/img-landings-coi/aspel-COI.png">
                </img>
            </div>
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
                            Cumple con las obligaciones fiscales
                        </h3>
                        <p>
                            Incorpora y asocia al registro contable
                            <span style="display:block;"></span>
                            los CFDI versión 3.3 para cumplir con
                            <span style="display:block;"></span> 
                            los requerimientos.
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
                            Registros contables
                        </h3>
                        <p>
                            Mantiene tu información actualizada de activos,
                            pasivos, capital, ingresos y gastos.
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
                            Declaraciones fiscales
                        </h3>
                        <p>
                            Genera oportunamente las diferentes 
                            <span style="display:block;"></span>
                            declaraciones fiscales como las correspondientes a IVA, ISR y DIOT.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div align="center" class="imagen">
                        <img alt="logo COI" class="img-responsive" height="250" src="/img/aspel-COI.png" width="250">
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
                            Pólizas dinámicas
                        </h3>
                        <p>
                            Optimiza tu tiempo con la funcionalidad que te permite registrar los Comprobantes con un solo clic.
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
                            Envío de archivos al SAT
                        </h3>
                        <p>
                            Genera archivos XML y Zip: catálogo de cuentas, pólizas, balanza de comprobación mensual y cierre del ejercicio.
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
                            Ticket Empresarial
                        </h3>
                        <p>
                            Administra los gastos corporativos y caja chica. Paga, controla, comprueba y contabiliza los gastos integrando los CFDI.
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
                Mantén bajo control toda la <span style="font-weight: bold">información contable y fiscal</span> de la organización.
            </h2>
        </div>
    </div>
</section>

<section class="secciones-noi" id="caracteristicas">
    <div class="container">

        <div class="row">
            <div class="col-md-8 text-left texto-abajo wow fadeInLeft" data-wow-delay="0.5s">
                <h2>
                    ¡Aspel COI 8.0!
                </h2>
                <p>
                    Cumple con las diferentes especificaciones y funciones para el manejo de la Contabilidad Electrónica 1.3, de acuerdo con las disposiciones fiscales vigentes.
                </p>
            </div>
            <div class="center-block">
                <div class="col-md-4">
                    <div class="contenedor">
                        <video controls="" width="410" height="240">
                            <source src="/video/nuevo-coi-2018.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="center-block">
                <div class="col-md-4 img-derecha wow fadeInLeft" data-wow-delay="0.5s">
                    <img alt="caracteristicas coi" class="img-responsive img-center" src="/img/img-landings-coi/IIS-collage_coi.png" width="350">
                    </img>
                </div>
            </div>
            <div class="col-md-8 text-right wow fadeInRight" data-wow-delay="0.5s">
                <h2>
                    Cumple con todos los requerimientos de la Contabilidad Electrónica
                </h2>
                    <p>Catálogo de cuentas con código agrupador del SAT.</p>
                    <p>Fácil asociación de comprobantes digitales a los registros contables.</p>
                    <p>Pólizas con el detalle de la transacción: forma de pago, folios fiscales relacionados, RFC de terceros, entre otros.</p>
                    <p>Genera archivos XML y zip, listo para el envío de catálogos de cuentas, pólizas, balanza de comprobación mensual y de cierre del ejercicio.</p>
            </div>
            
        </div>

        <div class="row">
            <div class="col-md-8 text-left texto-abajo wow fadeInLeft" data-wow-delay="0.5s">
                <h2>
                    Llega la contabilidad al día mediante la automatización del registro contable
                </h2>
                <p>
                    Las pólizas modelos nos permite registrar movimientos frecuentes con gran cantidad de registros contables.
                </p>
            </div>
            <div class="center-block">
                <div class="col-md-4 img-izquierda wow fadeInRight" data-wow-delay="0.5s">
                    <img alt="caracteristicas coi" class="img-responsive" src="/img/img-landings-coi/nuevo-coi-2018/registro-contable.png" width="200">
                    </img>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="center-block">
                <div class="col-md-4 img-derecha wow fadeInLeft" data-wow-delay="0.5s">
                    <img alt="caracteristicas coi" class="img-responsive img-center" src="/img/img-landings-coi/nuevo-coi-2018/reportes.png" width="200">
                    </img>
                </div>
            </div>
            <div class="col-md-8 text-right wow fadeInRight" data-wow-delay="0.5s">
                <h2>
                    Reporte financieros y contables
                </h2>
                    <p>Obtén la balanza de comprobación mensual o anual, auxiliares de cuentas, balance genera, estado de resultados, diario general, libro mayor, presupuestos, depreciación contable y fiscal de activos, ajuste anual por inflación, entre otros.</p>
            </div>
            
        </div>

    </div>
</section>

<section class="secciones-noi" id="news-carateristicas">
    <div class="container">
        <h2 class="funciones-nuevas wow fadeInDown" data-wow-delay="0.5s">
            Conoce las nuevas funcionalidades.
        </h2><!--TITULO DE LAS NUEVAS FUNCIONALIDADES -->
        <div class="row">

            <div class="news-grid w3l-agile">
                <div class="col-md-6 img-abajo wow fadeInLeft" data-wow-delay="0.5s">
                    <span style="display:block;"></span>
                    <img alt="aspelsoluciones-ticket-empresarial" class="img-responsive" src="/img/img-landings-coi/nuevo-coi-2018/intefaces-coi.png" width="65%"/>

                </div>
                <div class="col-md-6 news-text texto-arriba wow fadeInRight" data-wow-delay="0.5s">
                    <h3>
                        Interfaz con otros sistemas Aspel
                    </h3>
                    <ul>
                        <li>
                            <strong>Aspel SAE:</strong> genera pólizas de ventas, compras, movimientos al inventario, abonos y cargos de cuentas por cobrar y por pagar.
                        </li>
                        <li>
                            <strong>Aspel BANCO:</strong>  genera pólizas de cargos y abonos de las cuentas bancarias.
                        </li>
                        <li>
                            <strong>Aspel NOI:</strong>  genera pólizas de las provisiones y pagos de nómina.
                        </li>
                        <li>
                            <strong>Aspel CAJA:</strong>  genera pólizas de los movimientos de ventas e ingresos obtenidos en los puntos de venta.
                        </li>
                    </ul>                            
                </div>
                <div class="clearfix">
                </div>
            </div>

            <div class="news-grid">
                <div class="col-md-6 news-text two wow fadeInLeft" data-wow-delay="0.5s">
                    <h3>
                        Reportes comparativos
                    </h3>
                    <p>
                        Obtén más opciones para analizar los saldos de tu empresa, al mostrar los resultados de estados financieros de forma anual o por periodo y contra presupuestos.
                    </p>
                </div>
                <div class="col-md-6 news-img two wow fadeInRight" data-wow-delay="0.5s">
                    <img alt=" " class="img-responsive" src="/img/img-landings-coi/nuevo-coi-2018/reporte-comparativo.png" style="width:70% !important; margin-top: 24px;"/>
                </div>
                <div class="clearfix">
                </div>
            </div>

            <div class="news-grid w3l-agile">

                <div class="col-md-6 news-img img-abajo wow fadeInLeft" data-wow-delay="0.5s">
                    <img alt=" nuevas funciones coi" class="img-responsive" src="/img/img-landings-coi/nuevo-coi-2018/excel.png" style="width:70% !important;"/>
                </div>
                <div class="col-md-6 news-text texto-arriba2 wow fadeInRight" data-wow-delay="0.5s">
                    <h3>
                        Información visual con gráficas
                    </h3>
                    <p>
                        Genera y personaliza gráficas de movimientos generados por periodos e indicadores financieros directamente en hojas de cálculo de Microsoft Excel®.
                    </p>
                </div>
                <div class="clearfix">
                </div>
            </div>
            <div class="news-grid">
                <div class="col-md-6 news-text two wow fadeInLeft" data-wow-delay="0.5s">
                    <h3>
                        Módulos de Perfiles renovado
                    </h3>
                    <p>
                        Permite que los usuarios accedan solo a la información autorizada e identifícalos por su fotografía.
                    </p>
                </div>
                <div class="col-md-6 news-img two wow fadeInRight" data-wow-delay="0.5s">
                    <img alt=" " class="img-responsive" src="/img/img-landings-coi/nuevo-coi-2018/perfiles.png" style="width:70% !important;"/>
                </div>
                <div class="clearfix">
                </div>
            </div>
            
            <div class="news-grid w3l-agile">
                <div class="col-md-6 news-img img-abajo wow fadeInLeft" data-wow-delay="0.5s">
                    <img alt=" " class="img-responsive" src="/img/img-landings-coi/nuevo-coi-2018/ticket.png" style="width:70% !important;margin-top:40px;"/>
                </div>
                <div class="col-md-6 news-text texto-arriba wow fadeInRight" data-wow-delay="0.5s">
                    <h3>
                        Ticket empresarial
                    </h3>
                    <p>
                        La administración de gastos corporativos y caja chica será más sencilla. Aspel COI en alianza con Ticket Empresarial permite pagar, controlar, comprobar y contabilizar los gastos integrando los CFDI, al utilizar herramienta Ticket Empresarial® desde cualquier lugar, y ahorra tiempo en la comprobación de gastos. Además, obtén el CFDI para contabilizarlo en línea.
                    </p>
                </div>
                <div class="clearfix">
                </div>
            </div>

            <div class="news-grid">
                <div class="col-md-6 news-text two wow fadeInLeft" data-wow-delay="0.5s">
                    <h3>
                        Espacio Aspel
                    </h3>
                    <ul>
                        <li>
                            Es un servicio inteligente en la nube donde puedes concentrar y compartir información contable, financiera y comercial de manera segura y efectiva. 
                        </li>
                        <li>
                            Te ofrece un Buzón Contable que permite la administración e intercambio de información de manera sencilla y eficiente. Organiza los comprobantes fiscales de las operaciones incluyendo CFDI, automatiza la generación de pólizas y su registro contable en Aspel COI. Es ideal para despachos contables, empresas a las que les llevan la Contabilidad y oficinas con sucursales.
                        </li>
                    </ul>
                    
                </div>
                <div class="col-md-6  two wow fadeInRight" data-wow-delay="0.5s">
                    <img alt=" " class="img-responsive" src="/img/img-landings-coi/nuevo-coi-2018/espacio.png" style="width:70% !important;margin-top:40px;"/>
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
                        <a class="button-gratis large radius goContrata ancla2" href="#adquirir">
                            Solicitar licencia gratuita
                        </a>
                    </div>
                </div>
                <div align="center" class="col-xs-6 col-sm-6 col-md-6">
                    <div class="boton wow fadeInDown" data-wow-delay="0.5s">
                        <a class="button-gratis large radius goContrata ancla2" href="#promociones-noi">
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

{{-- --}}
<section class="secciones-noi" id="promociones-noi">
    <div class="container">
        <div class="priceing-table-main">
            <!-- suscripcion-->
            <div class="col-md-4 price-grid">
                <h4 class="text-center">
                    ¿No deseas comprar Aspel COI?
                </h4>
                <h4 class="text-center">
                    ¡Sólo suscríbete por el tiempo que lo necesites!
                </h4>
                <div class="price-block agile">
                    <div class="price-gd-top pric-clr1">
                        <h4>
                            <i aria-hidden="true" class="fa fa-clock-o">
                            </i>
                            <span style="display:block;"></span>
                                Aspel COI 8.0
                            <span style="display:block;"></span>
                               Suscripción Mensual 
                            <span style="display:block;"></span>
                        </h4>
                        <h3>
                            $317
                        </h3>
                        
                    </div>
                    <div class="incluye">
                        <h5>
                            Incluye:
                        </h5>
                        <ul>
                            <li>
                                Licencia Aspel COI 8
                                <ul>
                                    <li>
                                            1 usuario / 999 empresas
                                    </li>
                                </ul>
                            </li>
                            {{-- 
                            <li>
                                Suscripción mensual
                            </li>
                            <li>
                                20% de descuentoen
                                <ul>
                                    <li>
                                        Póliza de Asesoría y Soporte
                                    </li>
                                </ul>
                            </li>
                            --}}
                        </ul>

                       
                        <span style="display:block;"></span>
                        <span style="display:block;"></span>
                        <p>
                         <h6>*Precio en Moneda Nacional + IVA</h6>
                         <h6>*No incluye servicios de instalación</h6>   
                        </p>
                      
                        
                    </div>
                    <div class="price-gd-bottom">
                        <div class="price-selet pric-sclr1">
                            <a id="comprar" href='https://survey.zohopublic.com/zs/zPCul3' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
                                Adquirir ahora
                            </a>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="col-md-4 price-grid">
                <h4 class="text-center">
                    ¿Deseas obtenerlo de manera 
                    <span style="display:block;"></span>
                    permanente?

                </h4>

                <h4 class="text-center">
                    ¡Adquiére hoy la licencia nueva!
                </h4>

                <div class="price-block agile">
                    <div class="price-gd-top pric-clr1">
                        <h4>
                            <i aria-hidden="true" class="fa fa-star-o">
                            </i>
                            <span style="display:block;"></span>
                               Aspel COI 8.0
                               <span style="display:block;"></span>
                               Licencia Permanente
                            <span style="display:block;"></span>
                        </h4>
                        <h3>
                           $5,507
                        </h3>
                        
                    </div>
                    <div class="incluye">
                        <h5>
                            Incluye:
                        </h5>
                       <ul>
                            <li>
                                Licencia Aspel COI 8
                                <ul>
                                    <li>
                                            1 usuario / 999 empresas
                                    </li>
                                </ul>
                            </li>

                            <li>
                                Licencia permanente
                            </li>
                            {{--
                            <li>
                                1 curso en línea
                            </li>

                            <li>
                                20% de descuentoen
                                <ul>
                                    <li>
                                        Póliza de Asesoría y Soporte
                                    </li>
                                </ul>
                            </li>
                            --}}
                        </ul>
                        <span style="display:block;"></span>
                        <p>
                         <h6>*Precio en Moneda Nacional + IVA</h6>
                         <h6>*No incluye servicios de instalación</h6>   
                        </p>
                    </div>
                    <div class="price-gd-bottom">
                        <div class="price-selet pric-sclr1">
                            <a id="comprar" href='https://survey.zohopublic.com/zs/WQCuNk' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
                                Adquirir ahora
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 price-grid">
                <h4 class="text-center">
                    ¿Cuentas con alguna versión 
                    <span style="display:block;"></span>
                    anterior?
                </h4>
                <h4 class="text-center">
                    ¡Actualizate ahora!
                </h4>
                <div class="price-block agile">
                    <div class="price-gd-top pric-clr1">
                        <h4>
                            <i aria-hidden="true" class="fa fa-refresh">
                            </i>
                            <span style="display:block;"></span>
                            Aspel COI 8.0
                            <span style="display:block;"></span>
                               Actualización
                            <span style="display:block;"></span>
                        </h4>
                        <h3>
                         $3,305
                        </h3>
                    </div>
                    <div class="incluye">
                        <h5>
                            Incluye:
                        </h5>
                       <ul>
                            <li>
                                Licencia Aspel COI 8
                                <ul>
                                    <li>
                                            1 usuario / 999 empresas
                                    </li>
                                </ul>
                            </li>

                            <li>
                                Licencia de actualización
                            </li>
                            {{-- 
                            <li>
                                1 curso en línea
                            </li>

                            <li>
                                20% de descuentoen
                                <ul>
                                    <li>
                                        Póliza de Asesoría y Soporte
                                    </li>
                                </ul>
                            </li>
                            --}}
                        </ul>
                        <span style="display:block;"></span>
                        <p>
                         <h6>*Precio en Moneda Nacional + IVA</h6>
                         <h6>*No incluye servicios de instalación</h6>   
                        </p>
                    </div>
                    <div class="price-gd-bottom">
                        <div class="price-selet pric-sclr1">
                            <a id="comprar" href='https://survey.zohopublic.com/zs/2nCu6m' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
                                Adquirir ahora
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="clearfix">
            </div>
        </div>
        <div class="col-md-6 nota wow fadeInDown" data-wow-delay="0.5s">
            <p>
                *Precios más IVA. Precios en Moneda Nacional MXP Vigencia: 31 de mayo de 2017
            </p>
        </div>
    </div>
</section>

{{--encuesta suscripcion--}}
<script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script>



{{--encuesta licencia--}}
<script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script>



{{--encuesta actualizacion--}}
<script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script>


<script>
    $("#myModalPromo").modal("show");
    window.setTimeout(function(){
     $('#myModalPromo').modal('hide');
  }, 10000); 


    $(document).ready(function() {
     if($(window).width() > 697) {
         $(".img-promocion").attr("src", "/images-new/inelco/promocion/banner/promocion-popup.png");
     } else {
         $(".img-promocion").attr("src", "/images-new/inelco/promocion/banner/promocion-popup-mobile.png");
     }
    }); 
</script>

@include('partials.formularios-landing-coi.ventana-modal-renta')
@include('partials.formularios-landing-coi.ventana-modal-licencia')
@include('partials.formularios-landing-coi.ventana-modal-actualizacion')

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
