@extends('templates.usuarios.plantilla')
@section('title','Información')


@section('content')
<section class="categoria" id="categoria">
    <div class="container">
        <div class="row">
            <h1 class="text-center h1-responsive">
                Panel de Administración del usuario
            </h1>
        </div>
    </div>
</section>
<section class="descargas" id="desc">
    <div class="container">
        <div class="col-sm-3 col-md-3" id="sp-left">
            <div class="sp-column custom-class">
                <div class="sp-module mimenu">
                    <p class="sp-module-title">
                        Categorías
                    </p>
                    <div class="sp-module-content">
                        <ul class="nav nav-menu">
                            <li class="active item-732">
                                <a data-toggle="tab" href="#datos">
                                    Datos
                                </a>
                            </li>
                            <li class="item-732">
                                <a data-toggle="tab" href="#compras">
                                    Compras
                                </a>
                            </li>
                            <li class="item-732">
                                <a data-toggle="tab" href="#descargas">
                                    Descargas
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">
            {{--  VENTANA  DE LOS DATOS DEL USUARIO --}}
            <div class="tab-pane fade in active col-md-9" id="datos">
                <div class="col-md-4">
                    <h3>
                        Datos de contacto
                    </h3>
                    <p>
                        Nombre: {{ Auth::user()->name }}
                    </p>
                    <p>
                        Correo: {{ Auth::user()->email }}
                    </p>
                    <p>
                        Telefono: {{ Auth::user()->telefono}}
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>
                        Datos de fiscales
                    </h3>
                    <p>
                        Razón social: {{ Auth::user()->razon_social}}
                    </p>
                    <p>
                        RFC: {{ Auth::user()->rfc}}
                    </p>
                    <p>
                        Nombre comercial: {{ Auth::user()->nombre_comercial}}
                    </p>
                    <p>
                        Contribuyente: {{ Auth::user()->contribuyente}}
                    </p>
                    <p>
                        Correo de facturacion: {{ Auth::user()->correo_facturacion}}
                    </p>
                </div>
                <div class="col-md-4">
                    <h3>
                        Direccion
                    </h3>
                    <p>
                        Pais: {{ Auth::user()->pais}}
                    </p>
                    <p>
                        Estado: {{ Auth::user()->estado}}
                    </p>
                    <p>
                        Ciudad: {{ Auth::user()->ciudad}}
                    </p>
                    <p>
                        Colonia: {{ Auth::user()->colonia}}
                    </p>
                    <p>
                        Calle: {{ Auth::user()->calle}}
                    </p>
                    <p>
                        No. exterior: {{ Auth::user()->no_exterior}}
                    </p>
                    <p>
                        No. interior: {{ Auth::user()->no_interior}}
                    </p>
                    <p>
                        Codigo postal: {{ Auth::user()->cp}}
                    </p>
                </div>
                <p class="editar">
                    <a class="btn btn-primary" href="{{route('mostrar-carrito')}}">
                        Editar información
                    </a>
                </p>
            </div>
            {{--  VENTANA  DE LAS COMPRAS DEL USUARIO --}}
            <div class="tab-pane fade col-md-9" id="compras">
                <h3>
                    COMPRAS
                </h3>
                <p>
                    Administra y controla todas las operaciones del ciclo de compra-venta de la empresa, incluye herramientas de CRM y Facturación Electrónica para optimizar los esfuerzos de las áreas administrativas y comerciales.
                </p>
            </div>
            {{--  VENTANA  DE LAS DESCARGAS DEL USUARIO --}}
            <div class="tab-pane fade col-md-9" id="compras">
                <h3>
                    DESCARGAS
                </h3>
                <p>
                    Administra y controla todas las operaciones del ciclo de compra-venta de la empresa, incluye herramientas de CRM y Facturación Electrónica para optimizar los esfuerzos de las áreas administrativas y comerciales.
                </p>
            </div>
        </div>
    </div>
</section>
@stop
