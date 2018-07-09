@extends('templates.landings-sae.principal')

@section('title','Nuevo Aspel SAE 7.0')

@push('css-promocion-nuevo-noi')
    <link href="/css/landings-SAE/promocion-sae.css" rel="stylesheet" type="text/css"/>
    <!--<link href="/css/landings-SAE/form-promocion.css" rel="stylesheet"/>-->
    {{-- IMAGEN QUE SE muestra cuando se comparte en redes sociales --}}
    <link href="https://www.aspelsoluciones.com/img/share/nuevo-sae.png" rel="image_src"/> 
    {{-- <link rel="stylesheet" href="/css/inelco/mis-estilos.css"> --}}
    <link rel="stylesheet" href="/css/inelco/products-styles.css">
    <link rel="stylesheet" href="/css/modal-promociones.css">
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

<section class="secciones-noi" id="inicio-aspel-noi">
    <div class="container">
        <div align="right" class="logo">
            <img alt="Logo Aspel Soluciones" class="img-responsive" src="/img/logo-aspelsoluciones-blanco.png" width="220" />
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
                                funcional
                            </span>
                        </br>
                    </i>
                </h1>
            </div>
            {{--la siguiente imagen va a un lado de las palabras anteriores--}}
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img-left">
                <img alt="COI 8.0" class="img-responsive" src="/img/img-landings-sae/aspelsoluciones-sae70.png" width="400">
                </img>
            </div>
        </div>
        
        <div class="row">
            <h3 class="slogan wow fadeInDown" data-wow-delay="0.5s">
                El Sistema Administrativo Empresarial más utilizado 
                <br>
                en México y el único que pone en control total a tu negocio.
                </br>
            </h3>
        </div>

        <div class="row wow fadeInDown" data-wow-delay="0.5s">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 izquierda">
                <img alt="Actualizacion COI" class="img-responsive" src="/img/precios-julio/aspelsoluciones-sae-sus.png" width="400">
                </img>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 boton-espacio">
                <div align="right" class="boton wow fadeInDown" data-wow-delay="0.5s">
                    <a class="button-adquierelo large radius goContrata ancla2" href="#contratar-sae" style="text-decoration: none">
                        ¡Adquirir ahora!
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="secciones-noi par-nuevo" id="lo-nuevo">
    <div class="container">
        <h3 class="text-center titulo-uno wow bounceInLeft" data-wow-delay="0.5s">
            Aspel SAE. El éxito necesita administrarse.
        </h3>
        <h1 class="titulo-dos texto-degradado wow bounceInRight" data-wow-delay="0.5s">
            ¡EVOLUCIONA!
        </h1>

        <div class="logo-producto">
            <img alt="Logo Aspel SAE" class="center-block fadeInDown" data-wow-delay="0.5s" src="/images-new/marcas/aspel/productos/sae/logos/inelco-aspel-sae-logo.png"  style="width: 200px;height: 200px;">
                </img>
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
                            Control total de tu empresa
                        </h3>
                        <p>
                        El ciclo de compra-venta está cubierto,
                        <br>
                        desde el registro del producto
                        <br>
                        hasta la <span style="font-weight: 600">Facturación Electrónica v3.3</span>,
                        <br>
                        lista para ser entregada al cliente.
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
                            SAE Móvil
                        </h3>
                         <p>
                         Levanta pedidos, da de alta clientes, consulta los inventarios y sus existencias, en el momento y en el lugar en el que te encuentres.
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
                            Conoce mejor a tu cliente
                        </h3>
                        <p>
                        Controla saldos, pedidos pendientes,
                        <br>
                        productos apartados, estados de cuenta,
                        <br>
                        antigüedad de saldos, sus productos,
                        <br>
                        ventas mensuales y citas programadas.
                        </p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div align="center" class="imagen">
                        <img alt="Logo Aspel-SAE" class="img-responsive" style="width: 250px;height: 250px;" src="/images-new/marcas/aspel/productos/sae/logos/inelco-aspel-sae-logo.png">
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
                            Contabilidad Electrónica
                        </h3>
                        <p>
                            Cumple fácilmente los requisitos de la <span style="font-weight: 600">Contabilidad Electrónica v1.3</span>, al realizar la interfaz con Aspel COI.
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
                            Administración como<br>
                            punto de Venta
                        </h3>
                        <p>
                            Controla eficientemente un punto de venta, te proporciona el corte de caja y una novedosa opción para facturar las notas de venta desde un sitio web.
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
                            Interfaces Sistemas Aspel
                        </h3>
                        <p>
                        Aprovecha todas las interfaces y haz mejores negocios.
                        <br/>
                        Aspel SAE tiene interfaz con los Sistemas: 
                        <span id="int-coi">Aspel COI</span>,
                        <span id="int-banco">Aspel BANCO</span>,
                        <span id="int-prod">Aspel PROD</span> y 
                        <span id="int-caja">Aspel CAJA</span>. 
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
                    SAE 7.0
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
        <div class="row espacios">
            <div class="col-md-4 wow fadeInRight center-block" data-wow-delay="0.5s">
                <img alt="ciclo total de aspel sae" class="img-responsive" src="/img/img-landings-sae/iis-collage_sae.png" width="350">
                </img>
            </div>
            <div class="col-md-8 text-left wow fadeInLeft" data-wow-delay="0.5s">
                <h2>
                    Aspel SAE
                </h2>
                <p>
                    Mantén el control de todo el ciclo de las operaciones de compra-venta de la empresa, como inventarios, clientes, facturación, cuentas por cobrar, vendedores, compras, proveedores y cuentas por pagar, automatizando eficientemente los procesos administrativos.
                </p>
            </div>
        </div>
        <div class="row sat-fondo espacios">
            <div class="col-md-8 text-right wow fadeInRight" data-wow-delay="0.5s">
                <h2>
                    Inventarios y servicios
                </h2>
                <p>
                    Administra tu inventario, desde las existencias hasta el manejo de productos sustitutos. Fotografías y claves de identificación por producto, servicio, kit y/o grupo de productos. Manejo de lotes, pedimentos y números de serie.
                </p>
            </div>
            <div class="col-md-4 wow fadeInLeft center-block" data-wow-delay="0.5s">
                <img alt="Inventario y servicios en aspel sae" class="img-responsive" src="/images-new/marcas/aspel/productos/sae/otros/inelco-aspel-sae-inventario.png">
                </img>
            </div>
        </div>
        <div class="row espacios">
            <div class="col-md-4 wow fadeInRight center-block" data-wow-delay="0.5s">
                <img alt="cientes y cuentas por cobrar en aspel sae" class="img-responsive" src="/images-new/marcas/aspel/productos/sae/otros/ineco-aspel-sae-clientes-cpc.png">
                </img>
            </div>
            <div class="col-md-8 text-left wow fadeInLeft" data-wow-delay="0.5s">
                <h2>
                    Clientes y cuentas por cobrar
                </h2>
                <p>
                    Ten la mayor eficiencia, control y seguridad en el manejo de tus clientes. Captura datos generales, asigna listas de precios y vendedor. Eficaz seguimiento de días y límite de crédito.
                </p>
            </div>
        </div>
        <div class="row sat-fondo espacios">
            <div class="col-md-8 text-right wow fadeInRight" data-wow-delay="0.5s">
                <h2>
                    Facturas
                </h2>
                <p>
                    Mantén bajo control tu facturación y con la <span style="font-weight: 600">Nueva Factura v3.3</span>. Manejo de cotizaciones, pedidos, remisiones, notas de venta, facturas, facturas en parcialidades y devoluciones.
                </p>
            </div>
            <div class="col-md-4 wow fadeInLeft center-block" data-wow-delay="0.5s">
                <img alt="Facturas en aspel sae" class="img-responsive" src="/images-new/marcas/aspel/productos/sae/otros/inelco-sae-facturas-vendedores.png">
                </img>
            </div>
        </div>
        <div class="row espacios">
            <div class="col-md-4 wow fadeInRight center-block" data-wow-delay="0.5s">
                <img alt="ciclo total de aspel sae" class="img-responsive" src="/images-new/marcas/aspel/productos/sae/otros/ineco-aspel-sae-proveedores.png">
                </img>
            </div>
            <div class="col-md-8 text-left wow fadeInLeft" data-wow-delay="0.5s">
                <h2>
                    Proveedores y cuentas por pagar.
                </h2>
                <p>
                    Óptimo control de proveedores. Gestiona saldos y cuentas por pagar. Consulta el expediente del proveedor con la información de compras. Lleva el control de anticipos, división de cargos y suspensión de compras.
                </p>
            </div>
        </div>
        <div class="row sat-fondo espacios">
            <div class="col-md-8 text-right wow fadeInRight " data-wow-delay="0.5s">
                <h2>
                    Compras
                </h2>
                <p>
                    Todos tus documentos de compras disponibles y listos para aumentar la productividad de tu empresa. Genera requisiciones, órdenes de compra, recepciones, compras y devoluciones.
                </p>
            </div>
            <div class="col-md-4 wow fadeInLeft center-block" data-wow-delay="0.5s">
                <img alt="Inventario y servicios en aspel sae" class="img-responsive" src="/images-new/marcas/aspel/productos/sae/otros/inelco-aspel-sae-compras.png" style="margin-top:10%">
                </img>
            </div>
        </div>

    </div>
