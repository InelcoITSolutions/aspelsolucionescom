@extends('templates.landings-sae.principal')
@section('title','Promoción Aspel SAE 7.0')
@push('css-promocion-nuevo-noi')
<link href="/css/landings-SAE/promocion-sae.css" rel="stylesheet" type="text/css"/>

<!--<link href="/css/landings-SAE/form-promocion.css" rel="stylesheet"/>-->

{{-- IMAGEN QUE SE muestra cuando se comparte en redes sociales --}}
<link href="https://www.aspelsoluciones.com/img/share/nuevo-sae.png" rel="image_src"/> 
        

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
                <img alt="COI 8.0" class="img-responsive" src="/img/img-landings-sae/aspelsoluciones-sae70.png" width="400">
                </img>
            </div>
        </div>
        
        <div class="row">
            <h3 class="slogan wow fadeInDown" data-wow-delay="0.5s">
                El Sistema Administrativo Empresarial más utilizado 
                <br>
                en México y el único que pone en control total a tu negocio.
                </br>
            </h3>
        </div>

        <div class="row wow fadeInDown" data-wow-delay="0.5s">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 izquierda">
                <img alt="Actualizacion COI" class="img-responsive" src="/img/precios-julio/aspelsoluciones-sae-sus.png" width="400">
                </img>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 boton-espacio">
                <div align="right" class="boton wow fadeInDown" data-wow-delay="0.5s">
                    <a class="button-adquierelo large radius goContrata ancla2" href="#promociones-sae">
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
            Aspel SAE, el Sistema Administrativo Empresarial más vendido en México

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
                            Cumple al 100% con los cambios del Anexo 20 V.3.3
                        </h3>
                        <p>
                        Versión de Factura Electrónica,
                        <br>
                        complemento de Nómina,
                        <br>
                        complemento Recepción de Pagos,
                        <br>
                        cancelación de CFDI’s
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
                            Conecta tus sucursales con SAE mi propia Nube
                        </h3>
                         <p>
                         Configura el servicio de Internet Information Services (IIS) en tu Servidor e interactúa con tu equipo de trabajo por medio de una Red Privada Virtual (VPN)
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
                            Sistema Aspel -> sistemas Aspel 

                        </h3>
                        <p>
                        Tiene interfaz con los Sistemas: 
                        <span id="int-coi">Aspel COI</span>,
                        <span id="int-banco">Aspel BANCO</span>,
                        <span id="int-prod">Aspel PROD</span> y 
                        <span id="int-caja">Aspel CAJA</span>. 
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div align="center" class="imagen">
                        <img alt="logo COI" class="img-responsive" height="250" src="/img/aspel-SAE.png" width="250">
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
                            Con un solo clic factura masivamente a tus clientes
                        </h3>
                        <p>
                            Una herramienta muy eficiente es la facturacion masiva en la que ahorraremos tiempo para llevar acabo las facturas
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
                            Maneja tu negocio como 
                            <br>
                            Punto de Venta
                        </h3>
                        <p>
                            Controla eficientemente un punto de venta, te proporciona el corte de caja y una novedosa opción para facturar las notas de venta desde un sitio web. 
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
                            Integración automática del método de pago en CFDI*
                        </h3>
                           
                        
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
                    SAE 7.0
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
                    Aspel SAE
                </h2>
                <p>
                     Te permite controlar inventarios, clientes, facturación, cuentas por cobrar, vendedores, compras, proveedores y cuentas por pagar, automatizando eficientemente los procesos administrativos 
                </p>
            </div>
            <center>
                <div class="col-md-4 img-izquierda wow fadeInRight" data-wow-delay="0.5s">
                    <img alt="caracteristicas coi" class="img-responsive" src="/img/img-landings-sae/iis-collage_sae.png" width="350">
                    </img>
                </div>
            </center>
        </div>

        <div class="row">
            <center>
                <div class="col-md-4 img-derecha wow fadeInLeft" data-wow-delay="0.5s">
                    <img alt="caracteristicas coi" class="img-responsive img-center" src="/img/aspel-SAE.png" width="250">
                    </img>
                </div>
            </center>
            <div class="col-md-8 text-right wow fadeInRight" data-wow-delay="0.5s">
                <h2>
                    Nuevo y poderoso SAE 7.0
                </h2>
                <p>
                    Cumple con las nuevas dispociciones fiscales correspondientes a alas reglas de validación del Anexo 20
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
                        <img alt="Interfaces Sistemas Aspel" class="img-responsive" src="/img/img-landings-sae/licencia/aspelsoluciones-productos-sae-control-total-de-tu-empresa.png"/>
                </div>
            </div>

            <div class="col-md-4">    
                <div class="text">
                    <h3>
                      Control total de tu empresa
                    </h3>
                    <p>
                       El ciclo de compra-venta está cubierto totalmente, desde el registro del producto hasta la Factura Electrónica, lista para ser entregada al cliente.
                    </p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-responsive">
                        <img alt="Interfaces Sistemas Aspel" class="img-responsive" src="/img/img-landings-sae/licencia/aspelsoluciones-productos-sae-coi-contabilidad-electronica.png"/>
                </div>
            </div>
            <div class="col-md-4">    
                <div class="text">
                    <h3>
                         Contabilidad Electrónica
                    </h3>
                    <p>
                        Cumple fácilmente los requisitos de la Contabilidad Electrónica, al realizar la interfaz con Aspel COI, en las pólizas de ventas y compras, automáticamente se relacionan los folios fiscales de los CFDI. 
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
                        <img alt="Interfaces Sistemas Aspel" class="img-responsive" src="/img/img-landings-sae/licencia/aspelsoluciones-productos-sae-conoce-cliente.png"/>
                </div>
            </div>
            <div class="col-md-4">    
                <div class="text">
                    <h3>
                      Conoce mejor a tu cliente
                    </h3>
                    <p>
                       En una sola sección tendrás los saldos, pedidos pendientes, productos apartados, estados de cuenta, antigüedad de saldos, productos más vendidos, ventas mensuales y citas programadas, para un seguimiento sencillo.
                    </p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-responsive">
                        <img alt="Interfaces Sistemas Aspel" class="img-responsive" src="/img/img-landings-sae/licencia/aspelsoluciones-productos-sae-administracion-del-punto-de-venta.png"/>
                </div>
            </div>
            <div class="col-md-4">    
                <div class="text">
                    <h3>
                         Punto de venta
                    </h3>
                    <p>
                        Controla eficientemente un punto de venta, te proporciona el corte de caja y una novedosa opción para facturar las notas de venta desde un sitio web.
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
                        <img alt="Interfaces Sistemas Aspel" class="img-responsive" src="/img/img-landings-sae/licencia/aspelsoluciones-productos-sae-app-sae-movil.png"/>
                </div>
            </div>
            <div class="col-md-4">    
                <div class="text">
                    <h3>
                       Aplicación SAE Móvil
                    </h3>
                    <p>
                        Levanta pedidos, da de alta clientes, consulta los inventarios y sus existencias, en el momento y en el lugar en el que te encuentres, a través de un cliente web y/o dispositivos móviles.
                    </p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="img-responsive">
                        <img alt="Interfaces Sistemas Aspel" class="img-responsive" src="/img/img-landings-sae/licencia/aspelsoluciones-productos-sae-interfaces.png"/>
                </div>
            </div>
            <div class="col-md-4">    
                <div class="text">
                    <h3>
                        Interfaces Sistemas Aspel
                    </h3>
                    <p>
                        Aspel SAE 6.0 tiene interfaz con los Sistemas: Aspel COI, Aspel BANCO, Aspel PROD y Aspel CAJA. Aprovecha todas las interfaces y haz mejores negocios.
                    </p>
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
                ¿Aún no tienes Aspel SAE?
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

