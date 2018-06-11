@extends('templates.landings.principal')
@section('title','Promocion Aspel NOI 8.0')
@push('css-promocion-nuevo-noi')
<link href="/css/landings/promocion-nuevo-noi.css" rel="stylesheet" type="text/css"/>
<link href="/css/landings/form-promocion.css" rel="stylesheet"/>
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
                                poderoso
                            </span>
                        </br>
                    </i>
                </h1>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img-left">
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
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 izquierda">
                <img alt="Actualizacion NOI" class="img-responsive" src="/img/img-landings/inelco_promo_izqc_nuevo_noi8.jpg" width="400">
                </img>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 boton-espacio">
                <div align="right" class="boton wow fadeInDown" data-wow-delay="0.5s">
                    <a class="button-adquierelo large radius goContrata ancla2" href="#promociones-noi">
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
                    <img alt="caracteristicas noi" class="img-responsive" src="/img/img-landings/computadora-noi2.png" width="250">
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
                    La nueva versión integra nuevas funcionalidades para tu beneficio. Ahora te ofrece una plataforma tecnológica para mejorar tu experiencia de uso e incluye la nueva versión 1.2 del complemento de nómina, obligatorio para los CFDI en 2017.
                </p>
            </div>
            <div align="right" class="boton wow fadeInDown dis-fis" data-wow-delay="0.5s">
                <a href="/descargas/Disposiciones-fiscales-para-la-nómina-digital-2017.pdf" target="_blank">
                    Disposiciones fiscales para la Nómina Digital 2017
                </a>
            </div>
        </div>
    </div>
</section>
<section class="secciones-noi" id="news-carateristicas">
    <div class="container">
        <h1 class="funciones-nuevas wow fadeInDown" data-wow-delay="0.5s">
            Ahora con nuevas funcionalidades
        </h1>
    </div>
    <div class="news-grid w3l-agile">
        <div class="container">
            <div class="row">
                <div class="col-md-6 news-img img-abajo wow fadeInLeft" data-wow-delay="0.5s">
                    <img alt=" " class="img-responsive" src="/img/img-landings/nuevo-noi/aspel-noi-lo-nuevo-complemento-nomina.png"/>
                </div>
                <div class="col-md-6 news-text texto-arriba wow fadeInRight" data-wow-delay="0.5s">
                    <h3>
                        Nuevas obligaciones de la Nómina Digital
                    </h3>
                    <p>
                        A partir del 1° de enero de 2017, los Recibos de Nómina Electrónicos deben contener de manera obligatoria el complemento versión 1.2, que proporcionará información más detallada sobre el pago que los patrones realizan a los trabajadores.¡Hazlo con tiempo!
                    </p>
                    <p>
                        Asegura la deducción de la Nómina en 3 pasos:
                    </p>
                    <ul>
                        <li>
                            Registra los datos del emisor
                        </li>
                        <li>
                            Configura la Nómina
                        </li>
                        <li>
                            Agrega los datos del trabajador
                        </li>
                    </ul>
                </div>
                <div class="clearfix">
                </div>
            </div>
        </div>
    </div>
    <div class="news-grid">
        <div class="container">
            <div class="row">
                <div class="col-md-6 news-text two wow fadeInLeft" data-wow-delay="0.5s">
                    <h3>
                        Fácil asociación de los CFDI a las pólizas
                    </h3>
                    <p>
                        Realiza en segundos el envío automático de los CFDI de tus recibos de nómina al depósito de documentos, para asociarlos a las pólizas desde la interfaz con Aspel-COI.
                    </p>
                </div>
                <div class="col-md-6 news-img two wow fadeInRight" data-wow-delay="0.5s">
                    <img alt=" " class="img-responsive" src="/img/img-landings/nuevo-noi/aspel-noi-lo-nuevo-envio-cfdi-coi.png"/>
                </div>
                <div class="clearfix">
                </div>
            </div>
        </div>
    </div>
    <div class="news-grid w3l-agile">
        <div class="container">
            <div class="row">
                <div class="col-md-6 news-img img-abajo wow fadeInLeft" data-wow-delay="0.5s">
                    <img alt=" " class="img-responsive" src="/img/img-landings/nuevo-noi/aspel-noi-lo-nuevo-presentacion-noi.png"/>
                </div>
                <div class="col-md-6 news-text texto-arriba2 wow fadeInRight" data-wow-delay="0.5s">
                    <h3>
                        Plataforma tecnológica que mejora la experiencia de uso
                    </h3>
                    <ul>
                        <li>
                            Nuevo diseño con mejoras en cada menú, iconos y temas personalizados.
                        </li>
                        <li>
                            Práctica barra de búsqueda, que localiza más rápido la información y facilita tu trabajo.
                        </li>
                        <li>
                            Menú intuitivo que integra todas las funciones relacionadas con temas de tu interés en una sola sección.
                        </li>
                    </ul>
                </div>
                <div class="clearfix">
                </div>
            </div>
        </div>
    </div>
    <div class="news-grid">
        <div class="container">
            <div class="row">
                <div class="col-md-6 news-text two wow fadeInLeft" data-wow-delay="0.5s">
                    <h3>
                        Catálogo de métodos de pago
                    </h3>
                    <p>
                        Todos los contribuyentes que emitan recibos de nómina electrónicos deberán incorporar al CFDI la clave correspondiente al método de pago, de acuerdo al catálogo de opciones publicado por el SAT.
                    </p>
                    <p>
                        Aspel-NOI 8.0 cumple con esta obligación de forma práctica y sencilla.
                    </p>
                </div>
                <div class="col-md-6 news-img two wow fadeInRight" data-wow-delay="0.5s">
                    <img alt=" " class="img-responsive" src="/img/img-landings/nuevo-noi/aspel-noi-lo-nuevo-metodo-de-pago.png"/>
                </div>
                <div class="clearfix">
                </div>
            </div>
        </div>
    </div>
    <div class="news-grid w3l-agile">
        <div class="container">
            <div class="row">
                <div class="col-md-6 news-img img-abajo wow fadeInLeft" data-wow-delay="0.5s">
                    <img alt=" " class="img-responsive" src="/img/img-landings/nuevo-noi/aspel-noi-lo-nuevo-ventana-sar-infonavit.png"/>
                </div>
                <div class="col-md-6 news-text texto-arriba wow fadeInRight" data-wow-delay="0.5s">
                    <h3>
                        Proyección SAR e INFONAVIT
                    </h3>
                    <ul>
                        <li>
                            Ahora obtén el reporte de la proyección SAR e INFONAVIT que incluye los cambios en el cálculo de amortización del crédito.
                        </li>
                        <li>
                            Incluye el cálculo para determinar la amortización para "Veces de salario" y "Cuota fija".
                        </li>
                        <li>
                            Y se agregó el campo “Seguro de daños de vivienda”.
                        </li>
                    </ul>
                </div>
                <div class="clearfix">
                </div>
            </div>
        </div>
    </div>
    <div class="news-grid">
        <div class="container">
            <div class="row">
                <div class="col-md-6 news-text two wow fadeInLeft" data-wow-delay="0.5s">
                    <h3>
                        Fácil identificación de CFDI
                    </h3>
                    <p>
                        En las pólizas de pago de nóminas detalladas por percepciones y deducciones que se generan en Aspel-NOI, ahora puedes distinguir fácilmente los CFDI correspondientes a los recibos de los trabajadores.
                    </p>
                </div>
                <div class="col-md-6 news-img two wow fadeInRight" data-wow-delay="0.5s">
                    <img alt=" " class="img-responsive" src="/img/img-landings/nuevo-noi/aspel-noi-lo-nuevo-identificacion-cfdi.png"/>
                </div>
                <div class="clearfix">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="secciones-noi" id="barra-solida">
    <div class="fondo-morado">
        <div class="container">
            <h2 class="text-center wow fadeInDown" data-wow-delay="0.5s">
                ¿Aún no tienes Aspel NOI?
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

