@extends('templates.main')
@section('title','SAE Móvil')


@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
    @include('templates.sae.banner-sae')
<section class="secciones sae-pages">
    <div class="container">
        <h2 class="title-h2">
            SAE Móvil
        </h2>
        <h3 class="title-h3">
            Se sincroniza con Aspel SAE para controlar desde cualquier lugar las operaciones de tu empresa.
        </h3>
        <div class="row filas">
            <div class="col-md-6 texto">
                <h5 class="title-h5">
                    Control desde dispositivos móviles
                </h5>
                <ul>
                    <li>
                        Con tu smartphone o tablet puedes acceder y actualizar en línea de forma fácil y oportuna la información de tu negocio.
                    </li>
                    <li>
                        Con la interfaz mejorada tienes mayor facilidad de navegación, contenido organizado y más funciones de Aspel SAE que te ayudarán a potenciar tu trabajo diario.
                    </li>
                </ul>
            </div>
            <div class="col-md-6 imagencontainer">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
                <img alt="sae movil" class="img-responsive" src="/img/productos/sae/inelco-aspel-sae-movil-pedidos-y-graficas.png">
                </img>
            </div>
        </div>
    </div>
</section>
<section class="secciones sae-pages" id="beneficios">
    <div class="container">
        <h3 class="title-h3">
            Beneficios
        </h3>
        <div class="row interfaz filas">
            <div class="col-md-4">
                <center>
                    <img alt="SAE Móvil consultas, vendedores y clientes" class="img-responsive logo-produ" src="/img/productos/sae/inelco-sae-movil-consultas-vendedores-clientes.png"/>
                </center>
                <h5 class="title-h5">
                    Consultas de clientes y vendedores
                </h5>
                <p class="p-css">
                    Conéctate a tu propia nube, genera cotizaciones y obtén mayor información en las consultas de clientes, contactos, vendedores, productos y almacenes.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="moneda extranjera" class="img-responsive logo-produ" src="/img/productos/sae/inelco-sae-movil-moneda-extranjera.png"/>
                </center>
                <h5 class="title-h5">
                    Cotizaciones con moneda extranjera
                </h5>
                <p class="p-css">
                    Al momento de generar cotizaciones y pedidos, también puedes realizar el cambio a moneda extranjera.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="cotizaciones pedidos" class="img-responsive logo-produ" src="/img/productos/sae/inelco-sae-movil-cotizaciones-pedidos.png"/>
                </center>
                <h5 class="title-h5">
                    Cotizaciones y pedidos en tiempo real
                </h5>
                <p class="p-css">
                    Consulta la información de tus clientes y almacenes que tus vendedores han dado de alta para las cotizaciones y pedidos.
                </p>
            </div>
        </div>
        <div class="row interfaz filas">
            <div class="col-md-4">
                <center>
                    <img alt="dispositivos en la nube" class="img-responsive logo-produ" src="/img/productos/sae/inelco-sae-movil-dispositivos-nube.png"/>
                </center>
                <h5 class="title-h5">
                    Conexión con SAE en mi propia Nube
                </h5>
                <p class="p-css">
                    Activa la conexión de tu propia nube para intercambiar información entre tu equipo de trabajo.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="sae movil estadisticas" class="img-responsive logo-produ" src="/img/productos/sae/inelco-sae-movil-estadisticas.png"/>
                </center>
                <h5 class="title-h5">
                    Estadísticas de tu negocio
                </h5>
                <p class="p-css">
                    Crea y envía por correo electrónico o bluetooth estadísticas personalizadas de acuerdo a tus necesidades.
                </p>
            </div>
            <div class="col-md-4">
                <center>
                    <img alt="almacen lista precios" class="img-responsive logo-produ" src="/img/productos/sae/inelco-sae-movil-almacen-lista-precios.png"/>
                </center>
                <h5 class="title-h5">
                    Control y consulta de inventarios
                </h5>
                <p class="p-css">
                    Entérate en cualquier momento de las existencias por almacén y de las listas de precio asignadas al producto.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="secciones sae-pages soluciones-sae">
    <div class="container">
        <h3 class="title-h3">
            <img alt="SAE Movil" src="/img/productos/sae/aspel-home-mini-sae-movil.png"/>
            Descargar Aspel-SAE Móvil
        </h3>
        <div class="row filas">
            <div class="col-md-12">
                <p class="p-css">
                    Para utilizar SAE Móvil, tu empresa debe tener contratado una licencia (base) de ASPEL-SAE 7.0 y realizar la configuración correspondiente para acceder a la información. De igual forma, requieres de una licencia de usuario adicional para usar esta app. Disponible para dispositivos iOS (versión 7.0 o superior) y dispositivos Android (versión 4.0 o superior).
                </p>
                <div class="hover14 column">
                    <div>
                        <figure>
                            <a href="https://itunes.apple.com/us/app/aspel-sae-movil-2/id1084495908?l=es&ls=1&mt=8" target="_blank">
                                <img class="img-responsive" src="/img/productos/app store.png"/>
                            </a>
                        </figure>
                    </div>
                    <div>
                        <figure>
                            <a href="https://play.google.com/store/apps/details?id=com.aspel.SAEMovil" target="_blank">
                                <img class="img-responsive" src="/img/productos/google-play.png"/>
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="row filas">
            <p>
                <a class="" data-toggle="collapse" href="#demo">
                    Guía de configuración
                </a>
            </p>
            <div class="collapse" id="demo">
                <p>
                    Una vez instalada la aplicación en tu dispositivo, realiza los siguientes pasos:
                </p>
                <ul>
                    <li>
                        1. Haz clic en el ícono SAE Móvil y te mostrará la pantalla de inicio.
                    </li>
                    <li>
                        2. Da clic en el botón “+” y registra tu servidor, indicando la información que se solicita, según el tipo de conexión que deseas agregar (directa o en Mi nube):
                        <ul class="otro">
                            <li>
                                <b>
                                    Conexión directa.-
                                </b>
                                Ingresa los siguientes datos:
                                <ul>
                                    <li>
                                        Nombre de la conexión: Indica el nombre que deseas asignar a la conexión, puedes indicar el nombre del servidor de tu empresa.
                                    </li>
                                    <li>
                                        URL de acceso: Indica la dirección IP del equipo servidor, es decir, aquel donde tienes instalada la última versión de tu Aspel-SAE 7.0. Ejemplo: con IP pública: 192.168.14.179
                                    </li>
                                    <li>
                                        Puerto: Por omisión se mostrara el puerto 80, que es el puerto por donde entrará y saldrá la información hacia Internet, aunque también se puede dejar en blanco el campo. Se recomienda no cambiar el valor por omisión.
                                    </li>
                                    <li>
                                        SSL: Especifica si cuentas con un certificado de seguridad: Si seleccionas “NO”, cuando se realice la conexión al servidor indicado, al dominio se le añade el protocolo “http”, de lo contrario se le añadirá el protocolo de seguridad “https”.
                                    </li>
                                    <li>
                                        Periodo: Se tienen 5 opciones, las cuales son: 30 días, 60 días, 90 días, 180 días y Todas. Este parámetro determinara el periodo para realizar la sincronización de documentos con el servidor. La aplicación tomará aquellos documentos en estén vigentes de acuerdo al periodo seleccionado.
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <b>
                                    Mi nube.-
                                </b>
                                Agrega los siguientes datos:
                                <ul>
                                    <li>
                                        Nombre de la conexión: Indica el nombre que deseas asignar a la conexión.
                                    </li>
                                    <li>
                                        Nombre de red: Es el nombre que se le asignó a la conexión Mi nube, en el servidor de tu Aspel-SAE 7.0
                                    </li>
                                    <li>
                                        ID: Es el conjunto de 9 dígitos que se genera de manera automática cuando se activa el servicio Mi nube en el servidor.
                                    </li>
                                    <li>
                                        Contraseña: Como su nombre lo indica, es la contraseña que se le asignó a la conexión Mi nube en el servidor.
                                    </li>
                                    <li>
                                        Puerto: Por omisión se mostrara el puerto 80, que es el puerto por donde entrará y saldrá la información hacia Internet, aunque también se puede dejar en blanco el campo. Se recomienda no cambiar el valor por omisión.
                                    </li>
                                    <li>
                                        Periodo:La aplicación tomará aquellos documentos en estén vigentes de acuerdo al periodo seleccionado.
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        3. Haz clic en “Guardar”.
                    </li>
                    <li>
                        4. Selecciona el servidor al cual deseas conectarte y haz clic en el botón “Conectar”, el cual presentara los siguientes accesos donde deberás:
                        <ul>
                            <li>
                                a) Seleccionar de las empresas registradas en tu Aspel-SAE 7.0 aquella a la que deseas tener acceso.
                            </li>
                            <li>
                                b) Indicar el Usuario y contraseña del usuario para acceder a tu información y comenzar.
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@include('partials.botones-compra-sae')
@include('templates.sae.menu-sae')
@endsection

@push('add-js')

@stack('files-menu')
@endpush