<section>
<div class="container">
    <div class="row titulo wow bounceIn" data-wow-delay="0.5s">
        <h2 class="text-center">El nuevo Aspel SAE 7.0 esta disponible en licenciamiento permanente y en suscripción mensual para que elijas la opción mas conveniente para tu empresa.
</h2>
    </div>
</div>    
</section>
{{-- --}}
<section class="secciones-noi" id="promociones-sae">
    <div class="container">
        <div class="priceing-table-main">
            <!-- suscripcion-->
            <div class="col-md-4 price-grid">
                <h4 class="text-center">
                    ¿No deseas comprar Aspel SAE?
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
                                Aspel SAE 7.0
                            <br>
                               Suscripción Mensual 
                            </br>
                        </h4>
                        <h3>
                            $517
                        </h3>
                        
                    </div>
                    <div class="incluye">
                        <h5>
                            Incluye:
                        </h5>
                        <ul>
                            <li>
                                Licencia Aspel SAE 7.0
                                <ul>
                                    <li>
                                            1 usuario / 99 empresas
                                    </li>
                                </ul>
                            </li>

                            <li>
                                Suscripción mensual
                               
                            </li>

                            {{--
                            <li>
                                1 curso en línea ($999)
                               
                            </li>

                            <li>
                                20% de descuento en
                                <ul>
                                    <li>
                                        Póliza de Asesoría y Soporte
                                    </li>
                                </ul>
                            </li>
                            <li >
                                Ahorro de $1,025
                            </li>
                            --}}
                            <li>
                                Timbres Ilimitados
                            </li>
                         
                        </ul>

                        <p>
                         <h6>*Precio en Moneda Nacional + IVA</h6>
                         <h6>*No incluye servicios de instalación</h6>   
                        </p>
                      
                        
                    </div>
                    <div class="price-gd-bottom">
                        <div class="price-selet pric-sclr1">
                            <a id="comprar" href='https://survey.zohopublic.com/zs/JmCuXP' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
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
                               Aspel SAE 7.0
                               <br>
                               Licencia Permanente
                            </br>
                        </h4>
                        <h3>
                           $10,225
                        </h3>
                        
                    </div>
                    <div class="incluye">
                        <h5>
                            Incluye:
                        </h5>
                       <ul>
                            <li>
                                Licencia Permanente Aspel SAE 7.0 ($10,225)
                                <ul>
                                    <li>
                                            1 usuario / 99 empresas
                                    </li>
                                  
                                </ul>
                            </li>

                        <br>

                            {{--
                            <li>
                                1 curso en línea ($999)
                               
                            </li>

                            <li>
                                20% de descuento en
                                <ul>
                                    <li>
                                        Póliza de Asesoría y Soporte
                                    </li>
                                </ul>
                            </li>
                            <li >
                                Ahorro de $1,025
                            </li>
                            --}}
                            <br>
                            
                        </ul>
                        
                        <p>
                         <h6>*Precio en Moneda Nacional + IVA</h6>
                         <h6>*No incluye servicios de instalación</h6>   
                        </p>
                    </div>
                    <div class="price-gd-bottom">
                        <div class="price-selet pric-sclr1">
                            <a id="comprar" href='https://survey.zohopublic.com/zs/WwCufe' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
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
                            Aspel SAE 7.0
                            <br>
                               Actualización
                            </br>
                        </h4>
                        <h3>
                         $6,620
                        </h3>
                    </div>
                    <div class="incluye">
                        <h5>
                            Incluye:
                        </h5>
                       <ul>
                            <li>
                                Licencia Actualización Aspel SAE 7.0 ($6,620)
                                <ul>
                                    <li>
                                            1 usuario / 99 empresas
                                    </li>
                                  
                                </ul>
                            </li>
                        <br>
                        <br>
                            {{--
                            <li>
                                1 curso en línea ($999)
                               
                            </li>

                            <li>
                                20% de descuento en
                                <ul>
                                    <li>
                                        Póliza de Asesoría y Soporte
                                    </li>
                                </ul>
                            </li>
                            <li >
                                Ahorro de $1,025
                            </li>
                            --}}
                        </ul>
                       
                        <p>
                         <h6>*Precio en Moneda Nacional + IVA</h6>
                         <h6>*No incluye servicios de instalación</h6>
                         
                        </p>
                    </div>
                    <div class="price-gd-bottom">
                        <div class="price-selet pric-sclr1">
                            <a id="comprar" href='https://survey.zohopublic.com/zs/poCueW' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
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


{{-- ENCUESTA SUSCRIPCION --}}
<script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script>

{{-- ENCUESTA LICENCIA--}}
<script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script>

{{-- ENCUESTA ACTUALIZACION--}}
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