<section class="secciones-noi" id="promociones-noi">
    <div class="container">
        <div class="priceing-table-main">
            <!-- suscripcion-->
            <div class="col-md-4 price-grid">
                <h4 class="text-center">
                    ¿No deseas comprar Aspel NOI?
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
                                Aspel NOI 8.0
                            <br>
                               Suscripción Mensual 
                            </br>
                        </h4>
                        <h3>
                            $328
                        </h3>
                        
                    </div>
                    <div class="incluye">
                        <h5>
                            Incluye:
                        </h5>
                        <ul>
                            <li>
                                Licencia Aspel COI 8.0
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
                                20% de descuento en
                                <ul>
                                    <li>
                                        Póliza de Asesoría y Soporte
                                    </li>
                                </ul>
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
                            <a id="comprar" href="#renta" data-toggle="modal" data-target="#login-modal">
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
                               Aspel NOI 8.0
                               <br>
                               Licencia Permanente
                            </br>
                        </h4>
                        <h3>
                           $5,799
                        </h3>
                        
                    </div>
                    <div class="incluye">
                        <h5>
                            Incluye:
                        </h5>
                       <ul>
                            <li>
                                Licencia Permanente Aspel NOI 8.0 ($5,799)
                                <ul>
                                    <li>
                                            1 usuario / 99 empresas
                                    </li>
                                  
                                </ul>
                            </li>

                            

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
                                Ahorro de $1,933
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
                            <a id="comprar" href="#licencia" data-toggle="modal" data-target="#licencia-modal">
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
                            Aspel NOI 8.0
                            <br>
                               Actualización
                            </br>
                        </h4>
                        <h3>
                         $3,499
                        </h3>
                    </div>
                    <div class="incluye">
                        <h5>
                            Incluye:
                        </h5>
                       <ul>
                            <li>
                                Licencia Actualización Aspel NOI 8.0 ($3,499)
                                <ul>
                                    <li>
                                            1 usuario / 99 empresas
                                    </li>
                                  
                                </ul>
                            </li>

                            
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
                            <li>
                                Ahorro de $1,030
                            </li>
                        </ul>
                       
                      
                        <p>
                         <h6>*Precio en Moneda Nacional + IVA</h6>
                         <h6>*No incluye servicios de instalación</h6>
                         <h6>.</h6>   
                        </p>
                    </div>
                    <div class="price-gd-bottom">
                        <div class="price-selet pric-sclr1">
                            <a id="comprar" href="#actualizacion" data-toggle="modal" data-target="#actualizacion-modal">
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
