@extends('templates.landings-facture.principal')
@section('title','Promoción Aspel FACTURE 4.0')
@push('css-promocion-nuevo-noi')
<link href="/css/landings-FACTURE/promocion-FACTURE.css" rel="stylesheet" type="text/css"/>

<!--<link href="/css/landings-SAE/form-promocion.css" rel="stylesheet"/>-->

{{-- IMAGEN QUE SE muestra cuando se comparte en redes sociales --}}
<link href="https://www.aspelsoluciones.com/img/share/nuevo-facture.png" rel="image_src"/>


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

<section class="secciones-noi" id="inicio-aspel-noi">
    <div class="container">
        <div align="right" class="logo">
            <a href="{{url('coi-nuevo')}}">
                <img alt="Logo Aspel Soluciones" class="img-responsive" src="/img/logo-aspelsoluciones-blanco.png" width="220" />
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

            {{--la siguiente imagen va a un lado de las palabras anteriores--}}
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img-left">
                <img alt="COI 8.0" class="img-responsive" src="/img/img-landings-facture/aspelsoluciones-facture-letras-blancas.png" width="410">
                </img>
            </div>
        </div>
        
        <div class="row">
            <h3 class="slogan wow fadeInDown" data-wow-delay="0.5s">
                SEGURIDAD en mi facturación
                <br>
                Genera facilmente tus comprobantes fiscales digitales
                </br>
            </h3>
        </div>

        <div class="row wow fadeInDown" data-wow-delay="0.5s">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 izquierda">
                <img alt="Actualizacion COI" class="img-responsive" src="/img/precios-julio/aspelsoluciones-fac-sus.png" width="400">
                </img>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 boton-espacio">
                <div align="right" class="boton wow fadeInDown" data-wow-delay="0.5s">
                    <a class="button-adquierelo large radius goContrata ancla2" href="#promociones-fac">
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
            Aspel FACTURE, El software ideal para emprendedores y profesionistas 

        </h3>
        <h1 class="titulo-dos texto-degradado wow bounceInRight" data-wow-delay="0.5s">
            ¡EVOLUCIONA!
        </h1>

        <div class="logo-producto">
            <center>
                <img alt="logo COI" class="img-responsive wow fadeInDown" data-wow-delay="0.5s" src="/img/img-landings-sae/aspel-home-sae-blanco.png">
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
                            Facturación Electrónica  
                        </h3>
                        <p>
                        Genera CFDI y envía el comprobante a tus clientes vía correo electrónico en PDF y XML.
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
                            Nueva interfaz
                        </h3>
                         <p>
                         Se rediseño el sistema e integramos más herramientas de personalización de acuerdo a tus necesidades. 
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
                            Útil catálogo de clientes y productos 

                        </h3>
                        <p>
                        Es más sencillo definir la información comercial y fiscal de tus comprobantes, porque agiliza la captura y minimiza errores.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div align="center" class="imagen">
                        <img alt="logo COI" class="img-responsive" height="250" src="/img/aspel-FACTURE.png" width="250">
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
                            Fácil identificación de productos
                        </h3>
                        <p>
                            Incluye un completo catálogo de productos con fotografía para facilitar su identificación.
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
                            Gráficas y estadísticas oportunas
                        </h3>
                        <p>
                           Incluimos gráficas y estadísticas personalizables y de fácil configuración para una mejor toma de decisiones 
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
                            Complementos del Anexo 20.
                        </h3>
                        <p>
                           Emite comprobantes con complementos fiscales como: notarios, donatarias, pago en especie, compra-venta de divisa y leyendas fiscales.
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
                Cualquiera que sea tu profesión, giro comercial, si eres persona Física o Moral y requieres facturar
                <b>
                    Aspel FACTURe 4.0
                </b>
                es tu mejor
                <b>
                   solución.
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
                    Aspel FACTURⓔ
                </h2>
                <p>
                     Es el sistema ideal para personas físicas, emprendedores y profesionistas que requieren generar Comprobantes Fiscales Digitales por Internet (CFDI) de forma segura y en segundos de acuerdo con las disposiciones fiscales vigentes.
                </p>
            </div>
            <center>
                <div class="col-md-4">
                    <div class="contenedor">
                        <iframe src="/video/facture-2017.mp4" allowfullscreen="" 
                        frameborder="0">
                        </iframe>
                    </div>
                </div>
            </center>
        </div>

        <div class="row">
            <center>
                <div class="col-md-4 img-derecha wow fadeInLeft" data-wow-delay="0.5s">
                    <img alt="caracteristicas coi" class="img-responsive img-center" src="/img/img-landings-facture/aspelsoluciones-collage_facture.png" width="250">
                    </img>
                </div>
            </center>
            <div class="col-md-8 text-right wow fadeInRight" data-wow-delay="0.5s">
                <h2>
                    Nuevo y practico FACTURⓔ 4.0
                </h2>
                <p class="text-justify">
                    Captura fácilmente facturas, notas de crédito, recibos de honorarios, de arrendamiento y otros comprobantes de ingreso y egreso, así como manejo de complementos. Cumple con las nuevas dispociciones fiscales correspondientes a alas reglas de validación del Anexo 20.
                </p>
            </div>
            
        </div>

        <div class="row">
            <div class="col-md-8 text-left texto-abajo wow fadeInLeft" data-wow-delay="0.5s">
                <h2>
                    ¿Que cambios trae la facturación electronica 3.3?
                </h2>
                <ul>
                                <li> 
                                Timbrado de pagos parciales
                                </li>

                                <li> 
                                17 Nuevos catálogos
                                </li>
                                <li> 
                                Nuevas reglas en la cancelación de facturas
                                </li>
                                <li>
                                Timbrado al aplicar la cobranza    
                                </li>
                                <li>
                                 Modificación de la estructura   
                                </li>
                                <li>
                                 Formato de datos   
                                </li>
                                <li>
                                 Reglas de cálculos entre otras   
                                </li>                      
                            </ul>
            </div>
            <center>
                
                <div class="col-md-4 img-izquierda wow fadeInRight" data-wow-delay="0.5s">
                    <br>
                    </br>
                    <br>
                    </br>
                    <br>
                    </br>
                    <img alt="caracteristicas coi" class="img-responsive" src="/img/img-landings-sae/inelco-logo-SAT.png" width="150">
                    </img>
                </div>
            </center>
        </div>
        <div class="row">
            <div align="right" class="boton wow fadeInDown dis-fis" data-wow-delay="0.5s">
                <br>
                <a href="/descargas/aspelsoluciones-guia-anexo20.pdf" target="_blank">
                    Conoce la guía para el anexo "20" 2017
                </a><i aria-hidden="true" class="fa fa-file-text fa-2x"></i>
            </div>
        </div>

    </div>
