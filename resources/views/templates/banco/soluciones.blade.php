@extends('templates.main')

@section('title','Soluciones COI')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
    @include('templates.banco.banner-banco')
<section class="secciones sae-pages soluciones-sae" id="cuentas-bancarias">
    <div class="container">
        <h2 class="title-h2">
            Conoce las soluciones de Aspel BANCO
        </h2>
        <h3 class="title-h3">
            Cuentas bancarias
        </h3>
        <h4 class="title-h4">
            Aspel-BANCO 4.0 te brinda control total de todas y cada una de tus cuentas bancarias. ¡Consúltalas cuando las necesites!
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Cuentas bancarias
                </h5>
                <p class="p-css">
                    Se puede consultar el saldo actualizado de cada una de las cuentas bancarias y movimientos por periodos, desglosando montos en tránsito, saldo actual y saldo conciliado.
                </p>
            </div>
            <div class="col-md-6 imagencontainer">
                <img alt="soluciones cuentas bancarias" class="img-responsive zoom1" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-multimoneda" src="/img/productos/banco/inelco-aspel-banco-soluciones-cuentas-bancarias.png">
                </img>
            </div>
        </div>
    </div>
</section>
<section class="secciones sae-pages soluciones-sae" id="cheques">
    <div class="container">
        <h3 class="title-h3">
            Cheques
        </h3>
        <h4 class="title-h4">
            ¡Elaborar y registrar un cheque es muy fácil! Con el nuevo Aspel-BANCO 4.0 tienes todas las herramientas para llevar un óptimo control de cheques.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Cheques
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Es posible registrar varios conceptos de cargo en el mismo cheque (multi-concepto) es decir, pagar varios documentos con un solo movimiento.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Catálogo de beneficiarios para una mayor agilidad en la captura.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Formatos de impresión personalizables.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Póliza-cheque pre-llenada con los datos del movimiento.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="cheques y pagos" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-sae-clientes-y-cuentas-por-cobrar-HD.png" src="/img/productos/banco/inelco-aspel-banco-soluciones-cheques-pago-proveedores.png">
                </img>
            </div>
        </div>
    </div>
</section>
<section class="secciones sae-pages soluciones-sae" id="movimientos-bancarios">
    <div class="container">
        <h3 class="title-h3">
            Movimientos bancarios
        </h3>
        <h4 class="title-h4">
            Con Aspel-BANCO 4.0 realiza cualquier tipo de movimiento bancario con la seguridad de tener tu dinero bajo control.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Movimientos bancarios
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Captura de depósitos, retiros, pagos, cheques y transferencias entre cuentas.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Realiza pagos a varios documentos de un mismo proveedor o cliente.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Ofrece una captura masiva para agilizar el registro de movimientos con y sin interfaz con Aspel-SAE.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Asocia y consulta cualquier archivo por cada movimiento, incluyendo Comprobantes Fiscales Digitales.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="pago proveedores" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-sae-alta-de-factura-HD.png" src="/img/productos/banco/inelco-aspel-banco-soluciones-movimientos-bancarios-pago-proveedores.png">
                </img>
            </div>
        </div>
    </div>
</section>
<section class="secciones sae-pages soluciones-sae" id="agenda-de-movimientos">
    <div class="container">
        <h3 class="title-h3">
            Agenda de movimientos
        </h3>
        <h4 class="title-h4">
            Lleva el control de todos los movimientos que realizas con la productiva agenda de Aspel-BANCO 4.0.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Agenda de movimientos
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Programación de cargos y abonos repetitivos. Por ejemplo, podrás definir la renta mensual y el Sistema genera automáticamente los pagos de todo el año, listos para su autorización.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Integra los pagos pendientes a proveedores de Aspel-SAE, listos para su aplicación.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="Agenda de movimientos" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-sae-proveedores-y-cuenta-por-pagar-HD.png" src="/img/productos/banco/inelco-aspel-banco-soluciones-agenda-de-movimientos.png">
                </img>
            </div>
        </div>
    </div>
</section>
<section class="secciones sae-pages soluciones-sae" id="multimoneda-y-conciliacion">
    <div class="container">
        <h3 class="title-h3">
            Multimoneda y conciliación
        </h3>
        <h4 class="title-h4">
            Haz transacciones en cualquier tipo de moneda, ¡contamos con 12 diferentes! Además, con la versión 4.0 de Aspel-BANCO las funciones de conciliación son más fáciles, rápidas y productivas.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Multimoneda
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Posibilidad de elegir la moneda a utilizar por cuenta bancaria y movimiento.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Histórico de tipos de cambio para cada moneda.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="multimoneda" class="img-responsive zoom1" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-Activosydepreciacion.png" src="/img/productos/banco/inelco-aspel-banco-soluciones-multimoneda-guarda-movimiento-dolar.png">
                </img>
            </div>
        </div>
        <div class="row">
            <h5 class="title-h5">
                Y por medio de la Conciliación obtienes más beneficios:
            </h5>
            <ul>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    Facilidad para identificar los movimientos y conciliarlos fácilmente.
                </li>
                <li>
                    <i aria-hidden="true" class="fa fa-angle-right">
                    </i>
                    A partir de un archivo en Microsoft Excel®, el Sistema lee los movimientos bancarios del estado de cuenta del banco, los compara con lo registrado en la cuenta bancaria del Sistema y los concilia automáticamente. ¡Esto es eficiencia administrativa!
                </li>
            </ul>
        </div>
    </div>
