@extends('templates.main')
@section('title','Inicio')

@push('add-css')
    <link href="/css/products-styles.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/css/modal-promociones.css">
@endpush

@section('slider')
    @include('partials.slider')
@stop
@section('content')

    
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
 


{{--   --}}
<section id="new-noticias">
    <div class="container">
        <br>
            <div class="noticias-1">
            <h1 class="container-fluid wow fadeInLeft" data-wow-delay="0.5s">
            Nuevos lanzamientos
            </h1>
            <br>
            </div>    
   
    <div class="row" >
   
    <div class="col-xs-12 col-sm-12 col-md-4 notice wow fadeInLeft" data-wow-delay="0.5s">
 
    <!-- normal -->
    <div class="ih-item circle effect1">
    <a href="{{url('nuevo-noi')}}" target="_blank">
        <div class="spinner">
            
        </div>
        <div class="img"><img src="images/assets/10.png" alt="img">
        </div>
        <div class="info">
          <div class="info-back">
            <h3>Actualizate</h3>
            <p><span id="noticias-descrip"></span> La nueva versión integra nuevas funcionalidades para tu beneficio. 
            </p>
          </div>
        </div>
        </a>
        </div>
    <!-- end normal -->
 
  </div>
   
    
  <div class=" col-xs-12 col-sm-12 col-md-4 notice wow fadeInLeft" data-wow-delay="0.5s">
    
    <!-- normal -->
    <div class="ih-item circle effect1">
    <a href="{{url('nuevo-coi')}}" target="_blank">
        <div class="spinner"></div>
        <div class="img"><img src="images/assets/11.png" alt="img"></div>
        <div class="info">
          <div class="info-back">
            <h3>Preventa</h3>
            <p>Crece el número de empresas de 99 a 999</p>
          </div>
        </div></a></div>
    <!-- end normal -->
 
  </div>
 
  <div class="col-xs-12 col-sm-12 col-md-4 notice wow fadeInLeft" data-wow-delay="0.5s">
 
    <!-- colored -->
    <div class="ih-item circle colored effect1"><a href="{{url('nuevo-sae')}}" target="_blank">
        <div class="spinner"></div>
        <div class="img"><img src="images/assets/9.png" alt="img"></div>
        <div class="info">
          <div class="info-back">
            <h3>Preventa</h3>
            <p>Nueva plataforma tecnológica que mejora tu experiencia de uso. </p>
          </div>
        </div></a></div>
    <!-- end colored -->
 
  </div>
</div>
 </div>
</section>

<!-- aqui comienza aspel soluciones  3 iconos -->
<section id="aspelsoluciones">
    <div class="welcome services" id="services">
        <div class="container">
            <h3 class="title wow fadeInDown" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                Aspel Soluciones 
            </h3>
            <p class="urna wow fadeInDown" data-wow-delay="0.5s">
                Ofrece una gran variedad de soluciones que optimizarán el desempeño de tu empresa mediante el uso de la tecnología y nuestros servicios de calidad premium
            </p>
            <div class="services-info">
                <div class="col-md-4 services-grids wow fadeInDown" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
                    <a class="efecto-seccion" href="#software">
                        <div class="service">
                            <div class="icon-holder">
                                <span class="glyphicon icon-display">
                                </span>
                            </div>
                            <h4 class="heading">
                                Software
                            </h4>
                            <p class="text">
                                El mejor software de administración empresarial Aspel, entre otras soluciones
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 services-grids wow fadeInDown" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
                    <a class="efecto-seccion" href="#soluciones">
                        <div class="service">
                            <div class="icon-holder">
                                <span class="glyphicon icon-cogs">
                                </span>
                            </div>
                            <h4 class="heading">
                                Soluciones
                            </h4>
                            <p class="text">
                                Contamos con las soluciones de equipo y hardware que necesitas para tu negocio
                            </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 services-grids wow fadeInDown" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
                    <a class="efecto-seccion" href="#servicios">
                        <div class="service">
                            <div class="icon-holder">
                                <span class="glyphicon icon-tools">
                                </span>
                            </div>
                            <h4 class="heading">
                                Servicios
                            </h4>
                            <p class="text">
                                Ofrecemos el servicio más completo y profesional para darte la tranquilidad y seguridad que mereces
                            </p>
                        </div>
                    </a>
                </div>
                <div class="clearfix">
                </div>
            </div>
        </div>
    </div>

