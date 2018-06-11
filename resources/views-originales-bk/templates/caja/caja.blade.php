@extends('templates.main')

@section('title','CAJA')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
@include('templates.caja.banner-caja')
@include('partials.ventana-modal-caja')
@include('partials.popup-desc-direc-caja')
<section class="descripcion-prod desc-caja secciones" id="mas-informacion">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>
                    Tan fácil como dar un clic emite Facturas Electrónicas CFDI desde tu punto de venta
                </h2>
                <p>
                    <b>
                        Aspel-CAJA 4.0
                    </b>
                    controla, administra y agiliza las operaciones de ventas, facturación e inventarios de uno o varios comercios, convirtiendo una computadora en un punto de venta capaz de operar con impresoras de tickets, cajones de dinero, básculas, lectores ópticos de código de barras, lectores de tarjetas de crédito y pantallas táctiles.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="inelco-ciclo aspel sae" class="img-responsive" src="/img/aspel-CAJA.png" width="200"/>
                </center>
            </div>
        </div>
                <div class="row">
            <div class="col-md-12">
                    <br>
                <div id="carousel-id" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-id" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-id" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-id" data-slide-to="2" class="active"></li>
                    </ol>
                    <div class="carousel-inner color-carrusel">
                        <div class="item">
                            <div class="col-sm-6">
                                <br>
                                <div class="alert alert">
                                    <h1 class="text-info">CFDI versión 3.3</h1>
                                    <p class="text-justify">
                                        Cumple con los requisitos fiscales al integrar los datos correspondientes a las nuevas reglas de validación del Anexo 20 de la RMF vigente. Se incorporan mejoras en la validación, incluyendo catálogos como:
                                        <ul>
                                            <li>
                                                <i aria-hidden="true" class="fa fa-angle-right">
                                                </i>
                                                Régimen fiscal
                                            </li>
                                            <li>
                                                <i aria-hidden="true" class="fa fa-angle-right">
                                                </i>
                                                Uso de CFDI
                                            </li>
                                            <li>
                                                <i aria-hidden="true" class="fa fa-angle-right">
                                                </i>
                                                Productos y/o servicios
                                            </li>
                                            <li>
                                                <i aria-hidden="true" class="fa fa-angle-right">
                                                </i>
                                                País, Monedas, Unidades de medidas
                                            </li>
                                            <li>
                                                <i aria-hidden="true" class="fa fa-angle-right">
                                                </i>
                                                Formas de pago, entre otros.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 sin-espacios">
                                    <img class="img-responsive hidden-xs" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="/img/productos/sae/lo-nuevo/CFDI-version-33.png">

                                </div>

                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <br>
                                    <div class="alert alert">
                                        <h1 class="text-info">Perfiles de usuario</h1>
                                        <p class="color-parrafos">
                                            Administra e incluye la fotografía de las personas que tienen acceso a la información

                                        </div>

                                    </div>
                                    <div class="col-sm-6 sin-espacios">
                                        <img class="img-responsive hidden-xs" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:Second slide" alt="Second slide" src="/img/productos/sae/lo-nuevo/perfiles-de-usuario.png">

                                    </div>
                                </div>
                                <div class="item active">
                                    <div class="col-sm-6">
                                        <br>
                                        <div class="alert alert">
                                            <h1 class="text-info"> Tecnología táctil en ventas</h1>
                                            <p class="color-parrafos">
                                                <ul>
                                                    <li>
                                                        <i aria-hidden="true" class="fa fa-angle-right">
                                                        </i>
                                                        Diseño renovado con mejoras en cada menú, iconos y temas personalizables.
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fa fa-angle-right">
                                                        </i>
                                                        Práctica barra de búsqueda, que localiza más rápido la información y facilita tu trabajo.
                                                    </li>
                                                    <li>
                                                        <i aria-hidden="true" class="fa fa-angle-right">
                                                        </i>
                                                        Menú intuitivo que integra todas las funciones relacionadas con temas de tu interés en una sola sección.
                                                    </li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 sin-espacios">
                                        <img class="img-responsive hidden-xs" data-src="holder.js/900x500/auto/#777:#7a7a7a/text:Third slide" alt="Third slide" src="/img/productos/caja/Tecnologia-Tactil_zoom.png">

                                    </div>
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                        <h2>
                            Controla las operaciones compra-venta de tu empresa
                        </h2>
                        <p class="text-justify">
                            <b>
                                Aspel SAE 7.0
                            </b>
                            te permite controlar inventarios, clientes, facturación, cuentas por cobrar, vendedores, compras, proveedores y cuentas por pagar, automatizando eficientemente los procesos administrativos
                        </p>
                        <p class="text-justify">
                            El sistema te ofrece movilidad conectando las sucursales remotamente y por medio de dispositivos móviles. Permite el acceso a la información comercial y administrativa, brindando una integración total a tu empresa.
                        </p>
                    </div>

                </div>
    </div>