</section>
<section class="secciones sae-pages soluciones-sae" id="consultas-y-reportes">
    <div class="container">
        <h3 class="title-h3">
            Consultas y reportes
        </h3>
        <h4 class="title-h4">
            Obtén una gran cantidad de útiles reportes con toda la información de las cuentas bancarias y sus movimientos con la precisión y rapidez que necesitas.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Consultas y reportes al momento
                </h5>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Diario de bancos.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Estados de cuenta.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Movimientos en conciliación.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Pronóstico de ingresos y egresos.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Flujo de efectivo.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Modificación y creación de reportes (QR2).
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="reportes diarios de bancos" class="img-responsive zoom1" data-zoom-image="/img/productos/coi/inelco-aspel-coi-soluciones-Activosydepreciacion.png" src="/img/productos/banco/inelco-aspel-banco-mas-soluciones-consultas-y-reporte-diario-de-bancos.png">
                </img>
            </div>
        </div>
    </div>
</section>
<section class="secciones sae-pages soluciones-sae" id="mas-soluciones-banco">
    <div class="container">
        <h3 class="title-h3">
            Más soluciones BANCO
        </h3>
        <h4 class="title-h4">
            Descubre más soluciones de Aspel-BANCO 4.0 y comprueba por qué controla eficientemente los ingresos, egresos y movimientos de cualquier cuenta bancaria.
        </h4>
        <div class="row">
            <div class="col-md-6">
                <h5 class="title-h5">
                    Acceso remoto y conectividad con sucursales
                </h5>
                <p class="p-css">
                    Aspel-BANCO te da acceso total al Sistema a través de Internet, con lo que se podrán conectar las sucursales o colaboradores remotos sin costos extra, logrando así una administración centralizada y en línea.
                </p>
            </div>
            <div class="col-md-6">
                <img alt="Acceso remoto" class="img-responsive" src="/img/productos/banco/inelco-aspel-banco-massoluciones-acceso-remoto_bloque1.png">
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
                    Es un servicio inteligente en la nube donde puedes concentrar y compartir información contable, financiera y comercial de manera segura y efectiva. Desde Aspel-BANCO se pueden publicar de forma segura las consultas y reportes del Sistema, así como cualquier tipo de documento requerido (hojas de cálculo, diagramas o imágenes).
                </p>
            </div>
        </div>
        <div class="row interfaz">
            <h4 class="title">
                Interfaz con los Sistemas Aspel
            </h4>
            <div class="col-md-4">
                <center>
                    <a href="{{url('aspel-coi')}}">
                        <img alt="aspel-COI" class="img-responsive logo-produ" src="/img/aspel-COI.png"/>
                    </a>
                </center>
                <h5 class="title-h5">
                </h5>
                <p class="p-css">
                    Con
                    <a href="{{url('aspel-coi')}}">
                        Aspel COI
                    </a>
                    para todos los movimientos capturados en
                    <a href="{{url('aspel-banco')}}">
                        Aspel-BANCO
                    </a>
                    , se genera automáticamente la póliza correspondiente.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <a href="{{url('aspel-sae')}}">
                        <img alt="aspel-SAE" class="img-responsive logo-produ" src="/img/aspel-SAE.png" width="50"/>
                    </a>
                </center>
                <h5 class="title-h5">
                </h5>
                <p class="p-css">
                    Con
                    <a href="{{url('aspel-sae')}}">
                        Aspel-SAE
                    </a>
                    a partir del movimiento que se capture en
                    <a href="{{url('aspel-banco')}}">
                        Aspel-BANCO
                    </a>
                    , automáticamente se graba el abono en las cuentas por cobrar y por pagar.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <a href="{{url('aspel-noi')}}">
                        <img alt="aspel-NOI" class="img-responsive logo-produ" src="/img/aspel-NOI.png" width="50"/>
                    </a>
                </center>
                <h5 class="title-h5">
                </h5>
                <p class="p-css">
                    Con
                    <a href="{{url('aspel-noi')}}">
                        Aspel-NOI
                    </a>
                    genera automáticamente los cheques para el pago de las nóminas.
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
                        Base de Datos en formato Firebird® y posibilidad de uso en formato SQL Server®.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Traductor automático de datos de la versión 3.0 de Aspel-BANCO.
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
                        Disponible en versiones de 1 usuario con 99 empresas y licencias adicionales.
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <img alt="caracteristicas de aspel banco" class="img-responsive" src="/img/productos/banco/inelco-aspel-banco-massoluciones-caracteristicas-generales.png">
                </img>
            </div>
        </div>
    </div>
</section>
@include('partials.botones-compra-banco')
@include('templates.banco.menu-banco')

@endsection

@push('add-js')
    
    @stack('files-menu')
@endpush