</section>

<!-- soluciones por actidad-->
<section class="actividades" id="soluciones">
    <h3 class="head wow fadeInDown" data-wow-delay="0.5s">
        Soluciones por actividades
    </h3>
    <p class="urna wow fadeInDown" data-wow-delay="0.5s">
        Elige el giro de tu empresa y conoce los sistemas y las soluciones que tenemos para ella.
    </p>
    <div class="container">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <article class="giros">
                <i aria-hidden="true" class="fa fa-area-chart">
                </i>
                <h2>
                    Empresas Comercializadoras
                </h2>
                <a href="{{url('productos/empresas-comercializadoras')}}">
                    <div class="giros_hoverly">
                        <i aria-hidden="true" class="fa fa-area-chart">
                        </i>
                        <h2>
                            Empresas Comercializadoras
                        </h2>
                        <p>
                            Contamos con los mejores sistemas administrativos Aspel para este giro de empresas, visita y conocelos.
                        </p>
                    </div>
                </a>
            </article>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="giros2">
                <i aria-hidden="true" class="fa fa-graduation-cap">
                </i>
                <h2>
                    Instituciones Educativas
                </h2>
                <a href="{{url('productos/instituciones-educativas')}}">
                    <div class="giros_hoverly">
                        <i aria-hidden="true" class="fa fa-graduation-cap">
                        </i>
                        <h2>
                            Instituciones Educativas
                        </h2>
                        <p>
                            Contamos con los mejores sistemas administrativos Aspel para este giro de empresas, visita y conocelos.
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="giros3">
                <i aria-hidden="true" class="fa fa-pie-chart">
                </i>
                <h2>
                    Despachos Contables y Nómina
                </h2>
                <a href="{{url('productos/despachos-contables-y-nomina')}}">
                    <div class="giros_hoverly">
                        <i aria-hidden="true" class="fa fa-pie-chart">
                        </i>
                        <h2>
                            Despachos Contables y Nómina
                        </h2>
                        <p>
                            Contamos con los mejores sistemas administrativos Aspel para este giro de empresas, visita y conocelos.
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="giros4">
                <i aria-hidden="true" class="fa fa-mouse-pointer">
                </i>
                <h2>
                    Facturación Electrónica
                </h2>
                <a href="{{url('productos/facturacion-electronica')}}">
                    <div class="giros_hoverly">
                        <i aria-hidden="true" class="fa fa-mouse-pointer">
                        </i>
                        <h2>
                            Facturación Electrónica
                        </h2>
                        <p>
                            Contamos con los mejores sistemas administrativos Aspel para este giro de empresas, visita y conocelos.
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="giros5">
                <i aria-hidden="true" class="fa fa-cog">
                </i>
                <h2>
                    Empresa de Manofactura
                </h2>
                <a href="{{url('productos/empresas-de-manofactura')}}">
                    <div class="giros_hoverly">
                        <i aria-hidden="true" class="fa fa-cog">
                        </i>
                        <h2>
                            Empresa de Manofactura
                        </h2>
                        <p>
                            Contamos con los mejores sistemas administrativos Aspel para este giro de empresas, visita y conocelos.
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
            <div class="giros6">
                <i aria-hidden="true" class="fa fa-credit-card">
                </i>
                <h2>
                    Punto de Venta
                </h2>
                <a href="{{url('productos/punto-de-venta')}}">
                    <div class="giros_hoverly">
                        <i aria-hidden="true" class="fa fa-credit-card">
                        </i>
                        <h2>
                            Punto de Venta.
                        </h2>
                        <p>
                            Contamos con los mejores sistemas administrativos Aspel para este giro de empresas, visita y conocelos.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section> <!--soluciones por actividad -->