</section>

<section class="secciones-noi" id="news-carateristicas">
<div class="container">
<!-- primera parte-->
<h1 class="funciones-nuevas wow fadeInLeft"" data-wow-delay="0.8s">
            Beneficios
            <br>
            </br>
        </h1>    
<div class="ben-1">
<div class="container wow fadeInRight" data-wow-delay="0.8s">


            <div class="col-md-2">
                <div class="img-responsive">
                        <img alt="Interfaces Sistemas Aspel" class="img-responsive" src="/img/img-landings-facture/facture/aspel-productos-facture-ieps-iva-isr.png"/>
                </div>
            </div>

            <div class="col-md-4">    
                <div class="text">
                    <h3>
                      Administra diferentes impuestos
                    </h3>
                    <p>
                       Impuesto Especial Sobre Productos y Servicios (IEPS), Impuesto al Valor Agregado (IVA), retenciones del IVA y del Impuesto Sobre la Renta (ISR), impuestos locales configurables (trasladados o retenidos), como el Impuesto Sobre Hospedaje.
                    </p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-responsive">
                        <img alt="Interfaces Sistemas Aspel" class="img-responsive" src="/img/img-landings-facture/facture/aspel-productos-facture-complemento-ine.png"/>
                </div>
            </div>
            <div class="col-md-4">    
                <div class="text">
                    <h3>
                         Complemento INE
                    </h3>
                    <p>
                        Si tu negocio brinda servicios o vende productos para aspirantes políticos y partidos, expide este complemento 
                    </p>
                </div>
            </div>
             <div class="col-lg-1"> 
            </div>
