@extends('templates.main')
@section('title','Base de Conocimientos de Aspel Soluciones')
@section('content')
<section class="base" id="base">
    <div class="container">
        <h1>
            Sistemas Aspel para instituciones educativas
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
                <img alt="inelco aspel sae area comercial" class="img-responsive" src="/img/productos/coi/inelco-aspel-COI-administracion.png">
                    <h3>
                        Sistema de Contabilidad Integral
                    </h3>
                    <ul>
                        <li>
                            <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Cumple con los requerimientos de la Contabilidad Electrónica de manera fácil, eficiente y oportuna.
                        </li>
                        <li>
                            <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Procesa, integra y mantiene actualizada la información contable y fiscal.
                        </li>
                        <li>
                            <i aria-hidden="true" class="fa fa-angle-right">
                            </i>
                            Genera las diferentes declaraciones fiscales e informativas como IVA, ISR y DIOT.
                        </li>
                    </ul>
                    <div align="right" class="boton">
                        <a href="{{url('aspel-coi')}}">
                            <button class="btn btn-default" type="button">
                                Mas información
                            </button>
                        </a>
                    </div>
                </img>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img alt="inelco aspel sae area comercial" class="img-responsive" src="/img/productos/noi/inelco-aspel-NOI-administracion.png"/>
                <h3>
                    Sistema de Nómina Integral
                </h3>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Genera recibos de nómina electrónicos CFDI.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Controla con exactitud y de manera automática todos los aspectos de la nómina como sueldos, salarios, percepciones, deducciones y más.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Calcula las retenciones de impuestos y aportaciones de ISR, IMSS e Infonavit.
                    </li>
                </ul>
                <div align="right" class="boton">
                    <a href="{{url('aspel-noi')}}">
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
