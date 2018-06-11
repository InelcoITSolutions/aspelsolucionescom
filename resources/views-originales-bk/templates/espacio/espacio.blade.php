@extends('templates.main')
@section('title','ESPACIO')
@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
@include('flash::message')
@include('templates.espacio.banner-espacio')
@include('partials.ventana-modal-sae'){{-- checar estos include--}}
@include('partials.popup-desc-direc-sae')
<section class="descripcion-espacio desc-espacio secciones" id="mas-informacion">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>
                    Búzon inteligente empresarial
                </h2>
                <p>
                    <b>
                        Aspel ESPACIO
                    </b>
                    Espacio Aspel es un servicio inteligente en la nube donde puedes concentrar y compartir información contable, financiera y comercial de manera segura y efectiva 
                </p>
                <p>
                    <strong>Espacio Aspel</strong> te ofrece un Buzón Contable que permite la administración e intercambio de información entre clientes y despachos de manera sencilla y eficiente. Organiza los Comprobantes Fiscales de las operaciones contables para su registro automático en Aspel-COI. Es ideal para despachos contables y empresas a las que les llevan la contabilidad o para empresas con sucursales.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="inelco-ciclo aspel sae" class="img-responsive" 
                    src="/img/inelco-aspel-espacio-logo.png" width="200"/>
                </center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img alt="nuevo complemento INE" class="img-responsive zoom" src="/img/productos/espacio/inelco-aspel-lo-nuevo-herramientas-administracion-archivos.png">
            </img>
        </div>
        <div class="col-md-6">
            <br>
            <br>
            <h5 class="title-h5">
                Mayor movilidad en tus operaciones
            </h5>
            <p class="p-css">
                Utiliza la herramienta “Mover” para cambiar la ubicación de una operación con sus respectivos archivos dentro del Buzón Contable. ¡Para tener tu información más organizada!
            </p>
        </div>
    </div>

    <div class="row">
        <br>
        <div class="col-md-6">
            <h5 class="title-h5">
                Descarga masiva de documentos
            </h5>

            <p class="p-css">
                hora es más rápido descargar los documentos que necesitas desde su consulta. Con solo seleccionarlos marcando la columna “Descargar”, <strong>ⓔspacio Aspel</strong> creará un archivo ZIP listo para que lo compartas fácilmente.
            </p>

        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="col-md-6 imagencontainer">
            <img alt="catalogo de metodos de pago" class="img-responsive zoom1" data-zoom-image="/img/productos/inelco-catalogo_de_metodos_de_pago_con_SAE-HD.png" src="/img/productos/espacio/inelco-aspel-lo-nuevo-descarga-masiva-documentos.png">
        </img>
    </div>
</div>


</div>
</section>
<section class="word-frase sections " id="frase-sae">
    <div class="fondo-gray-espacio">
        <div class="container">
            <h2 class="title-h2">
                Te presentamos ESPACIO Aspel
            </h2>
            <h3>
                <i>
                    El fin de la era de los papeles
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
    <section class="caracteristicas-espacio sae secciones">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="control de tu empresa" src="/img/productos/espacio/presentacion/inelco-espacio-aspel-proteccion-de-cfdi.png"/>
                    </center>
                    <h3>
                        Protección total
                    </h3>
                    <p>
                        Es 100% seguro y siempre está accesible, ya que se hospeda en servidores con altos estándares de seguridad y disponibilidad.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="contabilidad electrónica" src="/img/productos/espacio/presentacion/inelco-espacio-aspel-comparte-informacion.png"/>
                    </center>
                    <h3>
                        Comparte con tu equipo
                    </h3>
                    <p>
                        Funciona como una herramienta para compartir la información contable y financiera que tú decidas con las personas que elijas, ¿te imaginas compartir las estadísticas de ventas con todos tus ejecutivos de cuenta o que tus directivos siempre puedan consultar el último estado de resultados actualizado? Estos son algunos ejemplos de su potencial.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="conoce cliente" src="/img/productos/espacio/presentacion/inelco-espacio-aspel-control-de-accesos.png"/>
                    </center>
                    <h3>
                        Control total de accesos
                    </h3>
                    <p>
                        Proporciona seguridad total de tu información, ya que el acceso a los datos siempre es a través de <strong>claves de usuario</strong> que tú asignas.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img alt="administracion del punto de venta" src="/img/productos/espacio/presentacion/inelco-espacio-aspel-almacena-informacion.png"/>
                    </center>
                    <h3>
                        Guarda todo tipo de información
                    </h3>
                    <p>
                        Es una unidad que trabaja como disco duro virtual para almacenar toda la información que necesites. Como guardar por ejemplo, las Bases de Datos e información de tus Sistemas Aspel, además estos respaldos se generan automáticamente, a través de la opción “Respaldos Automáticos” que los Sistemas Aspel te ofrecen.
                    </p>
                </div>
                <div class="col-md-4">
                    <center>
                        <img alt="app sae-movil" src="/img/productos/espacio/presentacion/inelco-aspel-productos-espacio-respalda-cfdi.png"/>
                    </center>
                    <h3>
                        Resguarda tus CFDI de los Sistemas Aspel
                    </h3>
                    <p>
                        Almacena y administra los CFDI generados por los Sistemas Aspel, así siempre tendrás una copia confiable.  
                    </p>
                </div>
            </div>

        </div>
    </section>
    @include('partials.botones-compra-espacio')


    @endsection
    @push('add-js')

    @stack('files-menu')


    @endpush