</div>
</div>
<!-- segunda parte-->
<div class="ben-2">
<div class="container-fluid wow fadeInLeft" data-wow-delay="0.8s">
           
            <div class="col-md-2">
                <div class="img-responsive">
                        <img alt="Interfaces Sistemas Aspel" class="img-responsive" src="/img/img-landings-facture/mas-soluciones/espacio-aspel1.png"/>
                </div>
            </div>
            <div class="col-md-4">    
                <div class="text">
                    <h3>
                      ⓔspacio Aspel 
                    </h3>
                    <p>
                       Es un servicio inteligente en la nube que te permite respaldar la base de datos de tu sistema Aspel-FACTURⓔ, así como tus CFDI. Siempre tendrás una copia confiable de tus comprobantes.
                    </p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-responsive">
                        <img alt="Interfaces Sistemas Aspel" class="img-responsive" src="/img/img-landings-facture/facture/aspel-productos-facture-dividendos-y-remanentes.png"/>
                </div>
            </div>
            <div class="col-md-4">    
                <div class="text">
                    <h3>
                         Emite complementos de retenciones 
                    </h3>
                    <p>
                        Expide comprobantes digitales que amparan complementos de retención e información de pagos como: dividendos, remanentes distribuibles, pago a extranjeros, enajenación de acciones, entre otros.
                    </p>
                </div>
            </div>   
</div>
</div>
<!-- terceera parte-->
<div class="ben-1">
<div class="container-fluid wow fadeInRight" data-wow-delay="0.8s">
           
            <div class="col-md-2">
                <div class="img-responsive">
                        <img alt="Interfaces Sistemas Aspel" class="img-responsive" src="/img/img-landings-facture/facture/aspel-productos-facture-catalogo-productos.png"/>
                </div>
            </div>
            <div class="col-md-4">    
                <div class="text">
                    <h3>
                       Fácil identificación de productos
                    </h3>
                    <p>
                        Incluye un completo catálogo de productos con fotografía para facilitar su identificación.
                    </p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-responsive">
                        <img alt="Interfaces Sistemas Aspel" class="img-responsive" src="/img/img-landings-facture/facture/aspel-productos-facture-estadisticas-graficas.png"/>
                </div>
            </div>
            <div class="col-md-4">    
                <div class="text">
                    <h3>
                        Gráficas y estadísticas oportunas
                    </h3>
                    <p>
                        Incluimos gráficas y estadísticas personalizables y de fácil configuración para una mejor toma de decisiones. 
                    </p>
                </div>
            </div>          
</div>
</div>
</div>
</section>

{{-- --}}
<section class="secciones-noi" id="barra-solida">
    <div class="fondo-morado">
        <div class="container">
            <h2 class="text-center wow fadeInDown" data-wow-delay="0.5s">
                ¿Aún no tienes Aspel FACTURⓔ 4.0?
            </h2>
            {{--
            <h3 class="frase-gratis">
                Solicita una licencia y prueba toda su funcionalidad por 30 dias ¡gratis!
            </h3>
            --}}
            <div class="row">
                <div align="center" class="col-xs-12 col-sm-12 col-md-12">
                    <div class="boton wow fadeInDown" data-wow-delay="0.5s">
                        <a class="button-gratis large radius goContrata ancla2" href="#promociones-fac">
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

<section>
<div class="container">
    <div class="row titulo wow bounceIn" data-wow-delay="0.5s">
        <h2 class="text-center">El nuevo Aspel FACTURⓔ 4.0 esta disponible en licenciamiento permanente y en suscripción para que elijas la opción mas conveniente para tu empresa.
</h2>
    </div>