</section>

<section class="secciones-noi" id="news-carateristicas" style="margin-top: 72px;">
    <div class="container">
        <!-- primera parte-->
        <h1 class="funciones-nuevas wow fadeInLeft" " data-wow-delay="0.8s ">
            Nuevos beneficios
        </h1>    
        <div class="ben-1">
            <div class="container wow fadeInRight" data-wow-delay="0.8s">
                <div class="col-md-2">
                    <div class="img-responsive center-block nuevos-beneficios-img">
                        <img alt="Interfaces Sistemas Aspel " class="img-responsive center-block" src="/images-new/marcas/aspel/productos/sae/otros/inelco-aspel-sae-notas-venta.png" style="width:90px;"/>
                    </div>
                </div>
                <div class="col-md-4">    
                    <div class="text nuevos-beneficios">
                        <h3>
                          Nota de Venta
                        </h3>
                        <p>
                           Además de las facturas, remisiones, pedidos y cotizaciones ahora puedes crear notas de venta para transacciones de mostrador. La facturación de estas puede ser: una por una, acumuladas por día o por cliente.</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="img-responsive center-block nuevos-beneficios-img">
                        <img alt="Interfaces Sistemas Aspel " class="img-responsive center-block" src="/images-new/marcas/aspel/productos/sae/otros/inelco-aspel-sae-excel.png" style="width:90px;"/>
                    </div>
                </div>
                <div class="col-md-4">    
                    <div class="text nuevos-beneficios">
                        <h3>
                             Documentos de compra y venta
                        </h3>
                        <p>
                            Personaliza la ventana para agilizar la captura de estos documentos y darle la imagen que tu empresa requiera. Importa documentos de ventas y compras masivamente desde un archivo de Microsoft Excel®, XML o TXT, con un solo clic.</p>
                    </div>
                </div>
            </div>
        </div>
