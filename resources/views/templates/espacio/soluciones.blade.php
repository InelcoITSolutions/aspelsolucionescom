@extends('templates.main')

@section('title','Soluciones ESPACIO')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
    @include('templates.espacio.banner-espacio')

<!-- empieza la primera seccion de la primer imagen y su descripcion-->
<section class="secciones espacio-pages soluciones-sae" id="buzon-contable">
    <div class="container" class="row">
        <h2 class="title-h2">
            Conoce las soluciones de ESPACIO Aspel
        </h2>
    </div>
 <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">                
                    Buzón Contable
                </h5>

                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Esta útil herramienta tiene por objetivo que las empresas puedan concentrar y almacenar los CFDI o cualquier documento relacionado con las operaciones contables realizadas en la empresa, de manera organizada y por RFC.
                    </li>
                </ul>
                <h5 class="title-h5">                
                    ¿Como funciona?
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right"></i>
                        El despacho contable crea un <strong>Buzón Contable</strong> por cada una de las empresas que atiende.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right"></i>
                        La empresa sube las operaciones contables con todos los documentos comprobatorios, incluyendo CFDI.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right"></i>
                        El despacho contable desde Aspel-COI 7.0 y con un solo clic descarga todos los registros contables y los contabiliza automáticamente.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right"></i>
                        En el Buzón Contable de ⓔspacio Aspel se actualizará el estatus de cada operación en automático.
                    </li>
                </ul>

            </div> 
            <div class="col-md-6">
                <img alt="buzon-contable" class="img-responsive zoom2" data-zoom-image="/img/productos/sae-nube/administracion-de-servidores-virtuales-aspel-soluciones.png" src="/img/productos/espacio/soluciones/inelco-buzon-contable.jpg">
                </img>
            </div>
            </div>
        </div>
        </section><!--termina la primera--><!--termina la primera--><!--termina la primera-->


        <section class="secciones espacio-pages soluciones-sae" id="modalidades">
        <div class="container"> <!-- este container es para la segunda imagen y su debido texto-->
        <div class="row"> <!-- div para el responsive-->
            <div class="col-md-6">
                <img alt="existencia costos" class="img-responsive zoom2" data-zoom-image="/img/productos/sae-nube/soluciones-administrativas.jpg" src="/img/productos/espacio/soluciones/modalidades.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Modalidades
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Elige la que mejor se adapte a tus necesidades.
                    </li>
                </ul>
            </div>

        </div>

        <div class="row"> <!-- div para el responsive-->
            <div class="col-md-3">
            </div>
            <div class="col-md-3">
             <h5 class="title-h5">
                    Caractéristicas principales
                </h5>
            </div>
            <div class="col-md-6">
               

                <ul>
                    <li class="text-justify">
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Es un servicio en Internet que se hospeda en los servidores de Aspel, ubicados en centros de datos que cuentan con altos estándares de calidad y certificaciones internacionales en su infraestructura, en sus procesos, garantizando así la disponibilidad del servicio.
                    </li>
                </ul>
            </div>
        </div>
        <div class="row"> <!-- div para el responsive-->
            <div class="col-md-3">
            </div>
            <div class="col-md-3">
             <h5 class="title-h5">
                    Usuarios
                </h5>
            </div>
            <div class="col-md-6">
               

                <ul>
                    <li class="text-justify">
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Garantizamos la seguridad de tu información. Asigna permisos a través de claves de usuario de acuerdo a su perfil y ten controlados los accesos. ¡No encontrarás una solución más segura! Cada uno de los usuarios registrados en el ⓔspacio Aspel podrá consultar, agregar, modificar y/o eliminar.
                    </li>
                </ul>
            </div>
        </div>
        <div class="row"> <!-- div para el responsive-->
            <div class="col-md-3">
            </div>
            <div class="col-md-3">
             <h5 class="title-h5">
                    Requerimientos
                </h5>
            </div>
            <div class="col-md-6">
               

                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Internet Explorer 9 o superior
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Mozilla Firefox 24 o superior
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Google Chrome 30 o superior
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Se requiere Adobe Flash Player con el plug-in Shockwave Flash Object
                    </li>
                    <li>
                        Cualquiera de los siguientes sistemas:
                    </li>

                        <li class="text-primary">
                        <i aria-hidden="true" class="fa fa-angle-right"></i>
                        Aspel-SAE 6.0
                        </li>

                        <li class="text-primary">
                        <i aria-hidden="true" class="fa fa-angle-right"></i>
                        Aspel-CAJA 4.0
                        </li>

                        <li class="text-primary">
                        <i aria-hidden="true" class="fa fa-angle-right"></i>
                        Aspel-NOI 8.0
                        </li>

                        <li class="text-primary">
                        <i aria-hidden="true" class="fa fa-angle-right"></i>
                        Aspel-COI 7.0
                        </li>

                        <li class="text-primary">
                        <i aria-hidden="true" class="fa fa-angle-right"></i>
                        Aspel-BANCO 4.0
                        </li>

                </ul>
            </div>
        </div>
        </div>
        </section><!-- termina la seccion de la segunda imagen de la solucion y su texto -->



@include('partials.botones-compra-espacio')
@include('templates.espacio.menu-espacio')

@endsection

@push('add-js')
    @stack('files-menu')

{{--    
<script src="/js/jquery.elevatezoom.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".zoom1").elevateZoom({
                zoomWindowPosition: 10,
                /*zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 500,
                lensFadeIn: 500,
                lensFadeOut: 500,*/
                easing : true,
                scrollZoom : true
            }); 
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".zoom2").elevateZoom({
                zoomWindowPosition:2,
                /*zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 500,
                lensFadeIn: 500,
                lensFadeOut: 500,*/
                easing : true,
                scrollZoom : true
            }); 
        });
    </script>
--}}

@endpush