</div>    
</section>
{{-- --}}
<section class="secciones-noi" id="promociones-fac">
    <div class="container">
        <div class="priceing-table-main">
            <!-- suscripcion-->
            <div class="col-md-4 price-grid">
                <h4 class="text-center">
                    ¿No deseas comprar Aspel FACTURⓔ?
                </h4>
                <h4 class="text-center">
                    ¡Sólo suscríbete por el tiempo que lo necesites!
                </h4>
                <div class="price-block agile">
                    <div class="price-gd-top pric-clr1">
                        <h4>
                            <i aria-hidden="true" class="fa fa-clock-o">
                            </i>
                            <br>
                                Aspel FACTURⓔ 4.0
                            <br>
                               Suscripción Mensual 
                            </br>
                        </h4>
                        <h3>
                            $88
                        </h3>
                        
                    </div>
                    <div class="incluye">
                        <h5>
                            Incluye:
                        </h5>
                        <ul>
                            <li>
                                Licencia Aspel FACTURⓔ 4.0
                                <ul>
                                    <li>
                                            1 usuario / 99 empresas
                                    </li>
                                </ul>
                            </li>

                            <li>
                                Suscripción mensual
                               
                            </li>

                            

                            <li>
                                Timbres Ilimitados
                            </li>
                            <br>
                        </ul>

                        <p>
                         <h6>*Precio en Moneda Nacional + IVA</h6>
                         <h6>*No incluye servicios de instalación</h6>   
                        </p>
                      
                        
                    </div>
                    <div class="price-gd-bottom">
                        <div class="price-selet pric-sclr1">
                            <a id="comprar" href='https://survey.zohopublic.com/zs/ezCuyB' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
                                Adquirir ahora
                            </a>
                        </div>
                    </div>
                </div>
            </div>
         
            <div class="col-md-4 price-grid">
                <h4 class="text-center">
                    ¿Deseas obtenerlo de manera 
                    <br>
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
                            <br>
                               Aspel FACTURⓔ 4.0
                               <br>
                               Licencia Permanente
                            </br>
                        </h4>
                        <h3>
                           $1,575
                        </h3>
                        
                    </div>
                    <div class="incluye">
                        <h5>
                            Incluye:
                        </h5>
                       <ul>
                            <li>
                                Licencia  Aspel FACTURⓔ 4.0 ($1,575)
                                <ul>
                                    <li>
                                            1 usuario /99 empresas
                                    </li>
                                  
                                </ul>
                            </li>

                            
                            <br>
                            
                        </ul>
                        <br>
                        </br>
                        <p>
                         <h6>*Precio en Moneda Nacional + IVA</h6>
                         <h6>*No incluye servicios de instalación</h6>   
                        </p>
                    </div>
                    <div class="price-gd-bottom">
                        <div class="price-selet pric-sclr1">
                            <a id="comprar" href='https://survey.zohopublic.com/zs/cICuc9' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
                                Adquirir ahora
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 price-grid">
                <h4 class="text-center">
                    ¿Cuentas con alguna versión 
                    <br>
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
                            <br>
                            Aspel FACTURⓔ 4.0
                            <br>
                               Actualización
                            </br>
                        </h4>
                        <h3>
                         $945
                        </h3>
                    </div>
                    <div class="incluye">
                        <h5>
                            Incluye:
                        </h5>
                       <ul>
                            <li>
                                Licencia Actualización Aspel FACTURⓔ 4.0 ($945)
                                <ul>
                                    <li>
                                            1 usuario /99 empresas
                                    </li>                          
                                </ul>
                            </li>
                            <li>
                                .
                            </li>
                        </ul>
                       <br>
                      </br>

                        <p>
                         <h6>*Precio en Moneda Nacional + IVA</h6>
                         <h6>*No incluye servicios de instalación</h6>

                        </p>

                    </div>
                    <div class="price-gd-bottom">
                        <div class="price-selet pric-sclr1">
                            <a id="comprar" href='https://survey.zohopublic.com/zs/8jCuOJ' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
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

@include('partials.formularios-landing-sae.ventana-modal-renta')
@include('partials.formularios-landing-sae.ventana-modal-licencia')
@include('partials.formularios-landing-sae.ventana-modal-actualizacion')



{{-- encuesta de licencia      --}}
<script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script>



{{-- encuesta de suscripcion   --}}
<script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script>

{{-- encuesta de actualizacion --}}
<script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script>


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