<!-- segunda parte-->
        <div class="ben-2">
            <div class="container wow fadeInLeft " data-wow-delay="0.8s ">
                <div class="col-md-2">
                    <div class="img-responsive center-block nuevos-beneficios-img">
                        <img alt="Interfaces Sistemas Aspel " class="img-responsive center-block" src="/img/img-landings-sae/licencia/aspelsoluciones-productos-sae-conoce-cliente.png "/>
                    </div>
                </div>
                <div class="col-md-4">    
                    <div class="text nuevos-beneficios">
                        <h3>
                            Clientes
                        </h3>
                        <p>
                            Para una mayor eficiencia, control y seguridad en la captura de documentos de venta, ahora puedes asignar a tus clientes una plantilla de captura predefinida y un esquema de impuestos específicos.</p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="img-responsive center-block nuevos-beneficios-img">
                        <img alt="Interfaces Sistemas Aspel " class="img-responsive center-block" src="/images-new/marcas/aspel/productos/sae/otros/inelco-aspel-sae-complemento.png"/>
                    </div>
                </div>
                <div class="col-md-4">    
                    <div class="text nuevos-beneficios">
                        <h3>
                             Comprobante de Recepción de Pagos
                        </h3>
                        <p>
                            Utiliza la nueva herramienta Comprobantes de Pago ubicada en los módulos de Clientes y Ventas, para facilitar la emisión de tus CFDI.</p>
                    </div>
                </div>   
            </div>
        </div>
