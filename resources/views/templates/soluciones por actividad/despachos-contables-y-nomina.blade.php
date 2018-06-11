@extends('templates.main')
@section('title','Base de Conocimientos de Aspel Soluciones')
@section('content')
<section class="base" id="base">
    <div class="container">
        <h1>
            Sistemas Aspel para despachos contables y nómina
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
        <div class="row">
            <div class="col-md-6">
                <img alt="inelco aspel sae area comercial" class="img-responsive" src="/img/productos/banco/inelco-aspel-banco-administracion.png"/>
                <h3>
                    Sistema de Control Bancario
                </h3>
                <ul>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Controla cualquier cuenta bancaria y obtén información financiera precisa en todo momento
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Realiza la conciliación electrónica con las principales instituciones financieras.
                    </li>
                    <li>
                        <i aria-hidden="true" class="fa fa-angle-right">
                        </i>
                        Cuenta con interfaz con Aspel-SAE y Aspel-COI para una mejor administración y contabilidad.
                    </li>
                </ul>
                <div align="right" class="boton">
                    <a href="{{url('aspel-banco')}}">
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