<!-- empieza seccion de software se mostraran los productos de aspel -->
<section id="software">
    <div class="w3-categories">
        <h3 class="head wow fadeInDown" data-wow-delay="0.5s">
            Software Administrativo
        </h3>
        <p class="urna wow fadeInDown" data-wow-delay="0.5s">
            Ofrecemos el software líder para emprendedores, profesionistas y PyMES
        </p>
        <div class="container">
           
            <div class="col-md-3 wow fadeInDown" data-wow-delay="0.5s">
                <div class="focus-grid w3layouts-boder1">
                    <a class="btn-8" href="{{url('aspel-sae')}}">
                        <div class="focus-border">
                            <div class="focus-layout">
                                <div class="focus-image">
                                    <img alt="" src="/img/aspel-SAE.png" width="90">
                                    </img>
                                </div>
                                <h4 class="clrchg">
                                    Compra-Venta
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3 wow fadeInDown" data-wow-delay="0.5s">
                <div class="focus-grid w3layouts-boder2">
                    <a class="btn-8" href="{{url('aspel-coi')}}">
                        <div class="focus-border">
                            <div class="focus-layout2">
                                <div class="focus-image">
                                    <img alt="" src="/img/aspel-COI.png" width="90">
                                    </img>
                                </div>
                                <h4 class="clrchg">
                                    Contabilidad
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 wow fadeInDown" data-wow-delay="0.5s">
                <div class="focus-grid w3layouts-boder3">
                    <a class="btn-8" href="{{url('aspel-noi')}}">
                        <div class="focus-border">
                            <div class="focus-layout3">
                                <div class="focus-image">
                                    <img alt="" src="/img/aspel-NOI.png" width="90">
                                    </img>
                                </div>
                                <h4 class="clrchg">
                                    Nómina
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 wow fadeInDown" data-wow-delay="0.5s">
                <div class="focus-grid w3layouts-boder4">
                    <a class="btn-8" href="{{url('aspel-caja')}}">
                        <div class="focus-border">
                            <div class="focus-layout4">
                                <div class="focus-image">
                                    <img alt="" src="/img/aspel-CAJA.png" width="90">
                                    </img>
                                </div>
                                <h4 class="clrchg">
                                    Punto de venta
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 wow fadeInDown" data-wow-delay="0.5s">
                <div class="focus-grid w3layouts-boder5">
                    <a class="btn-8" href="{{url('aspel-banco')}}">
                        <div class="focus-border">
                            <div class="focus-layout5">
                                <div class="focus-image">
                                    <img alt="" src="/img/aspel-BANCO.png" width="100">
                                    </img>
                                </div>
                                <h4 class="clrchg">
                                    Bancario
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 wow fadeInDown" data-wow-delay="0.5s">
                <div class="focus-grid w3layouts-boder6">
                    <a class="btn-8" href="{{url('aspel-prod')}}">
                        <div class="focus-border">
                            <div class="focus-layout6">
                                <div class="focus-image">
                                    <img alt="" src="/img/aspel-PROD.png" width="90">
                                    </img>
                                </div>
                                <h4 class="clrchg">
                                    Producción
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 wow fadeInDown" data-wow-delay="0.5s">
                <div class="focus-grid w3layouts-boder7">
                    <a class="btn-8" href="{{url('aspel-facture')}}">
                        <div class="focus-border">
                            <div class="focus-layout7">
                                <div class="focus-image">
                                    <img alt="" src="/img/aspel-FACTURE.png" width="90">
                                    </img>
                                </div>
                                <h4 class="clrchg">
                                    Facturación
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="col-md-3 wow fadeInDown" data-wow-delay="0.5s">
                <div class="focus-grid w3layouts-boder8">
                    <a class="btn-8" href="{{url('aspel-adm')}}">
                        <div class="focus-border">
                            <div class="focus-layout8">
                                <div class="focus-image">
                                    <img alt="" src="/img/aspel-ADM.png" width="90">
                                    </img>
                                </div>
                                <h4 class="clrchg">
                                    Administración Movil
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- boton para el sae nube-->
            <div class="col-md-3 wow fadeInDown" data-wow-delay="0.5s">
                <div class="focus-grid w3layouts-boder9">
                    <a class="btn-8" href="{{url('aspel-sae-nube')}}">
                        <div class="focus-border">
                            <div class="focus-layout9">
                                <div class="focus-image">
                                    <img alt="" src="/img/aspel-SAE_Nube.png" width="103">
                                    </img>
                                </div>
                                <h4 class="clrchg">
                                    Máxima movilidad
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
             <!-- ADM tienda--> <!-- adm tienda-->
            <div class="col-md-3 wow fadeInDown" data-wow-delay="0.5s">
                <div class="focus-grid w3layouts-boder10">
                    <a class="btn-8" href="#">
                        <div class="focus-border">
                            <div class="focus-layout10">
                                <div class="focus-image">
                                    <img alt="" src="/img/aspel-adm--tienda.png" width="90">
                                    </img>
                                </div>
                                <h4 class="clrchg">
                                    App punto de venta
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>


             <div class="col-md-3 wow fadeInDown" data-wow-delay="0.5s">
                <div class="focus-grid w3layouts-boder11">
                    <a class="btn-8" href="#">
                        <div class="focus-border">
                            <div class="focus-layout11">
                                <div class="focus-image">
                                    <img alt="" src="/img/aspel-espacio.png" width="90">
                                    </img>
                                </div>

                                <h4 class="clrchg">
                                    Buzón Inteligente 
                                </h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="clearfix">
            </div>


        </div>
    </div>