</section>
<section class="word-frase sections " id="frase-caja">
    <div class="fondo-gray">
        <div class="container">
            <h2 class="title-h2">
                Aspel CAJA
            </h2>
            <h3>
                <i>
                    "Convierte tu equipo de cómputo en un punto de venta"
                </i>
            </h3>
        </div>
    </div>
</section>
<section class="ac_content ">
    <div class="ac_content-wrapper notpadding ">
        <div class="ac_cols-wrapper cf" id="tour">
            <div class="ac_col twelve nopadding secciones">
                <h3 class="title-h3">
                    Observa las operaciones que puedes llevar a cabo
                </h3>
            </div>
        </div>
        <div class="ac_home-tour" style="height: 550.984px;">
            @include('partials.slider-caja')
        </div>
    </div>
</section>
<hr id="lap-separator"/>
<section class="caracteristicas-prod caja secciones">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <center>
                    <img alt="comercio inteligente" src="/img/productos/caja/inelco-aspel-productos-caja-comercio-inteligente.png"/>
                </center>
                <h3>
                    Comercio inteligente
                </h3>
                <p>
                    Haz tu comercio más versátil y productivo, conéctalo con diferentes dispositivos y periféricos punto de venta como lectores, miniprinters y pantallas táctiles.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="control total de tus ingresos" src="/img/productos/caja/inelco-aspel-productos-caja-control-total-de-tus-ingresos.png"/>
                </center>
                <h3>
                    Control de ingresos y existencias
                </h3>
                <p>
                    La productividad de tu tienda o comercio está asegurada, porque tienes el control total de tus ingresos y existencias en las tiendas y cajas.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="conoce el saldo de tus clientes" src="/img/productos/caja/inelco-aspel-productos-caja-conoce-el-saldo-de-tus-clientes-02.png"/>
                </center>
                <h3>
                    Conoce el saldo de tus clientes
                </h3>
                <p>
                    Obtén información oportuna de tus clientes. En cualquier momento puedes conocer el saldo de tus clientes y tomar las mejores decisiones.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <center>
                    <img alt="varios puntos de venta" src="/img/productos/caja/inelco-aspel-productos-caja-varios-puntos-de-venta-o-sucursales.png"/>
                </center>
                <h3>
                    Conexión de las diferentes tiendas
                </h3>
                <p>
                    Si tienes varios puntos de venta o sucursales, envía la información de las existencias hacia las diferentes tiendas y recibe de las sucursales el concentrado de ventas e ingresos.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="acceso a usuarios controlado" src="/img/productos/caja/inelco-aspel-productos-caja-acceso-usuarios-controlado.png"/>
                </center>
                <h3>
                    Acceso de usuarios controlado
                </h3>
                <p>
                    Establece claves de usuario para permitir o negar el acceso a las diferentes opciones del Sistema, tales como cambios de precios, cancelación de notas, bloqueos temporales de la caja, corte de caja por cajero, entre otros.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="reportes y estadísticas" src="/img/productos/caja/inelco-aspel-productos-caja-genera-multiples-reportes-y-estadistica.png"/>
                </center>
                <h3>
                    Reportes y estadísticas oportunos
                </h3>
                <p>
                    Genera múltiples reportes y estadísticas, ya sea en general o por sucursal, con lo que podrás tener un amplio conocimiento de la operación tan detalladamente como lo necesites.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <center>
                    <img alt="reportes y estadísticas" src="/img/productos/caja/aspel-productos-caja-tecnologia-tactil.png"/>
                </center>
                <h3>
                    Tecnología táctil
                </h3>
                <p>
                    Agiliza las operaciones de tu negocio y consigue la satisfacción de tus clientes al capturar tus ventas con la funcionalidad disponible para pantallas táctiles.
                </p>
            </div>
        </div>
    </div>
</section>
@include('partials.botones-compra-caja')


@endsection

@push('add-js')
<script src="/js/jquery.slides.js">
</script>
<script src="/js/home.js">
</script>
<script src="/js/global.js">
</script>
<script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}
}</script>

@stack('files-menu')
@endpush
