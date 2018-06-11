@extends('templates.landings-promociones.principal')

@section('title','Promociones')

@push('css-promocion-nuevo-noi')
    <link href="/css/landings-promociones/promocion.css" rel="stylesheet" type="text/css"/>
    <!--<link href="/css/landings-SAE/form-promocion.css" rel="stylesheet"/>-->
    {{-- IMAGEN QUE SE muestra cuando se comparte en redes sociales --}}
    <link href="https://www.aspelsoluciones.com/img/share/nuevo-sae.png" rel="image_src"/> 
    {{-- <link rel="stylesheet" href="/css/inelco/mis-estilos.css"> --}}
    <link rel="stylesheet" href="/css/inelco/products-styles.css">
    <link rel="stylesheet" href="/css/promociones/promociones.css">
    <link rel="stylesheet" href="/css/bolsa.css">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet"> 
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

<section class="banner-prod sections" id="banner-promociones">
    <div class="fondo-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text-center center-block">
                        <h2 class="banner-title" align="center">
                            En <span class="special-text">junio</span>
                            <br>
                            ¡Aprovecha nuestras <span class="special-text">grandes</span> promociones!
                        </h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center center-block">
                        <p align="center">
                            <a href="{{ url('/') }}">
                            <img src="/images-new/inelco/logos/aspelsoluciones-logo-blanco.png" alt="" class="img-responsive">
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="promociones">
        <div class="container">
            <div class="row">
{{--                 <div class="col-md-8 col-md-offset-2">

                </div>  
 --}}       </div>
            <div class="row">
                <div class="col-md-4">
                    <p align="center">
                        <img src="/images-new/inelco/promocion/sae-coi-noi-banco/logos/inelco-promocion-sae-coi-noi-banco-logo.png" alt="" id="scnb" class="img-responsive">
                    </p>
                    <br>
                    <h3 align="center">
                        <span class="special-text">Automatización</span> <br/>de procesos
                    </h3>
                </div>
                <div class="col-md-4">
                    <p align="center">
                        Compra el kit <br/><span style="color:#92232f;">Aspel SAE</span>+<span style="color:#009cb5;">Aspel COI</span>
                        +<span style="color:#e36800;">Aspel NOI</span> 
                        <br>y llévate de regalo:
                        <br><span style="color:#4c8b2b;">Aspel BANCO</span><br/> 
                    </p>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <a href='https://survey.zohopublic.com/zs/3fCunm' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;' class="text-center center-block p-contacto-title" style="text-decoration: none" >
                            <button class="btn btn-promo btn-lg">
                                ¡Solicitar ahora!
                            </button>
                        </a>
                        
                        <a href="{{ url('/promocion-sae-coi-noi-banco') }}" class="info" target="_blank">Más información</a>
                    </div>
                </div>
                <hr>
            </div>


            <div class="row separador-vertical">
                <!-- Promoción SAE + BANCO -->
                <div class="col-md-4">
                    <p align="center">
                        <img src="/images-new/inelco/promocion/sae-banco/logos/inelco-promocion-sae-banco-logo-small.png" alt="" class="img-responsive">
                    </p>
                    <br/>
                    <h3 align="center">
                        <span class="special-text">Máximo</span> <br/>control del efectivo
                    </h3>
                    <br/>
                    <p align="center">
                        Combo <br/><span style="color:#92232f;">Aspel SAE</span> + <span style="color:#4c8b2b;">Aspel BANCO</span><br/> a sólo: $12,799*
                    </p>
                    <br>
                    <div class="text-center">
                        <a href='https://survey.zohopublic.com/zs/3fCunm' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;' class="text-center center-block p-contacto-title" style="text-decoration: none" >
                            <button class="btn btn-promo btn-lg">
                                ¡Solicitar ahora!
                            </button>
                        </a>
                        <a href="{{ url('/promocion-sae-banco') }}" class="info" target="_blank">Más información</a>
                    </div>
                </div>

                <!-- Promoción COI + NOI -->
                <div class="col-md-4">
                    <p align="center">
                        <img src="/images-new/inelco/promocion/coi-noi/logos/inelco-promocion-coi-noi-logo.png" alt="" class="img-responsive">
                    </p>
                    <br/>
                    <h3 align="center">
                        <span class="special-text">Excelencia</span> <br/>en el manejo del capital humano
                    </h3>
                        <br>
                        <p align="center">
                             Combo <br/><span style="color:#009cb5;">Aspel COI</span> + <span style="color:#e36800;">Aspel NOI</span><br/> a sólo: $10,199*
                        </p>
                        <br>
                    <div class="text-center">
                        <a href='https://survey.zohopublic.com/zs/3fCunm' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;' class="text-center center-block p-contacto-title" style="text-decoration: none" >
                            <button class="btn btn-promo btn-lg">
                                ¡Solicitar ahora!
                            </button>
                        </a>
                        <a href="{{ url('/promocion-coi-noi') }}" class="info" target="_blank">Más información</a>
                    </div>
                </div>
                <!-- Promoción COI + BANCO -->
                <div class="col-md-4">
                    <p align="center">
                        <img src="/images-new/inelco/promocion/coi-banco/logos/inelco-promocion-coi-banco-logo.png" alt="" class="img-responsive">
                    </p>
                    <br/>
                    <h3 align="center">
                         <span class="special-text">Control total</span> <br/>del registro de finanzas
                    </h3>
                    <br>
                        <p align="center">
                             Combo <br/><span style="color:#009cb5;">Aspel COI</span> + <span style="color:#4c8b2b;">Aspel BANCO</span><br/> a sólo: $8,599*
                        </p>
                        <br>
                    <div class="text-center">
                        <a href='https://survey.zohopublic.com/zs/3fCunm' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;' class="text-center center-block p-contacto-title" style="text-decoration: none" >
                            <button class="btn btn-promo btn-lg">
                                ¡Solicitar ahora!
                            </button>
                        </a>
                        <a href="{{ url('/promocion-coi-banco') }}" class="info" target="_blank">Más información</a>
                    </div>
                </div>
            </div>

            <!-- Promoción COI + BANCO -->
            {{-- <div class="row grey-space" id="changePosition">
                <div class="col-md-3" id="blockA">
                    <div class="text-center">
                        <a href="https://survey.zohopublic.com/zs/3fCunm" class="btn btn-promo">¡Contáctame!</a>
                        <br>
                        <a href="{{ url('/promocion-coi-banco') }}" class="info" target="_blank">Más información</a>
                    </div>
                </div>
                <div class="col-md-3" id="blockB">
                    <h3 align="center">
                        <span class="special-text">Control total</span> <br/>del registro <br/>de finanzas
                    </h3>
                </div>
                <div class="col-md-3" id="blockC">
                    <p align="center">
                        El combo <br/><span style="color:#009cb5;">Aspel COI</span> + <span style="color:#4c8b2b;">Aspel BANCO</span><br/> incluye:
                    </p>
                    <br/>
                    <div class="center-block">
                        <ul>
                            <li><p><span class="glyphicon glyphicon-ok"></span> Licencia de Aspel COI 8.0 
                            <br/>(1 usuario/99 empresas)</p></li>
                            <li><p><span class="glyphicon glyphicon-ok"></span> Licencia de Aspel BANCO 4.0
                            <br/>(1 usuario/99 empresas)</p></li>
                            <li><p><span class="glyphicon glyphicon-ok"></span> Cupón de 20% en curso <br/>Aspel COI y Aspel BANCO</p></li>
                            <li><p><span class="glyphicon glyphicon-ok"></span> Cupón de 20% en póliza <br/>de asesoria y soporte</p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3" id="blockD">
                    <p align="center">
                        <img src="/images-new/inelco/promocion/coi-banco/logos/inelco-promocion-coi-banco-logo.png" alt="" class="img-responsive">
                    </p>
                </div>
            </div> --}}

        </div>
    </div>

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