<!-- terceera parte-->
        <div class="ben-1">
            <div class="container wow fadeInRight " data-wow-delay="0.8s ">
                <div class="col-md-2">
                    <div class="img-responsive">
                            <img alt="Interfaces Sistemas Aspel" class="img-responsive center-block nuevos-beneficios-img" src="/img/img-landings-sae/licencia/aspelsoluciones-productos-sae-administracion-del-punto-de-venta.png"/>
                    </div>
                </div>
                <div class="col-md-4">    
                    <div class="text nuevos-beneficios">
                        <h3>
                           Punto de Venta
                        </h3>
                        <p>
                            Maneja Aspel SAE en un punto de venta. En la recepción de pagos se clasifica el ingreso automáticamente, además calcula y registra el cambio proporcionando el reporte de corte de caja.
                        </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="img-responsive">
                        <img alt="Interfaces Sistemas Aspel" class="img-responsive center-block nuevos-beneficios-img" src="/img/img-landings-sae/licencia/aspelsoluciones-productos-sae-app-sae-movil.png"/>
                    </div>
                </div>
                <div class="col-md-4">    
                    <div class="text nuevos-beneficios" style="margin-right: 36px!important">
                        <h3>
                            SAE Móvil
                        </h3>
                        <p>
                            A través de la aplicación SAE Móvil accede desde cualquier dispositivo móvil a la información de Aspel SAE. Levanta pedidos, agrega clientes, consulta inventarios y estados de cuenta.</p>
                    </div>
                </div>          
            </div>
        </div>
    </div>
    <span style="display:block;height:80px;"></span>
</section>

<div id="contratar-sae"></div>
<section class="secciones-noi" id="barra-solida">
    <div class="fondo-morado">
        <div class="container">
            <h2 class="text-center wow fadeInDown" data-wow-delay="0.5s">
                ¿Aún no tienes Aspel SAE?
            </h2> {{--
            <h3 class="frase-gratis">
                Solicita una licencia y prueba toda su funcionalidad por 30 dias ¡gratis!
            </h3> --}}
            <div class="row">
                <div class="col-md-6">
                    <div class="boton wow fadeInDown" data-wow-delay="0.5s">
                        <a class="btn button-gratis large radius goContrata" href="https://survey.zohopublic.com/zs/N7B5VO" target="_blank" style="text-decoration: none;text-decoration-color: white;margin-top: 1px">
                                    Solicitar licencia gratuita
                            </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="boton wow fadeInDown" data-wow-delay="0.5s">
                        <a class="btn button-gratis large radius goContrata ancla2" href="#contratar-sae2" style="text-decoration: none;margin-top: 1px">
                                    Comprar ahora
                                </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============================================
        INICIO SECCIÓN PARA COMPRAR ASPEL SAE 
    +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+ --}}

<div id="contratar-sae2"></div>
<span style="display:block;margin-top: 52px"></span>
<section>
    <div class="container">
        <h3 class="title-h3" style="color:#c10b11;">
            El nuevo Aspel SAE 7.0 está disponible en 
            <br>
            licenciamiento permanente y en suscripción para que elijas
            <br>
            la opción más conveniente para tu empresa.
        </h3>
    </div>
