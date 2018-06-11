@extends('templates.main')

@section('title','ADM')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
@include('templates.adm.banner-adm')
<section class="descripcion-prod desc-adm secciones" id="mas-informacion">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>
                    Gestiona tu negocio y genera los comprobantes fiscales digitales que requieras
                </h2>
                <p>
                    <b>
                        Aspel ADM
                    </b>
                    es una nueva aplicación en la nube que administra las principales operaciones de compra-venta de la empresa como: cotizaciones, facturas, notas de crédito, recibos de honorarios y de arrendamiento, compras, entre otras de manera fácil, eficiente y segura. Te permite conocer el inventario de tus productos, su rotación y costo. Tiene disponible en todo momento el estado de tus cuentas por cobrar y lleva un oportuno seguimiento de las ventas, gastos e ingresos. Aspel ADM lo puedes utilizar en cualquier momento desde tu dispositivo móvil, tablet o computadora.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="Inelco Aspel ADM" class="img-responsive" src="/img/aspel-ADM.png" width="200"/>
                </center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img alt="lo nuevo adm version basica" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/img/productos/adm/inelco-aspel-adm-lo-nuevo-version-basica.png">
                </img>
            </div>
            <div class="col-md-6">
                <br>
                <br>
                <h2>
                    
                        Versión BÁSICA
                    
                </h2>
                <h5>
                    Genera Cotizaciones
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Integramos el módulo de cotizaciones para generar el alta, cancelación y modificación del documento.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Obtén el resumen de todas tus cotizaciones.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Exporta las consultas que realices en formato PFD y Excel y envíalos por correo electrónico.
                    </li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="news-text">
                <div class="col-md-6">
                    <h2>
                       
                            Versión PREMIUM
                        
                    </h2>
                    <h5>
                        Ventas y cuentas por cobrar
                    </h5>
                    <ul>
                        <li>
                            <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Define por cliente el límite de crédito y días de crédito.
                        </li>
                        <li>
                            <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Consulta en todo momento el estado de cuenta de tus clientes.
                        </li>
                        <li>
                            <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Al generar los comprobantes puedes realizar la recepción de pagos para facilitar el seguimiento de cargos y abonos de tus clientes.
                        </li>
                        <li>
                            <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Obtén estadísticas de ventas: mejor periodo de venta, productos más vendidos y clientes que más compraron.
                        </li>
                        <li>
                            <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Y ten un mejor control financiero con las estadísticas de cotizaciones, compras y utilidad bruta.
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img alt="version premium adm" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/img/productos/adm/inelco-aspel-adm-lo-nuevo-version-premium.png">
                    </img>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="word-frase sections " id="frase-adm">
    <div class="fondo-gray">
        <div class="container">
            <h2 class="title-h2">
                 ADM
            </h2>
            <h3>
                <p>
                    "El ADM de una empresa exitosa"
                </p>
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
            @include('partials.slider-adm')
        </div>
    </div>
</section>
<section class="caracteristicas-prod adm secciones">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <center>
                    <img alt="cfdi complementos" src="/img/productos/adm/inelco-aspel-productos-adm-cfdi-complementos.png"/>
                </center>
                <h3>
                    Expide múltiples comprobantes
                </h3>
                <p>
                    Genera Facturas Electrónicas y agrega al CFDI complementos como: Recibos de nómina, IEDU, Notarios, Donatarias, Venta de vehículos, entre otros.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="adm utiles reportes" src="/img/productos/adm/inelco-aspel-productos-adm-utiles-reportes.png"/>
                </center>
                <h3>
                    Útiles reportes
                </h3>
                <p>
                    Obtén una visión clara del estado de tu empresa con los reportes de: Estados de cuenta de clientes, corte de caja, kárdex, lista de precios y muchos otros.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="panel de estadísticas" src="/img/productos/adm/inelco-aspel-productos-adm-estadisticas.png"/>
                </center>
                <h3>
                    Panel de estadísticas
                </h3>
                <p>
                    Emite estadísticas que te ayudan a tomar decisiones importantes en tiempo real: clientes principales, productos más vendidos, utilidades, entre otras.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <center>
                    <img alt="movilidad" src="/img/productos/adm/inelco-aspel-productos-facture-movil-factura-donde-quieras.png"/>
                </center>
                <h3>
                    Movilidad
                </h3>
                <p>
                    Accede a Aspel ADM desde tu dispositivo móvil, tablet o PC con toda la movilidad que tu empresa requiere.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="atractivo diseño de facturas" src="/img/productos/adm/inelco-aspel-productos-adm-diseño-facturas.png"/>
                </center>
                <h3>
                    Atractivo diseño de facturas
                </h3>
                <p>
                    Un diseño exclusivo para capturar ágilmente los comprobantes.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="labora sin conexión a internet" src="/img/productos/adm/inelco-aspel-productos-facture-movil-trabaja-sin-conexion-a-internet.png"/>
                </center>
                <h3>
                    Labora sin conexión a Internet
                </h3>
                <p>
                    Trabaja sin conexión a Internet y una vez que te conectes, se sincronizará automáticamente la información.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <center>
                    <img alt="facturas electrónicas" src="/img/productos/adm/inelco-aspel-productos-facture-movil-facturas-ilimitadas.png"/>
                </center>
                <h3>
                    Facturas Electrónicas ilimitadas
                </h3>
                <p>
                    Facturación Electrónica ilimitada sin pago extra, garantizando la emisión y cancelación de todos los comprobantes fiscales que tú o tu empresa requieran.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="tiendas app store y google play" src="/img/productos/adm/inelco-aspel-productos-adm-apple-android.png"/>
                </center>
                <h3>
                    Descarga la app en tiendas App Store y Google Play
                </h3>
                <p>
                    La aplicación está disponible para las plataformas móviles de iOS y Android, así como en su versión Web desde los navegadores Internet Explorer®, Opera®, Google Chrome®, Firefox® y Safari®.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="paquetes de facturas" src="/img/productos/adm/inelco-icono_paquetes.png"/>
                </center>
                <h3>
                    Paquetes de Facturas
                </h3>
                <p>
                    Si tu facturación es baja, te ofrecemos la mejor solución para tus necesidades de facturación electrónica. Adquiere un Paquete de facturas de 20, 50 o 100 con vigencia de un año. Más información aquí.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- aqui va el codigo de google analytics-->
                <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97845785-1', 'auto');
  ga('send', 'pageview');

</script><!-- aqui va el codigo de google analytics-->

@include('partials.botones-compra-adm')


@endsection

@push('add-js')
<script src="/js/jquery.slides.js">
</script>
<script src="/js/home.js">
</script>
<script src="/js/global.js">
</script>
@stack('files-menu')
@endpush
