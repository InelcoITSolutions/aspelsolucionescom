@extends('templates.main')

@section('title','Soluciones SAE NUBE')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
    @include('templates.sae-nube.banner-sae-nube')

<!-- empieza la primera seccion de la primer imagen y su descripcion-->
<section class="secciones sae-pages soluciones-sae" id="siempre-bajo-control">
    <div class="container" class="row">
        <h2 class="title-h2">
            Conoce las soluciones de Aspel SAE NUBE
        </h2>
    </div>
 <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Siempre bajo control.
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Desde el Escritorio de Servicios administra tus servidores virtuales contratados.
                    </li>
                </ul>
            </div> 
            <div class="col-md-6">
                <img alt="existencia costos" class="img-responsive zoom2" data-zoom-image="/img/productos/sae-nube/administracion-de-servidores-virtuales-aspel-soluciones.png" src="/img/productos/sae-nube/administracion-de-servidores-virtuales-aspel-soluciones.png">
                </img>
            </div>
            </div>
        </div>
        </section><!--termina la primera--><!--termina la primera--><!--termina la primera-->

        <!-- empieza la segunda seccion-->
        <section class="secciones sae-pages soluciones-sae" id="Elige-solo-lo-que-necesitas">
        <div class="container"> <!-- este container es para la segunda imagen y su debido texto-->
        <div class="row"> <!-- div para el responsive-->
            <div class="col-md-6">
                <img alt="existencia costos" class="img-responsive zoom2" data-zoom-image="/img/productos/sae-nube/soluciones-administrativas.jpg" src="/img/productos/sae-nube/soluciones-administrativas.jpg">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Elige solo lo que necesitas.
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Te damos la opción de contratar sólo el Servidor Virtual o adquirirlo con la versión actualizada de Aspel SAE.
                    </li>
                </ul>
            </div>
        </div>
        </div>
        </section><!-- termina la seccion de la segunda imagen de la solucion y su texto -->

        <!-- empieza la tercera seccion de la 3er imagen y su descripcion-->
<section class="secciones sae-pages soluciones-sae" id="Manten-a-salvo-tu-informacion">
   
 <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Mantén a salvo tu información
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Administra claves de usuario para permitir o negar el acceso.
                    </li>
                </ul>
            </div> 
            <div class="col-md-6">
                <img alt="existencia costos" class="img-responsive zoom2" data-zoom-image="/img/productos/sae-nube/inelco-soluciones-productos-sae-nube-acceso-maquinas.png" src="/img/productos/sae-nube/inelco-soluciones-productos-sae-nube-acceso-maquinas.png">
                </img>
            </div>
            </div>
        </div>
        </section><!--termina la tercera seccion-->

        <!-- empieza la cuarta seccion-->
        <section class="secciones sae-pages soluciones-sae" id="respaldos-automaticos">
        <div class="container"> <!-- este container es para la cuarta imagen y su debido texto-->
        <div class="row"> <!-- div para el responsive-->
            <div class="col-md-6">
                <img alt="existencia costos" class="img-responsive zoom2" data-zoom-image="/img/productos/sae-nube/respaldos_automaticos.png" src="/img/productos/sae-nube/respaldos_automaticos.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Respaldos automáticos
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Olvídate de generar los respaldos manuales, el resguardo de tu información se realiza a diario.
                    </li>
                </ul>
            </div>
        </div>
        </div>
        </section><!-- termina la seccion de la cuarta imagen de la solucion y su texto -->

                <!-- empieza la 5ta             seccion de la 3er imagen y su descripcion-->
<section class="secciones sae-pages soluciones-sae" id="multiples-soluciones-administrativas">
   
 <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Además sigue disfrutando de las múltiples soluciones para la administración de:
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Inventarios
                    </li>

                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Clientes
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Facturación
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Cuentas por cobrar
                    </li>

                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Vendedores
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Compras
                    </li>

                </ul>
            </div> 
            <div class="col-md-6">
                <img alt="existencia costos" class="img-responsive zoom2" data-zoom-image="/img/productos/sae-nube/collage_SAE_nube.png" src="/img/productos/sae-nube/collage_SAE_nube.png">
                </img>
            </div>
            </div>
        </div>
        </section><!--termina la 5ta             seccion-->




@include('partials.botones-compra-sae-nube')
@include('templates.sae-nube.menu-sae-nube')

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