</section>
<span style="display:block;margin-top: 48px"></span>
<section class="p-list  h5-list title-list1 " id="caract-icrm">
    <div class="container-fluid">
        <div class="row col-md-offset-2">
        
        <!-- === LINK ZOHO SUSCRIPCIÓN SAE === -->
            <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color2">
                <span style="text-align: center;" class="fa fa-clock-o fa-3x fa-fw"></span>
                <h4>
                    <span style="font-weight: 400">
                        ¿No deseas comprar el nuevo Aspel SAE 7.0?
                    </span>
                </h4>
                <p>¡Sólo el tiempo que necesites!</p>
                <h3>
                    <span style="font-weight: 400">
                        Suscripción Mensual
                    </span>
                </h3>
                <span style="display:block;"></span>
                <div class="row plan-features-sae" style="display:flex;justify-content:center;align-items:center;padding-top: 2%">
                    <p class="text-center block-center">
                        <span class="colorprof preci">$517</span>
                    </p>
                </div>
                <span style="display:block;"></span>
                <h4>Incluye:</h4>
                <div class="row" style="padding-left: 32px;">
                    <h5>
                        <span class="glyphicon glyphicon-ok"></span>
                            &nbsp;&nbsp;Licencia Aspel SAE 7.0
                        </h5>
                    <h5>
                        <span class="glyphicon glyphicon-ok"></span>
                            &nbsp;&nbsp;1 usuario/99 empresas
                        </h5>
                    <h5>
                        <span class="glyphicon glyphicon-ok"></span>
                            &nbsp;&nbsp;Timbres ilimitados
                        </h5>
                    <h5>
                        <span class="glyphicon glyphicon-ok"></span>
                            &nbsp;&nbsp;Cupón de 20% en curso
                        </h5>
                    <h5>
                        <span class="glyphicon glyphicon-ok"></span>
                            &nbsp;&nbsp;Cupón de 20% en pólizas
                        </h5>
                        <span style="display:block;height:4px"></span>
                </div>
                <br>
                <a style="text-decoration: none" href="https://survey.zohopublic.com/zs/deCuf4" target="_blank">
                    <button type="button" class="btn btn-sae btn-lg" id="btn-sae">
                            Contratar ahora
                    </button>
                </a>
                <span style="display:block;margin-bottom:36px"></span>
            </div>
        <!-- === LINK ZOHO LICENCIA SAE === -->
            <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color1">
                <span class="fa fa-star-o fa-3x fa-fw"></span>
                <h4>
                    <span style="font-weight: 400">
                        ¿Deseas obtenerlo de manera permanente?
                    </span>
                </h4>
                <p>¡Adquiére hoy la licencia nueva!</p>
                <h3>
                    <span style="font-weight: 400">
                        Licencia permante
                    </span>
                </h3>
                <span style="display:block;"></span>
                <div class="row plan-features-sae" style="display:flex;justify-content:center;align-items:center;padding-top: 2%">
                    <p class="text-center">
                        <span class="colorprof preci">$10,225</span>
                    </p>
                </div>
                <span style="display:block;"></span>
                <h4>Incluye:</h4>
                <div class="row" style="padding-left: 32px;">
                    <h5>
                        <span class="glyphicon glyphicon-ok"></span>
                            &nbsp;&nbsp;Licencia Aspel SAE 7.0
                    </h5>
                    <h5>
                        <span class="glyphicon glyphicon-ok"></span>
                            &nbsp;&nbsp;1 usuario/99 empresas
                        </h5>
                    <h5>
                        <span class="glyphicon glyphicon-ok"></span>
                            &nbsp;&nbsp;Cupón de 20% en curso
                        </h5>
                    <h5>
                        <span class="glyphicon glyphicon-ok"></span>
                            &nbsp;&nbsp;Cupón de 20% en pólizas
                        </h5>
                    <span style="display:block;height:30px"></span>
                </div>
                <br>
                <a style="text-decoration: none" href="https://survey.zohopublic.com/zs/HLCulK" target="_blank">
                    <button type="button" class="btn btn-sae btn-lg" id="btn-sae">
                        Contratar ahora
                    </button>
                </a>
                <span style="display:block;margin-bottom:36px"></span>
            </div>
        <!-- === LINK ZOHO ACTUALIZACIÓN SAE === -->
            <div class="col-md-3 col-sm-4 box-solutions pullUp" id="listpres-color1">
                <span class="fa fa-refresh fa-3x fa-fw"></span>
                <h4>
                    <span style="font-weight: 400">
                        ¿Cuentas con alguna versión anterior?
                    </span>
                </h4>
                <p>¡Actualizate ahora!</p>
                <h3>
                    <span style="font-weight: 400">
                        Actualización
                    </span>
                </h3>
                <span style="display:block;"></span>
                <div class="row plan-features-sae" style="display:flex;justify-content:center;align-items:center;padding-top: 2%">
                    <p class="text-center">
                        <span class="colorprof preci">$6,620</span>
                    </p>
                </div>
                <span style="display:block;"></span>
                <h4>Incluye:</h4>
                <div class="row" style="padding-left: 32px;">
                    <h5>
                        <span class="glyphicon glyphicon-ok"></span>
                            &nbsp;&nbsp;Licencia Aspel SAE 7.0
                    </h5>
                    <h5>
                        <span class="glyphicon glyphicon-ok"></span>
                            &nbsp;&nbsp;1 usuario/99 empresas
                    </h5>
                    <h5>
                        <span class="glyphicon glyphicon-ok"></span>
                            &nbsp;&nbsp;Cupón de 20% en curso
                        </h5>
                    <h5>
                        <span class="glyphicon glyphicon-ok"></span>
                            &nbsp;&nbsp;Cupón de 20% en pólizas
                        </h5>
                    <span style="display:block;height:30px"></span>
                </div>
                <br>
                <a style="text-decoration: none" href="https://survey.zohopublic.com/zs/nvCuRB" target="_blank">
                    <button class="btn btn-sae btn-lg " data-toggle="modal" id="btn-sae">
                        Contratar ahora
                    </button>
                </a>
                <span style="display:block;margin-bottom:36px"></span>
            </div>
        </div>
    </div>