</section>
<!-- termina seccion de software se mostraran los productos de aspel -->

    <section class="seccion-fondo inicio-promocion">
        <div class="fondo-promocion">
            <div class="container">
                <div class="wow bounceInDown" data-wow-delay="0.2s">
                    <h2 class="title-h2">
                        Aprovecha las promociones que tenemos para ti.
                    </h2>
                    <a href="{{ url('/promociones') }}" class="btn btn-promocion btn-lg center-block" role="button">
                        Conocer promociones
                    </a>
                </div>
            </div>
        </div>
    </section>

<!-- apartado de servicios -->
<section class="steps" id="servicios">
    <div class="container">
        <h3 class="head wow fadeInDown" data-wow-delay="0.5s">
            Nuestras soluciones
        </h3>
        <p class="urna wow fadeInDown" data-wow-delay="0.5s">
            Consultores para asesorarte e implementar tus sistemas de la mejor manera de acuerdo a los procedimientos establecidos por Aspel.
        </p>
        <div class="wthree_steps_grids">
            <div class="col-md-4 wthree_steps_grid wow fadeInDown" data-wow-delay="0.5s">
                <div class="wthree_steps_grid1 wthree_steps_grid1_after">
                    <div class="wthree_steps_grid1_sub">
                        <i aria-hidden="true" class="fa fa-download">
                        </i>
                    </div>
                </div>
                <h4>
                    <a href="servicios#implementacion">
                        Implementación
                    </a>
                </h4>
                <p>
                    Realizamos la instalación de los sistema Aspel que solicites.
                </p>
            </div>
            <div class="col-md-4 wthree_steps_grid wow fadeInDown" data-wow-delay="0.5s">
                <div class="wthree_steps_grid1 wthree_steps_grid1_after">
                    <div class="wthree_steps_grid1_sub">
                        <i aria-hidden="true" class="fa fa-pencil-square-o">
                        </i>
                    </div>
                </div>
                <h4>
                    <a href="servicios#asesoria">
                        Asesoria
                    </a>
                </h4>
                <p>
                    Te asesoramos en múltiples plataformas para que aproveches al máximo tu Sistema Aspel.
                </p>
            </div>
            <div class="col-md-4 wthree_steps_grid wow fadeInDown" data-wow-delay="0.5s">
                <div class="wthree_steps_grid1">
                    <div class="wthree_steps_grid1_sub">
                        <i aria-hidden="true" class="fa fa-check-square-o">
                        </i>
                    </div>
                </div>
                <h4>
                    <a href="servicios#consultoria">
                        Consultoria
                    </a>
                </h4>
                <p>
                    Te enseñamos a como mejorar la productividad de tu empresa.
                </p>
            </div>
            <div class="col-md-4 wthree_steps_grid wow fadeInDown" data-wow-delay="0.5s">
                <div class="wthree_steps_grid1 wthree_steps_grid1_after">
                    <div class="wthree_steps_grid1_sub">
                        <i aria-hidden="true" class="fa fa-desktop">
                        </i>
                    </div>
                </div>
                <h4>
                    <a href="servicios#capacitacion">
                        Capacitación
                    </a>
                </h4>
                <p>
                    Si ya cuentas con un sistema Aspel. Ven, nosotros te enseñamos a usarlo.
                </p>
            </div>
            <div class="col-md-4 wthree_steps_grid wow fadeInDown" data-wow-delay="0.5s">
                <div class="wthree_steps_grid1 wthree_steps_grid1_after">
                    <div class="wthree_steps_grid1_sub">
                        <i aria-hidden="true" class="fa fa-users">
                        </i>
                    </div>
                </div>
                <h4>
                    <a href="servicios#cursos-y-talleres">
                        Cursos y Talleres
                    </a>
                </h4>
                <p>
                    Impartimos talleres acerca de los productos Aspel y conferencias en linea
                </p>
            </div>
            <div class="col-md-4 wthree_steps_grid wow fadeInDown" data-wow-delay="0.5s">
                <div class="wthree_steps_grid1 ">
                    <div class="wthree_steps_grid1_sub">
                        <i aria-hidden="true" class="fa fa-wrench">
                        </i>
                    </div>
                </div>
                <h4>
                    <a href="servicios#soporte">
                        Soporte
                    </a>
                </h4>
                <p>
                    ¿Tienes dudas con tu sistema Aspel?. Contamos con personal de soporte especializado en cada uno de los sistemas
                </p>
            </div>
            <div class="clearfix">
            </div>
        </div>
    </div>
