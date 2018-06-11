@extends('templates.main')
@section('title','ESPACIO')
@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
@include('flash::message')
@include('templates.adm-tienda.banner-admtienda')
@include('partials.ventana-modal-sae'){{-- checar estos include--}}
@include('partials.popup-desc-direc-sae')
<section class="descripcion-admtienda desc-admtienda secciones" id="mas-informacion">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>
                    Es ideal para emprendedores y pequeños empresarios que requieren movilidad para punto de venta.
                </h2>
                <p>
                    <b>
                        Aspel ADM Tienda
                    </b>
                    es una app que lleva el control de tu punto de venta de manera sencilla y eficiente. Es ideal para tiendas y comercios que requieren generar transacciones en mostrador de forma rápida y segura con la practicidad de una tablet.  
                </p>
               
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="inelco-ciclo aspel adm-tienda" class="img-responsive" 
                    src="/img/productos/ADMTienda/Inelco-aspel-adm-tienda-logo-copia.png" width="200"/>
                </center>
            </div>
        </div>
            <div class="col-md-6">
                <h3>
                    Tu punto de venta en la nube
                </h3>
                <p class="p-css">
                    <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Ofrece tus productos desde cualquier sitio con la comodidad de una tablet
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Concluye tus ventas de mostrador de manera inmediata y exitosa
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Agiliza el cobro de tus productos, mejorando la atención a tus clientes
                    </li>
                    
                </ul>
                </p>
            </div>
        <div class="row">
            <div class="col-md-6">
                <h3>
                    ADM Tienda + ADM
                </h3>

                <p class="p-css">
                    En sinergia con Aspel ADM, el sistema de administración móvil que gestiona movimientos de compra-venta desde la nube consolida tus operaciones de punto de venta.
                </p>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Conoce los productos más vendidos
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Catálogo de productos
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Agiliza la captura con el enlace de documentos
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Genera el CFDI a clientes que lo soliciten
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Registra tus productos y visualízalos al instante
                    </li>
                </ul>
                
            </div>
            <br>
            <br>
            <br>
            <br>
            </div>


    </div>
</section>
<section class="word-frase sections " id="frase-sae">
    <div class="fondo-gray-admtienda">
        <div class="container">
            <h2 class="title-h2">
                Te presentamos ADM Tienda Aspel
            </h2>
            <h3>
                <i>
                    Ofrece tus productos desde cualquier lugar y asegura la venta en el momento oportuno 
                </i>
            </h3>
        </div>
    </div>
</section>
{{-- 
<section class="ac_content ">
    <div class="ac_content-wrapper notpadding ">
        <div class="ac_home-tour" style="height: 550.984px;">
            @include('partials.slider-sae-nube')
        </div>
    </div>
</section>
--}}
<hr id="lap-separator"/>
<section class="caracteristicas-admtienda sae secciones">
    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <center>
                    <img alt="control de tu empresa" src="/img/productos/ADMTienda/beneficios/Inelco-aspel-adm-tienda-tickets.png"/>
                </center>
                <h3>
                    Fácil y rápida entrega de Tickets
                </h3>
                <p>
                    Genera notas de venta en segundos, imprímelas y envíalas por correo electrónico a clientes frecuentes o al público en general.
                </p>
            </div>

            <div class="col-md-4">
                <center>
                    <img alt="contabilidad electrónica" src="/img/productos/ADMTienda/beneficios/Inelco-aspel-adm-tienda-cfdi.png"/>
                </center>
                <h3>
                    Emisión del comprobante CFDI
                </h3>
                <p>
                    Emite la factura al momento de la venta o permite que tu cliente la genere a través del portal de facturación.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="conoce cliente" src="/img/productos/ADMTienda/beneficios/Inelco-adm-tienda-gestion-cobro.png"/>
                </center>
                <h3>
                    Recibe pagos electrónicos
                </h3>
                <p>
                    Acepta diferentes tarjetas bancarias y consulta el reporte de todas las operaciones generadas.
                </p>
            </div>
        </div> <!-- aqqui termina el renglon-->
        <div class="row"> <!-- aqqui empieza el renglon 2-->
            <div class="col-md-4">
                <center>
                    <img alt="administracion del punto de venta" src="/img/productos/ADMTienda/beneficios/Inelco-aspel-adm-tienda-reporte-ventas.png"/>
                </center>
                <h3>
                    Supervisa tus ventas
                </h3>
                <p>
                    Obtén en cualquier momento del día los reportes de corte de caja y arqueo de caja, separados por formas de pago.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="app sae-movil" src="/img/productos/ADMTienda/beneficios/Inelco-aspel-adm-tienda-estadisticas.png"/>
                </center>
                <h3>
                    Toma decisiones en tiempo real
                </h3>
                <p>
                    Emite estadísticas de los productos más vendidos, notas de venta por hora, formas de pago, entre otras.  
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="administracion del punto de venta" src="/img/productos/ADMTienda/beneficios/Inelco-aspel-adm-tienda-acceso-seguro.png"/>
                </center>
                <h3>
                    Acceso confiable y seguro
                </h3>
                <p>
                    Administra los dispositivos y los cajeros que pueden acceder a los datos, con los permisos previamente autorizados.
                </p>
            </div>
                </div><!-- aqqui termina el renglon 2-->

              <div class="row"> <!-- aqqui empieza el renglon 3-->
            <div class="col-md-4">
                <center>
                    <img alt="administracion del punto de venta" src="/img/productos/ADMTienda/beneficios/Inelco-aspel-adm-tienda-productos.png"/>
                </center>
                <h3>
                    Movilidad para tu negocio
                </h3>
                <p>
                    Agiliza tus ventas de mostrador al ofrecer tus productos desde cualquier lugar con la practicidad de una tablet.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="administracion del punto de venta" src="/img/productos/ADMTienda/beneficios/Inelco-aspel-adm-tienda-movilidad.png"/>
                </center>
                <h3>
                    Labora sin conexión a Internet
                </h3>
                <p>
                    Trabaja sin conexión a Internet y sincroniza posteriormente tus movimientos con <a href="{{ url('aspel-adm') }}">Aspel ADM</a>.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="app sae-movil" src="/img/productos/ADMTienda/beneficios/inelco-productos-adm-android.png"/>
                </center>
                <h3>
                    Descarga la app en Google Play
                </h3>
                <p>
                    La aplicación está disponible para la plataforma móvil de Android.<a href="https://play.google.com/store/apps/details?id=com.aspel.ADMTienda&hl=es"> Descárgala aquí</a>  
                </p>
            </div>
                </div><!-- aqqui termina el renglon 3-->
    </div>
</section>
@include('partials.botones-compra-admtienda')


@endsection
@push('add-js')

@stack('files-menu')


@endpush
