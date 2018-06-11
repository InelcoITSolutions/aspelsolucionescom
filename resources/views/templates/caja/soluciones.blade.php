@extends('templates.main')

@section('title','Soluciones COI')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
    @include('templates.caja.banner-caja')
<section class="secciones sae-pages soluciones-sae" id="tienda-y-cajas">
    <div class="container">
        <h2 class="title-h2">
            Conoce las soluciones de Aspel CAJA
        </h2>
        <h3 class="title-h3">
            Tienda y cajas
        </h3>
        <h4 class="title-h4">
            El Sistema de Punto de Venta y Administración de Comercios controla todas las operaciones del punto de venta como ingresos, existencias, ventas, cajas, cajeros y muchos aspectos más.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Tu caja bajo control
                </h5>
                <p class="p-css">
                    Opera con diferentes dispositivos de puntos de venta como pantallas de torreta, lectores ópticos de código de barras, básculas, cajones de dinero, lectores de tarjeta de crédito e impresoras de tickets.
                </p>
            </div>
            <div class="col-md-6 imagencontainer">
                <img alt="Tiendas y cajas dispositivos" class="img-responsive" src="/img/productos/caja/Tu-caja-bajo-control_zoom.png">
                </img>
            </div>
        </div>
        <h5 class="title-h5">
            Conoce más funciones de tiendas y cajas
        </h5>
        <ul>
            <li>
                <i aria-hidden="true" class="fa fa-angle-right">
                </i>
                Maneja diferentes perfiles de usuarios, con sus respectivos derechos de acceso a las opciones del Sistema.
            </li>
            <li>
                <i aria-hidden="true" class="fa fa-angle-right">
                </i>
                Cuenta con una bitácora, para consultar las actividades realizadas en el Sistema por cada usuario.
            </li>
        </ul>
    </div>
</section>
<section class="secciones sae-pages soluciones-sae" id="inventarios">
    <div class="container">
        <h3 class="title-h3">
            Inventarios
        </h3>
        <h4 class="title-h4">
            Con Aspel-CAJA los productos del inventario de tu tienda o comercio están controlados y disponibles con la claridad y rapidez que necesitas.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Control de inventarios:
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Manejo de las diferentes características de los productos y servicios: fotografía, claves de identificación, asignación de líneas de producto, departamentos, listas de precios y manejo de hasta 4 impuestos.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        El inventario se actualiza automáticamente al capturar las ventas, mostrando las existencias reales de los productos, para una adecuada administración y una óptima planeación de compras.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Por cada una de las tiendas se maneja un inventario diferente.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="Soluciones inventarios" class="img-responsive" src="/img/productos/caja/Control-de-inventarios_zoom.png">
                </img>
            </div>
        </div>
        <h5 class="title-h5">
            Y tienes más beneficios al administrar tus inventarios:
        </h5>
        <ul>
            <li>
                <i aria-hidden="true" class="fa fa-angle-right">
                </i>
                Manejo de kits, para agrupar varios productos y/o servicios para conformar un solo producto y agilizar la venta.
            </li>
            <li>
                <i aria-hidden="true" class="fa fa-angle-right">
                </i>
                Proceso de inventario físico con ajustes automáticos.
            </li>
        </ul>
    </div>
</section>
<section class="secciones sae-pages soluciones-sae" id="clientes-y-cuentas-por-cobrar">
    <div class="container">
        <h3 class="title-h3">
            Clientes y cuentas por cobrar
        </h3>
        <h4 class="title-h4">
            Con el software Aspel-CAJA 3.5 controlas las cuentas por cobrar y su seguimiento de una forma sencilla, rápida y eficiente.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Conoce a fondo a tu cliente
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Almacena los datos de clientes con características generales y comerciales como: domicilio, límite y días de crédito, saldos, monto de ventas y cuentas contables, entre otros.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Si tu comercio o empresa maneja crédito, Aspel-CAJA controla las cuentas por cobrar para que de manera fácil y rápida conozcas los saldos de tus clientes y puedas registrar sus pagos.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="clientes y cuentas por cobrar" class="img-responsive" src="/img/productos/caja/Conoce-a-fondo-tu-cliente_zoom.png">
                </img>
            </div>
        </div>
    </div>
