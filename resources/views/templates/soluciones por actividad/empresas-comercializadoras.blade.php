@extends('templates.main')
@section('title','Base de Conocimientos de Aspel Soluciones')
@section('content')
<section class="base" id="base">
    <div class="container">
        <h1>
            Sistemas Aspel para empreas comercializadoras
        </h1>
        <p>
            Ofrecemos el software líder para
            <span>
                emprendedores, profesionistas y PyMES
            </span>
        </p>
    </div>
</section>
<section class="sistemas" id="empresas-comercializadoras">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img alt="inelco aspel sae area comercial" class="img-responsive" src="/img/productos/sae/inelco-aspel-SAE-areaComercial.png">
                    <h3>
                        Sistema Administrativo Empresarial
                    </h3>
                    <ul>
                        <li>
                            <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Administra todas las operaciones del ciclo de compra-venta de la empresa.
                        </li>
                        <li>
                            <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Emite Facturación Electrónica CFDI para tu negocio.
                        </li>
                        <li>
                            <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Incluye herramientas CRM para optimizar los esfuerzos de las áreas administrativas y comerciales.
                        </li>
                    </ul>
                    <div align="right" class="boton">
                        <a href="{{url('aspel-sae')}}">
                            <button class="btn btn-default" type="button">
                                Mas información
                            </button>
                        </a>
                    </div>
                </img>
            </div>
            <div class="col-md-6">
                <img alt="inelco aspel sae area comercial" class="img-responsive" src="/img/productos/caja/inelco-aspel-caja-area-comercial.png"/>
                <h3>
                    Sistema de Punto de Venta y Administración de Comercios
                </h3>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Controla y administra las operaciones de ventas, facturación e inventarios de uno o varios comercios.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Convierte tu PC en un punto de venta capaz de operar con pantallas de torreta y lectores de código de barras.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Emite Comprobantes Fiscales Digitales por Internet (CFDI) de acuerdo con las disposiciones fiscales vigentes
                    </li>
                </ul>
                <div align="right" class="boton">
                    <a href="{{url('aspel-caja')}}">
                        <button class="btn btn-default" type="button">
                            Mas información
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img alt="inelco aspel sae area comercial" class="img-responsive" src="/img/productos/facture/inelco-aspel-facture-area-comercial.png"/>
                <h3>
                    Sistema de Facturación Electrónica
                </h3>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Genera Comprobantes Fiscales Digitales por Internet CFDI.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Emite facturas, notas de crédito, recibos de honorarios y de arrendamiento.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Factura de acuerdo con las disposiciones fiscales vigentes.
                    </li>
                </ul>
                <div align="right" class="boton">
                    <a href="{{url('aspel-facture')}}">
                        <button class="btn btn-default" type="button">
                            Mas información
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <img alt="inelco aspel sae area comercial" class="img-responsive" src="/img/productos/adm/inelco-aspel-adm-administracion.png"/>
                <h3>
                    Sistema de Administración Móvil
                </h3>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Elabora cotizaciones, facturas y compras de forma sencilla y productiva.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Ten disponible en todo momento el estado de tus cuentas por cobrar.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Mantén un oportuno seguimiento de las ventas, gastos e ingresos.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Maneja eficientemente tu catálogo de clientes, productos y servicios.
                    </li>
                </ul>
                <div align="right" class="boton">
                    <a href="{{url('aspel-adm')}}">
                        <button class="btn btn-default" type="button">
                            Mas información
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