</section>

<!-- apartado de hardware-->
<section class="actividades" id="soluciones1">
    <h3 class="head wow fadeInDown" data-wow-delay="0.5s">
        Hardware
    </h3>
    <p class="urna wow fadeInDown" data-wow-delay="0.5s">
        Contamos con todo lo necesario para poner en marcha tu negocio.
    </p>
    <div class="container wow fadeInDown" data-wow-delay="0.5s">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <article class="giros10">
                <i aria-hidden="true" class="fa fa-desktop">
                </i>
                <h2>
                   Servidores y equipos de cómputo
                </h2>
                <a href="">
                    <div class="giros1_hoverly">
                        <i aria-hidden="true" class="fa fa-desktop">
                        </i>
                        <h2>
                            Servidores y equipos de cómputo
                        </h2>
                        <p>
                            Encuentra los equipos ideales para la instalación de los sistemas para optimizar los procesos de tu neocio
                        </p>
                    </div>
                </a>
            </article>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="giros20">
                <i aria-hidden="true" class="fa fa-ticket">
                </i>
                <h2>
                    Equipo de punto de venta
                </h2>
                <a href="">
                    <div class="giros1_hoverly">
                        <i aria-hidden="true" class="fa fa-ticket">
                        </i>
                        <h2>
                            Equipo de punto de venta
                        </h2>
                        <p>
                            Encuentra los mejores dispositivos para optimizar los procesos de tu restaurant
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="giros30">
                <i aria-hidden="true" class="fa fa-wifi">
                </i>
                <h2>
                    Redes y comunicaciones
                </h2>
                <a href="">
                    <div class="giros1_hoverly">
                        <i aria-hidden="true" class="fa fa-wifi">
                        </i>
                        <h2>
                            Redes y comunicaciones
                        </h2>
                        <p>
                            Manten tus equipos y dispositivos sincronizados y accesa en tiempo real al flujo de la información de tu negocio.
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <div class="giros40">
                <i aria-hidden="true" class="fa fa-bolt">
                </i>
                <h2>
                    Energía y regulación
                </h2>
                <a href="">
                    <div class="giros1_hoverly">
                        <i aria-hidden="true" class="fa fa-bolt">
                        </i>
                        <h2>
                            Energía y regulación
                        </h2>
                        <p>
                            No pierdas información por falta de energia. Encuentra las soluciones para asegurar tus equipos de cómputo ante cualquier fallo eléctrico.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

@push('add-js')
<script>
    $("#ID_PROMO_POPUP").modal("show");
    window.setTimeout(function(){
     $('#ID_PROMO_POPUP').modal('hide');
  }, 10000); 


    $(document).ready(function() {
     if($(window).width() > 697) {
         $(".img-promocion").attr("src", "/images-new/inelco/promocion/banner/promocion-popup.png");
     } else {
         $(".img-promocion").attr("src", "/images-new/inelco/promocion/banner/promocion-popup-mobile.png");
     }
    }); 
</script>
<script src="/js/jquery.slides.js">
</script>
<script src="/js/home.js">
</script>
<script src="/js/global.js">
</script>
@endpush

@include('partials.popup-auto.sae')
@include('partials.popup-auto.coi')

@include('partials.popup-auto.noi')
@include('partials.popup-auto.facture')
@include('partials.popup-auto.banco')

@include('partials.popup-auto.caja')
@include('partials.popup-auto.sae2')


@stop