</section>
<section class="secciones sae-pages soluciones-sae" id="documentos-de-venta">
    <div class="container">
        <h3 class="title-h3">
            Documentos de venta
        </h3>
        <h4 class="title-h4">
            El sistema de punto de venta está listo para generar notas de venta, tickets y facturas impresas o electrónicas rápido, y con todos los requisitos fiscales vigentes.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Genera tickets o facturas
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Emisión, cancelación y devolución de notas de venta.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Generación de Comprobantes Fiscales Digitales de facturas, devoluciones y notas de crédito.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Facilidad en la captura de documentos de acuerdo con las necesidades de la empresa. Personalización de la ventana de captura, teclas de función rápida, aplica automáticamente políticas de descuento, entre otras.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Recibe pagos en diferentes monedas.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Manejo de propinas.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Diversas formas de pago: efectivo, tarjetas de crédito o débito y vales.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="recibos electrónicos" class="img-responsive" src="/img/productos/caja/Genera-tickets-o-facturas_zoom.png">
                </img>
            </div>
        </div>
        <div class="row">
            <h5 class="title-h5">
                También los documentos de venta te ofrecen:
            </h5>
            <ul>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Formatos de impresión que son adaptables (tickets y facturas).
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Consulta y reimpresión de notas de venta.
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="secciones sae-pages soluciones-sae" id="comprobantes-fiscales-digitales-cfdi">
    <div class="container">
        <h3 class="title-h3">
            Comprobantes Fiscales Digitales
        </h3>
        <h4 class="title-h4">
            Con Aspel-CAJA 3.5 genera Facturas Electrónicas CFDI cumpliendo con todas las disposiciones vigentes de la Reforma Fiscal 2014.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Genera facturas CFDI
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Emisión de Comprobantes Fiscales Digitales (Facturación Electrónica), con base en los estándares regulados por el SAT y a lo indicado en el art. 29 del Código Fiscal de la Federación.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Método de pago por documento y número de cuenta bancaria en su caso.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="comprobantes fiscales digitales" class="img-responsive zoom1" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-Activosydepreciacion.png" src="/img/productos/caja/inelco-aspel-caja-soluciones-comprobantes-fiscales-digitales-factura-cfdi.png">
                </img>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 imagencontainer">
                <img alt="comprobantes fiscales digitales" class="img-responsive" src="/img/productos/caja/Desde-un-sitio-web_zoom.png">
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    Genera comprobantes fiscales desde un sitio web
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Ahora el cliente tiene la facilidad de obtener su Comprobante Fiscal Digital desde un sitio web con la información de los tickets de sus notas de venta generadas.
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <h5 class="title-h5">
                Modalidad de venta
            </h5>
            <ul>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    <b>
                        Aspel-CAJA Administrador:
                    </b>
                    su función es llevar a cabo la administración de las tiendas de la empresa, concentra todas las operaciones efectuadas en los puntos de venta.
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    <b>
                        Aspel-CAJA Punto de Venta:
                    </b>
                    realiza todas las operaciones de ventas, facturación e inventarios.
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="secciones sae-pages soluciones-sae" id="consolidacion-de-informacion">
    <div class="container">
        <h3 class="title-h3">
            Consolidación de información
        </h3>
        <h4 class="title-h4">
            Consolidación de información
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Información real y confiable
                </h5>
                <p class="p-css">
                    Cuenta con diversos controles para manejar los inventarios, ingresos y ventas de los diferentes puntos de venta. Además la información puede ser verificada a través de las consultas de inventarios, clientes y ventas.
                </p>
            </div>
            <div class="col-md-6 imagencontainer">
                <img alt="consolidacion" class="img-responsive" src="/img/productos/caja/Consolidacion-de-la-informacion_zoom.png">
                </img>
            </div>
        </div>
    </div>