</section>
{{-- -+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+-
        FIN SECCIÓN PARA COMPRAR ASPEL SAE
    ============================================= --}} 
    <section>
        <div class="container-fluid">
            <div class="col-md-6">
{{--                 <ul style="list-style: none">
                    <li>* Precios en MXN + IVA.</li>
                    <li>** No incluye servicio de implementación.</li>
                </ul>  --}}
                <p>Terminos y condiciones: Precios en MXN + IVA. No incluye servicio de implementación. Precio por sólo un usuario. El costo por usuario adicional varia. Promoción válida sólo en mayo 2018.</p> 
            </div>
        </div>
    </section>
    <span style="display:block;margin-bottom: 64px"></span>

{{-- ENCUESTA SUSCRIPCION --}}
{{-- <script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script> --}}

{{-- ENCUESTA LICENCIA--}}
{{-- <script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script> --}}

{{-- ENCUESTA ACTUALIZACION--}}
{{-- <script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script> --}}

<script type="text/javascript">
var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode:"9f9e70d185f4d218e80feae15380fbd8b58e031ab6b34c3a879ef3dfeafec28b40a65cf3953078af9fd0897ab113022a", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>");
</script>
<script>
    $("#myModalPromo-QUITAR").modal("show");
    window.setTimeout(function(){
     $('#myModalPromo-QUITAR').modal('hide');
  }, 10000); 


    $(document).ready(function() {
     if($(window).width() > 697) {
         $(".img-promocion").attr("src", "/images-new/inelco/promocion/banner/promocion-popup.png");
     } else {
         $(".img-promocion").attr("src", "/images-new/inelco/promocion/banner/promocion-popup-mobile.png");
     }
    }); 
</script>
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