</section>
<section class="secciones sae-pages soluciones-sae" id="mas-soluciones">
    <div class="container">
        <h3 class="title-h3">
            Más soluciones CAJA
        </h3>
        <h4 class="title-h4">
            Descubre más soluciones de Aspel-CAJA y comprueba por qué es el Sistema de punto de venta líder.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Reportes y consultas
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Maneja un historial de ingresos por tienda, por cajero o por vendedor.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Reporte de corte de caja.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Comprobación fiscal con las ventas diarias desglosadas por tasa de impuesto.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Resumen de ventas por periodo requerido.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Comisión por vendedor.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="Consultas reportes de la nomina" class="img-responsive" src="/img/productos/caja/inelco-aspel-caja-mas-soluciones-reportes-y-consultas-reporte-corte-de-caja.png">
                </img>
            </div>
        </div>
        <div class="row">
            <h5 class="title-h5">
                Obtén más reportes y consultas con Aspel-CAJA:
            </h5>
            <ul>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Impresión de etiquetas y código de barras de los productos.
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Kárdex.
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Lista de precios.
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Inventario físico para conocer el stock disponible en cualquier momento.
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Ventas y utilidad.
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Estados de cuenta.
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Antigüedad de saldos que facilitan la cobranza.
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Addendas* y complementos*.
                </li>
            </ul>
            <p class="p-css">
                *Si facturas a grandes cadenas como Liverpool, Mapfre, Soriana, etc, este funcionamiento lo puedes obtener con
                <a href="{{url('aspel-sae')}}">
                    Aspel-SAE 6.0
                </a>
            </p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Estadísticas
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Ofrece estadísticas y resumen de ventas por tienda, cajero, producto o vendedor.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Gráficas avanzadas que hacen más sencillo el análisis de la información de ventas.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Control de ingresos totales por tienda, cajero o por un periodo determinado.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Proporciona un resumen semanal de ingresos.
                    </li>
                </ul>
            </div>
            <div class="col-md-6 imagencontainer">
                <img alt="estadisticas tienda" class="img-responsive" src="/img/productos/caja/Grafica_zoom.png">
                </img>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img class="img-responsive ">
                    <img alt="espacio aspel" class="img-responsive zoom2" data-zoom-image="/img/productos/inelco-consultas-estadisticas-reportes-HD.png" src="/img/productos/sae/inelco-espacio-aspel.png">
                    </img>
                </img>
            </div>
            <div class="col-md-6">
                <h5 class="title-h5">
                    ⓔspacio Aspel
                </h5>
                <p class="p-css">
                    Servicio inteligente en la nube donde puedes concentrar y compartir información contable, financiera y comercial de manera segura y efectiva.
                </p>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        En ⓔspacio Aspel almacena los respaldos de tu base de datos y archivos de configuración de tu sistema Aspel-CAJA.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        También administra los Comprobantes Fiscales Digitales por Internet (CFDI) generados por Aspel-CAJA, así como de otros Sistemas Aspel, por lo que siempre tendrás una copia confiable.
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <h5 class="title-h5">
                Respaldos automáticos
            </h5>
            <p class="p-css">
                El Sistema programa la generación automática del respaldo de tu Base de Datos y/o archivos de configuración con alguna de las siguientes periodicidades: de forma diaria, semanal, mensual o con la periodicidad que se requiera.
            </p>
        </div>
        <div class="row interfaz">
            <h4 class="title">
                Interfaz con los Sistemas Aspel
            </h4>
            <div class="col-md-6">
                <center>
                    <a href="{{url('aspel-coi')}}">
                        <img alt="aspel-SAE" class="img-responsive logo-produ" src="/img/aspel-COI.png"/>
                    </a>
                </center>
                <h5 class="title-h5">
                </h5>
                <p class="p-css">
                    <a href="{{url('aspel-coi')}}">
                        Aspel COI
                    </a>
                    genera las pólizas de ingresos, movimientos al inventario y ventas, mismas que pueden ser detalladas por clientes o impuestos, así como la integración automática del folio fiscal del CFDI de ventas y devoluciones en las pólizas.
                </p>
            </div>
            <div class="col-md-6">
                <center>
                    <a href="{{url('aspel-sae')}}">
                        <img alt="aspel-BANCO" class="img-responsive logo-produ" src="/img/aspel-SAE.png" width="50"/>
                    </a>
                </center>
                <h5 class="title-h5">
                </h5>
                <p class="p-css">
                    <a href="{{url('aspel-coi')}}">
                        Aspel SAE
                    </a>
                    es posible integrar los datos de inventarios y clientes, además de mantener actualizada la información de movimientos al inventario y existencias, información del cliente, cuentas por cobrar y saldo del cliente.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Características generales del producto
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Base de Datos en formato FIREBIRD®.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Traductor automático de datos de la versión Aspel-CAJA 3.0
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Actualización en línea a las últimas mejoras de la versión.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Módulo mejorado de perfiles del usuario para la asignación de permisos a los usuarios.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Disponible en versiones de 1 empresa (usuario administrador), 99 tiendas y 99 cajas, así como licencias de usuarios adicionales para los puntos de venta.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="caracteristicas de aspel caja" class="img-responsive" src="/img/productos/caja/aspel-caja-mas-soluciones-caracteristicas-del-producto-v4.png">
                </img>
            </div>
        </div>
    </div>
</section>
@include('partials.botones-compra-caja')
@include('templates.caja.menu-caja')

@endsection

@push('add-js')
    
    @stack('files-menu')
@endpush
