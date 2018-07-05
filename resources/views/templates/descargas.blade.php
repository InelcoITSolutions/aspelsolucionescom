@extends('templates.main')
@section('title','Centro de descargas')
@section('content')

<section id="descarga">
    <div class="img">
        <div class="container">
            <h1 class="wow fadeInDown" data-wow-delay="0.5s">
                centro de descargas
            </h1>
            <p class="wow fadeInDown" data-wow-delay="0.5s">
                Elige el sistema que desees utilizar
            </p>
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
                        <ul class="nav menu">
                            <li class="item-732">
                                <a data-toggle="tab" href="#aspel-sae">
                                    Aspel SAE
                                </a>
                            </li>
                            <li class="item-732">
                                <a data-toggle="tab" href="#aspel-coi">
                                    Aspel COI
                                </a>
                            </li>
                            <li class="item-732">
                                <a data-toggle="tab" href="{{url('descargas#aspel-noi')}}">
                                    Aspel NOI
                                </a>
                            </li>
                            <li class="item-732">
                                <a data-toggle="tab" href="#aspel-caja">
                                    Aspel CAJA
                                </a>
                            </li>
                            <li class="item-732">
                                <a data-toggle="tab" href="#aspel-banco">
                                    Aspel BANCO
                                </a>
                            </li>
                            <li class="item-732">
                                <a data-toggle="tab" href="#aspel-prod">
                                    Aspel PROD
                                </a>
                            </li>
                            <li class="item-732">
                                <a data-toggle="tab" href="#aspel-facture">
                                    Aspel FACTURE
                                </a>
                            </li>
                            <li class="item-732">
                                <a data-toggle="tab" href="#aspel-adm">
                                    Aspel ADM
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">
            {{--  VENTANA DE ASPEL SAE --}}
            <div class="tab-pane fade in active col-md-9" id="aspel-sae">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#sae">
                            Descargar Aspel SAE
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#menu1">
                            Versiones Anteriores
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#menu2">
                            Requerimientos del sistema
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active unico" id="sae">
                        <h3>
                            Sistema Administrativo Empresarial
                        </h3>
                        <p>
                            Administra y controla todas las operaciones del ciclo de compra-venta de la empresa, incluye herramientas de CRM y Facturación Electrónica para optimizar los esfuerzos de las áreas administrativas y comerciales.
                        </p>
                        <ul class="list">
                            <li>
                                <img alt="" src="/img/aspel-SAE.png" title="">
                                    <section class="list-left">
                                        <h5 class="title">
                                            Aspel-SAE 7.0 - R17
                                            <br>
                                            </br>
                                        </h5>
                                        <span class="adprice">
                                            Sistema Administrativo Empresarial
                                        </span>
                                        <strong class="date">
                                            Actualizado:
                                            <span>
                                                20 / junio / 2018
                                            </span>
                                        </strong>
                                        <p class="catpath">
                                            Controla el ciclo de todas las operaciones de compra-venta de la empresa, como inventarios, clientes, facturación, cuentas por cobrar, vendedores, compras, proveedores y cuentas por pagar, automatizando eficientemente los procesos administrativos. Ofrece movilidad a las empresas conectando las sucursales remotamente y por medio de dispositivos móviles; permite el acceso a la información comercial y administrativa, brindando una integración total. Poderosa interfaz con Aspel COI para relacionar los folios fiscales de los Comprobantes Fiscales Digitales a las pólizas, de acuerdo con los requerimientos de la Contabilidad Electrónica.
                                        </p>
                                        <a href='https://survey.zohopublic.com/zs/5tB5WF' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
                                            <button class="btn btn-default" type="button">
                                                Licencia Gratuita
                                            </button>
                                        </a>

                                        <a href='https://survey.zohopublic.com/zs/EGB5W6' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
                                            <button class="btn btn-default" type="button">
                                                Descarga Ahora
                                            </button>
                                        </a>

                                    </section>
                                    <div class="clearfix">
                                    </div>
                                </img>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade unico1" id="menu1">
                        <div class="well">
                            <span>
                                Aspel-SAE 7.0 Reinstalable 16
                            </span>
                            <br>
                                Actualizado: 01 / 03 / 2018
                            </br>
                            <em class="download">
                                294 MB
                                <a class="ico icon-download" href="http://ftp.aspel.com/Download/SAE/reinstal/ASPEL-SAE70_R16.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            <span>
                                Aspel-SAE 6.0 Reinstalable 12
                            </span>
                            <br>
                                Actualizado: 06 / 01 / 2017
                            </br>
                            <em class="download">
                                294 MB
                                <a class="ico icon-download" href="ftp://aspelprod.cloudapp.net/Download/SAE/reinstal/ASPEL-SAE60_R12.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            <span>
                                Aspel-SAE 5.0 Reinstalable 24
                            </span>
                            <br>
                                Actualizado: 12 / 12 / 2014
                            </br>
                            <em class="download">
                                241 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/sae/reinstal/ASPEL-SAE50_R24.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            <span>
                                Aspel-SAE 4.6 Reinstalable 7
                            </span>
                            <br>
                                Actualizado: 23 / 09 / 2011
                            </br>
                            <em class="download">
                                126 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/sae/reinstal/Aspel-SAE4.6_R7.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            <span>
                                Barra de Microsoft Excel® para la Declaración informativa de operaciones con terceros
                            </span>
                            <br>
                                Actualizado: 29 / 01 / 2010
                            </br>
                            <em class="download">
                                1.2 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/sae/reinstal/Aspel - Operaciones con Terceros.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            <span>
                                Aspel-SAE 4.5 Reinstalable 2
                            </span>
                            <br>
                                Actualizado: 02 / 10 / 2009
                            </br>
                            <em class="download">
                                115 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/sae/reinstal/Aspel-SAE4.5_R2.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            <span>
                                Aspel-SAE 4.0 Reinstalable 23
                            </span>
                            <br>
                                Actualizado: 13 / 08 / 2009
                            </br>
                            <em class="download">
                                74 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/sae/reinstal/ASPEL-SAE40_R23.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                    </div>
                    <div class="tab-pane fade unico2" id="menu2">
                        @include('partials.requerimientos1-sistemas')
                    </div>
                </div>
            </div>
            {{--  VENTANA DE ASPEL COI --}}
            <div class="tab-pane fade col-md-9" id="aspel-coi">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#coi">
                            Descargar Aspel COI
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#coi1">
                            Versiones Anteriores
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#coi2">
                            Requerimientos del sistema
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active unico" id="coi">
                        <h3>
                            Sistema de Contabilidad Integral
                        </h3>
                        <p>
                            Integra la funcionalidad de la Contabilidad Electrónica. Procesa, integra y mantiene actualizada la información contable y fiscal de la empresa. Simplifica tus actividades y genera las declaraciones como IVA, ISR y DIOT.
                        </p>
                        <ul class="list">
                            <li>
                                <img alt="" src="/img/aspel-COI.png" title="">
                                    <section class="list-left">
                                        <h5 class="title">
                                            Aspel-COI 8.0 - R8
                                            <br>
                                            </br>
                                        </h5>
                                        <span class="adprice">
                                            Sistema de Contabilidad Integral
                                        </span>
                                        <strong class="date">
                                            Actualizado:
                                            <span>
                                                31 / mayo / 2018
                                            </span>
                                        </strong>
                                        <p class="catpath">
                                            Procesa, integra y mantiene actualizada la información contable y fiscal de la empresa en forma segura y confiable. Cumple con las diferentes especificaciones y funciones para el manejo de la Contabilidad Electrónica 1.3, de acuerdo con las disposiciones fiscales vigentes. Además, proporciona diversos reportes, documentos y gráficas que permiten evaluar el estado financiero de la organización. Genera oportunamente las diferentes declaraciones fiscales como las correspondientes a IVA, ISR y DIOT. Mantiene interfaz con los Sistemas Aspel y hojas de cálculo.
                                        </p>
                                        <a  href='https://survey.zohopublic.com/zs/fMB0V6' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
                                            <button class="btn btn-default" type="button">
                                                Licencia Gratuita
                                            </button>
                                        </a>
                                        <a  href='https://survey.zohopublic.com/zs/a1B0yK' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
                                            <button class="btn btn-default" type="button">
                                                Descargar Ahora
                                            </button>
                                        </a>
                                    </section>
                                    <div class="clearfix">
                                    </div>
                                </img>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade unico1" id="coi1">
                        <div class="well">
                            Aspel-COI 8.0 Reinstalable 7
                            <br>
                                Actualizado: 24 / 05 / 2017
                            </br>
                            <em class="download">
                                157 MB
                                <a class="ico icon-download" href="http://ftp.aspel.com/Download/COI/reinstal/Aspel-COI80R7.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            Aspel-COI 7.0 Reinstalable 16
                            <br>
                                Actualizado: 29 / 11 / 2016
                            </br>
                            <em class="download">
                                157 MB
                                <a class="ico icon-download" href="ftp://aspelprod.cloudapp.net/Download/COI/reinstal/Aspel-COI70_R16.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            Aspel-COI 6.0 Reinstalable 6
                            <br>
                                Actualizado: 29 / 10 / 2013
                            </br>
                            <em class="download">
                                118 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/coi/reinstal/Aspel-COI60_R6.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            Aspel-COI 5.7 Reinstalable 2
                            <br>
                                Actualizado: 05 / 02 / 2010
                            </br>
                            <em class="download">
                                118 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/coi/reinstal/Aspel-COI5.7_R2.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            Barra de Microsoft Excel® para la Declaración informativa de operaciones con terceros
                            <br>
                                Actualizado: 29 / 01 / 2010
                            </br>
                            <em class="download">
                                1.2 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/coi/reinstal/Aspel-OperacionesconTerceros3.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            Aspel-COI 5.6 Reinstalable 3
                            <br>
                                Actualizado: 29 / 01 / 2009
                            </br>
                            <em class="download">
                                56.6 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/coi/reinstal/Aspel-COI5.6_R3.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            Aspel-COI 5.5 Reinstalable 2
                            <br>
                                Actualizado: 04 / 09 / 2007
                            </br>
                            <em class="download">
                                47.6 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/coi/reinstal/Aspel-COI5.5_R2.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            Aspel-COI 5.0 Reinstalable 10
                            <br>
                                Actualizado: 20 / 04 / 2007
                            </br>
                            <em class="download">
                                46.7 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/coi/reinstal/Aspel-COI50r10.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                    </div>
                    <div class="tab-pane fade unico2" id="coi2">
                        <h3>
                            Requerimientos mínimos de hardware y software
                        </h3>
                        <ul>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                Procesador de 32 bits (x86) a 1 GHz. o más.*
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                1 GB. de RAM.*
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                400 MB. de espacio libre en disco duro.
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                Microsoft Windows® Vista, 2008, 7, 2012, 8.1 y 10.
                            </li>
                        </ul>
                        <p>
                            *Es recomendable el uso de los sistemas con versiones Profesionales de Windows tales como: Ultimate, Home Premium, Professional y Enterprise.
                            <br>
                                *Considerar que los requerimientos del sistema operativo pueden ser mayores.
                            </br>
                        </p>
                    </div>
                </div>
            </div>
            {{--  VENTANA DE ASPEL NOI --}}
            <div class="tab-pane fade col-md-9" id="aspel-noi">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#noi">
                            Descargar Aspel NOI
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#noi1">
                           Versiones Anteriores
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#noi2">
                            Requerimientos del sistema
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active unico" id="noi">
                        <h3>
                            Sistema de Nómina Integral
                        </h3>
                        <p>
                            Controla y automatiza todos los aspectos de la nómina y emite recibos de nómina electrónicos de acuerdo con la Reforma Fiscal 2014. Realiza un fácil, correcto y preciso cálculo de impuestos y aportaciones de seguridad social.
                        </p>
                        <ul class="list">
                            <li>
                                <img alt="" src="/img/aspel-NOI.png" title="">
                                    <section class="list-left">
                                        <h5 class="title">
                                            Aspel-NOI 8.0 - R12
                                            <br>
                                            </br>
                                        </h5>
                                        <span class="adprice">
                                            Sistema de Nómina Integral
                                        </span>
                                        <strong class="date">
                                            Actualizado:
                                            <span>
                                                29 / diciembre / 2017
                                            </span>
                                        </strong>
                                        <p class="catpath">
                                            Aspel NOI automatiza el control de la Nómina Digital. Su fácil manejo y versatilidad ofrecen un cálculo exacto de las percepciones y deducciones de los trabajadores de acuerdo a las disposiciones fiscales y laborales vigentes. Genera Comprobantes Fiscales Digitales por Internet (CFDI) de los Recibos de Nómina y asimilables a salarios. Además, calcula la retención de ISR, cuotas obrero-patronales IMSS e INFONAVIT, subsidio para el empleo y previsión social, entre otros.
                                        </p>
                                        <a href='https://survey.zohopublic.com/zs/nzB0tH' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
                                            <button class="btn btn-default" type="button">
                                                Licencia Gratuita
                                            </button>
                                        </a>
                                        <a href='https://survey.zohopublic.com/zs/oEB0tg' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
                                            <button class="btn btn-default" type="button">
                                                Descargar Ahora
                                            </button>
                                        </a>
                                    </section>
                                    <div class="clearfix">
                                    </div>
                                </img>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade unico1" id="noi1">
                        <div class="well">
                            Aspel-NOI 8.0 Reinstalable 11
                            <br>
                                Actualizado: 13 / 12 / 2017
                            </br>
                            <em class="download">
                                214 MB
                                <a class="ico icon-download" href="http://ftp.aspel.com/Download/Noi/reinstal/Aspel-NOI80_R11.exe_" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            Aspel-NOI 7.0 Reinstalable 23
                            <br>
                                Actualizado: 23 / 09 / 2016
                            </br>
                            <em class="download">
                                214 MB
                                <a class="ico icon-download" href="http://ftp.aspel.com/Download/Noi/reinstal/Aspel-NOI70_R23.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            Aspel-NOI 6.0 Reinstalable 4
                            <br>
                                Actualizado: 15 / 10 / 2013
                            </br>
                            <em class="download">
                                114 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/noi/reinstal/Aspel-NOI60_R4.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            Aspel-NOI 5.0 Reinstalable 4
                            <br>
                                Actualizado: 17 / 04 / 2013
                            </br>
                            <em class="download">
                                110 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/noi/reinstal/Aspel-NOI50_R4.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            Aspel-NOI 4.5 Reinstalable 3
                            <br>
                                Actualizado: 03 / 11 / 2009
                            </br>
                            <em class="download">
                                47 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/noi/reinstal/ASPEL-NOI45_r3.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            Aspel-NOI 4.1 Reinstalable 1
                            <br>
                                Actualizado: 18 / 09 / 2007
                            </br>
                            <em class="download">
                                47 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/noi/reinstal/NoiWin4.1R1.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            Aspel-NOI 4.0 Reinstalable 8
                            <br>
                                Actualizado: 04 / 10 / 2006
                            </br>
                            <em class="download">
                                45.5 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/noi/reinstal/ASPEL-NOI40_r8.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                    </div>
                    <div class="tab-pane fade unico2" id="noi2">
                        <h3>
                            Requerimientos mínimos de hardware y software
                        </h3>
                        <ul>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                Procesador de 32 bits (x86) a 1 GHz. o más.*
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                1 GB. de RAM.*
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                400 MB. de espacio libre en disco duro.
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                Microsoft Windows® Vista, 2008, 7, 2012, 8.1 y 10.
                            </li>
                        </ul>
                        <p>
                            *Es recomendable el uso de los sistemas con versiones Profesionales de Windows tales como: Ultimate, Home Premium, Professional y Enterprise.
                            <br>
                                *Considerar que los requerimientos del sistema operativo pueden ser mayores.
                            </br>
                        </p>
                    </div>
                </div>
            </div>
            {{--  VENTANA DE ASPEL CAJA --}}
            <div class="tab-pane fade col-md-9" id="aspel-caja">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#caja">
                            Descargar Aspel CAJA
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#caja1">
                            Versiones Anteriores
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#caja2">
                            Requerimientos del sistema
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active unico" id="caja">
                        <h3>
                            Sistema de Punto de Venta y Administración de Comercios
                        </h3>
                        <p>
                            Controla y administra las operaciones de ventas, facturación e inventarios de uno o varios comercios, convirtiendo a una computadora en un punto de venta capaz de operar con una gran cantidad y variedad de dispositivos.
                        </p>
                        <ul class="list">
                            <li>
                                <img alt="" src="/img/aspel-CAJA.png" title="">
                                    <section class="list-left">
                                        <h5 class="title">
                                            Aspel-CAJA 4.0 - R10
                                            <br>
                                            </br>
                                        </h5>
                                        <span class="adprice">
                                            Sistema de Punto de Venta y Administración de Comercios
                                        </span>
                                        <strong class="date">
                                            Actualizado:
                                            <span>
                                                04 / abril / 2018
                                            </span>
                                        </strong>
                                        <p class="catpath">
                                            Aspel CAJA controla, administra y agiliza las operaciones de ventas, facturación e inventarios de uno o varios comercios, convirtiendo una computadora en un punto de venta capaz de operar con impresoras de tickets, cajones de dinero, básculas, lectores ópticos de código de barras, lectores de tarjetas de crédito y pantallas táctiles
                                        </p>
                                        <a href='https://survey.zohopublic.com/zs/R4B0MG' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
                                            <button class="btn btn-default" type="button">
                                                Licencia Gratuita
                                            </button>
                                        </a>

                                        <a href='https://survey.zohopublic.com/zs/qtB0Ke' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
                                            <button class="btn btn-default" type="button">
                                                Descargar Ahora
                                            </button>
                                        </a>
                                    </section>
                                    <div class="clearfix">
                                    </div>
                                </img>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade unico1" id="caja1">
                        <div class="well">
                            Aspel-CAJA 4.0 Reinstalable 9
                            <br>
                                Actualizado: 28 / 03 / 2018
                            </br>
                            <em class="download">
                                144 MB
                                <a class="ico icon-download" href="http://ftp.aspel.com/Download/Caja/reinstal/Aspel-CAJA40_R9.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            Aspel-CAJA 3.5 Reinstalable 10
                            <br>
                                Actualizado: 17 / 06 / 2016
                            </br>
                            <em class="download">
                                144 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/caja/reinstal/ASPEL-CAJA35_R10.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            Aspel-CAJA 3.0 Reinstalable 6
                            <br>
                                Actualizado: 30 / 12 / 2011
                            </br>
                            <em class="download">
                                98 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/caja/reinstal/Aspel-CAJA30_R6.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            Aspel-CAJA 2.0 Reinstalable 2
                            <br>
                                Actualizado: 24 / 03 / 2010
                            </br>
                            <em class="download">
                                114 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/caja/reinstal/Aspel-CAJA20_R2.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                    </div>
                    <div class="tab-pane fade unico2" id="caja2">
                        <h3>
                            Requerimientos mínimos de hardware y software
                        </h3>
                        <ul>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                Procesador de 32 bits (x86) a 1 GHz. o más.*
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                1 GB. de RAM.*
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                400 MB. de espacio libre en disco duro.
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                Microsoft Windows® Vista, 2008, 7, 2012, 8.1 y 10.
                            </li>
                        </ul>
                        <p>
                            *Es recomendable el uso de los sistemas con versiones Profesionales de Windows tales como: Ultimate, Home Premium, Professional y Enterprise.
                            <br>
                                *Considerar que los requerimientos del sistema operativo pueden ser mayores.
                            </br>
                        </p>
                    </div>
                </div>
            </div>
            {{--  VENTANA DE ASPEL BANCO --}}
            <div class="tab-pane fade col-md-9" id="aspel-banco">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#banco">
                            Descargar Aspel BANCO
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#banco1">
                            Versiones
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#banco2">
                            Requerimientos del sistema
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active unico" id="banco">
                        <h3>
                            Sistema de Control Bancario
                        </h3>
                        <p>
                            Controla cualquier cuenta bancaria y realiza la conciliación electrónica con las principales instituciones financieras. Cuenta con interfaz en línea con Aspel-SAE y Aspel-COI para una afectación simultánea de la administración y contabilidad de la empresa.
                        </p>
                        <ul class="list">
                            <li>
                                <img alt="" src="/img/aspel-BANCO.png" title="">
                                    <section class="list-left">
                                        <h5 class="title">
                                            Aspel-BANCO 4.0 - R7
                                            <br>
                                            </br>
                                        </h5>
                                        <span class="adprice">
                                            Sistema de Control Bancario
                                        </span>
                                        <strong class="date">
                                            Actualizado:
                                            <span>
                                                16 / junio / 2017
                                            </span>
                                        </strong>
                                        <p class="catpath">
                                            Controla eficientemente los ingresos, egresos y movimientos de cualquier cuenta bancaria, en moneda nacional y extranjera. Ofrece información financiera en todo momento como estados de cuenta, diarios de bancos y flujo de efectivo. Todos los movimientos bancarios se contabilizan automáticamente en su interfaz con Aspel COI, atendiendo los requisitos de la Contabilidad Electrónica. Además, permite la programación de movimientos periódicos, así como una eficiente conciliación de las operaciones bancarias.
                                        </p>
                                        <a href='https://survey.zohopublic.com/zs/AuB0kQ' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
                                            <button class="btn btn-default" type="button">
                                                Licencia Gratuita
                                            </button>
                                        </a>
                                        <a href='https://survey.zohopublic.com/zs/fbB0yt' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
                                            <button class="btn btn-default" type="button">
                                                Descargar Ahora
                                            </button>
                                        </a>
                                    </section>
                                    <div class="clearfix">
                                    </div>
                                </img>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade unico1" id="banco1">
                        <div class="well">
                            Aspel-BANCO 4.0 Reinstalable 6
                            <br>
                                Actualizado: 13 / 01 / 2016
                            </br>
                            <em class="download">
                                60.50 MB
                                <a class="ico icon-download" href="http://ftp.aspel.com/Download/Banco/reinstal/Aspel-BANCO40_R6.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                    </div>
                    <div class="tab-pane fade unico1" id="banco1">
                        <div class="well">
                            Aspel-BANCO 3.0 Reinstalable 15
                            <br>
                                Actualizado: 13 / 11 / 2012
                            </br>
                            <em class="download">
                                60.50 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/banco/reinstal/Aspel-BANCO_R15.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                    </div>
                    <div class="tab-pane fade unico2" id="banco2">
                        <h3>
                            Requerimientos mínimos de hardware y software
                        </h3>
                        <ul>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                Procesador de 32 bits (x86) a 1 GHz. o más.*
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                1 GB. de RAM.*
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                400 MB. de espacio libre en disco duro.
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                Microsoft Windows® Vista, 2008, 7, 2012, 8.1 y 10.
                            </li>
                        </ul>
                        <p>
                            *Es recomendable el uso de los sistemas con versiones Profesionales de Windows tales como: Ultimate, Home Premium, Professional y Enterprise.
                            <br>
                                *Considerar que los requerimientos del sistema operativo pueden ser mayores.
                            </br>
                        </p>
                    </div>
                </div>
            </div>
            {{--  VENTANA DE ASPEL PROD --}}
            <div class="tab-pane fade col-md-9" id="aspel-prod">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#prod">
                            Descargar Aspel PROD
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#prod1">
                            Mejoras y actualizaciones
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#prod2">
                            Requerimientos del sistema
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active unico" id="prod">
                        <h3>
                            Sistema de Control de Producción
                        </h3>
                        <p>
                            Planea y controla los procesos de producción optimizando el consumo de materiales, su integración total con el inventario de Aspel-SAE permite un seguimiento en línea de existencias, movimientos, números de serie y lotes, entre otros. Entre sus diversas consultas se encuentra la de Implosión y Explosión de materiales.
                        </p>
                        <ul class="list">
                            <li>
                                <img alt="" src="/img/aspel-PROD.png" title="">
                                    <section class="list-left">
                                        <h5 class="title">
                                            Aspel-PROD 3.0 - R1
                                            <br>
                                            </br>
                                        </h5>
                                        <span class="adprice">
                                            Sistema de Control de Producción
                                        </span>
                                        <strong class="date">
                                            Actualizado:
                                            <span>
                                                30 / junio / 2014
                                            </span>
                                        </strong>
                                        <p class="catpath">
                                            Aspel PROD 3.0 permite la planeación y control de los procesos de fabricación de la empresa, asegurando una óptima administración de inventarios y costos. Proporciona, además, un eficiente seguimiento a las órdenes de producción mejorando los tiempos de entrega. Interactúa con Aspel SAE 7.0 y 6.0 de los que obtiene información de materia prima y sub-ensambles, para realizar los procesos de producción y posteriormente actualizar el inventario con los productos terminados
                                        </p>
                                        <a href="ftp://descargas.aspel.com.mx/download/prod/reinstal/ASPEL-PROD30_R1.exe">
                                            <button class="btn btn-default" type="button">
                                                Descargar  Aspel-PROD 3.0
                                            </button>
                                        </a>
                                    </section>
                                    <div class="clearfix">
                                    </div>
                                </img>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade unico1" id="prod1">
                        <div class="well">
                            Aspel-PROD 2.0 Reinstalable 4
                            <br>
                                Actualizado: 09 / 05 / 2011
                            </br>
                            <em class="download">
                                49 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/prod/reinstal/ASPEL-PROD20_R4.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                    </div>
                    <div class="tab-pane fade unico2" id="prod2">
                        <h3>
                            Requerimientos mínimos de hardware y software
                        </h3>
                        <ul>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                Procesador de 32 bits (x86) a 1 GHz. o más.*
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                1 GB. de RAM.*
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                400 MB. de espacio libre en disco duro.
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                Microsoft Windows® Vista, 2008, 7, 2012, 8.1 y 10.
                            </li>
                        </ul>
                        <p>
                            *Es recomendable el uso de los sistemas con versiones Profesionales de Windows tales como: Ultimate, Home Premium, Professional y Enterprise.
                            <br>
                                *Considerar que los requerimientos del sistema operativo pueden ser mayores.
                            </br>
                        </p>
                    </div>
                </div>
            </div>
            {{--  VENTANA DE ASPEL FACTURE --}}
            <div class="tab-pane fade col-md-9" id="aspel-facture">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#facture">
                            Descargar Aspel FACTURE
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#facture1">
                            Mejoras y actualizaciones
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#facture2">
                            Requerimientos del sistema
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active unico" id="facture">
                        <h3>
                            Sistema de Facturación Electrónica
                        </h3>
                        <p>
                            Ideal para emprendedores, profesionistas y Pymes que expiden Comprobantes Fiscales Digitales por Internet (CFDI) como facturas, recibos de honorarios, de arrendamiento y notas de crédito y comprobantes de retenciones. Cumple con todas las disposiciones fiscales vigentes.
                        </p>
                        <ul class="list">
                            <li>
                                <img alt="" src="/img/aspel-FACTURE.png" title="">
                                    <section class="list-left">
                                        <h5 class="title">
                                            Aspel-FACTURⓔ 4.0 - R12
                                            <br>
                                            </br>
                                        </h5>
                                        <span class="adprice">
                                            Sistema de Facturación Electrónica
                                        </span>
                                        <strong class="date">
                                            Actualizado:
                                            <span>
                                                28 / marzo / 2017
                                            </span>
                                        </strong>
                                        <p class="catpath">
                                            Genera de forma segura y en segundos Comprobantes Fiscales Digitales por Internet 3.3 (CFDI) sin importar tu profesión o giro comercial, de acuerdo con las disposiciones fiscales vigentes. Captura fácilmente facturas, notas de crédito, recibos de honorarios, de arrendamiento y otros comprobantes de ingreso y egreso. También emite comprobantes con múltiples complementos de retención e información de pagos, así como complementos fiscales
                                        </p>
                                        <a href='https://survey.zohopublic.com/zs/LlB09m' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
                                            <button class="btn btn-default" type="button">
                                                Licencia Gratuita
                                            </button>
                                        </a>
                                        <a href='https://survey.zohopublic.com/zs/F5B0vK' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
                                            <button class="btn btn-default" type="button">
                                                Descargar ahora
                                            </button>
                                        </a>
                                    </section>
                                    <div class="clearfix">
                                    </div>
                                </img>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane fade unico1" id="facture1">
                        <div class="well">
                            Aspel-FACTURⓔ 3.0 Reinstalable 11
                            <br>
                                Actualizado: 02 / 03 / 2016
                            </br>
                            <em class="download">
                                65.3 MB
                                <a class="ico icon-download" href="http://ftp.aspel.com/Download/FACTURe/reinstal/Aspel-FACTURe40_R11.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            Aspel-FACTURⓔ 2.5 Reinstalable 9
                            <br>
                                Actualizado: 23 / 12 / 2014
                            </br>
                            <em class="download">
                                55.9 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/Download/FACTURe/reinstal/ASPEL-FACTURe25_R9.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            Aspel-FACTURⓔ 2.0 Reinstalable 4
                            <br>
                                Actualizado: 03 / 10 / 2013
                            </br>
                            <em class="download">
                                47.0 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/facture/reinstal/Aspel-FACTURe20_R4.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            Aspel-FACTURⓔ 2.0
                            <br>
                                Actualizado: 07 / 12 / 2012
                            </br>
                            <em class="download">
                                47.1 MB
                                <a class="ico icon-download" href="ftp://descargas.aspel.com.mx/download/facture/reinstal/ASPEL-FACTURe_R3.exe" target="_blank">
                                </a>
                            </em>
                        </div>
                    </div>
                    <div class="tab-pane fade unico2" id="facture2">
                        <h3>
                            Requerimientos mínimos de hardware y software
                        </h3>
                        <ul>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                Procesador de 32 bits (x86) a 1 GHz. o más.*
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                1 GB. de RAM.*
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                100 MB de espacio libre en disco duro.
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                Microsoft Windows® Vista, 7, 8.1 y 10.
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                Microsoft Windows® Server 2008 y 2012.
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                Conexión a Internet.
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                Servicio Aspel Sellado CFDI.
                            </li>
                        </ul>
                        <p>
                            Es recomendable el uso de los sistemas con versiones Profesionales de Windows tales como: Ultimate, Home Premium, Professional y Enterprise.
                        </p>
                    </div>
                </div>
            </div>
            {{--  VENTANA DE ASPEL ADM --}}
            <div class="tab-pane fade col-md-9" id="aspel-adm">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#adm">
                            Descargar Aspel ADM
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#adm2">
                            Requerimientos del sistema
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active unico" id="adm">
                        <h3>
                            Sistema de Administración Móvil
                        </h3>
                        <p>
                            Para comenzar a utilizar todas las ventajas que te brinda la aplicación Aspel ADM, primero regístrate y disfruta de una prueba gratis por 30 días. Después descarga la app en la Tienda de tu preferencia y controla tu negocio desde tu dispositivo móvil.
                        </p>
                            <a href='https://survey.zohopublic.com/zs/zNB5wd' title='' target='_blank' onclick='zs_open_window(this.href, 648, 700); return false;'>
                                <button class="btn btn-default" type="button">
                                    Registrarme ahora
                                </button>
                            </a>
                            <span style="display:block"></span>
                            <br>
                            <ul class="list">
                                <li>
                                    <img alt="aspel-adm" class="img-responsive" src="/img/aspel-ADM.png" title="Logo Aspel ADM">
                                        <section class="list-left">
                                            <h5 class="title">
                                                Aspel-ADM
                                                <br>
                                                </br>
                                            </h5>
                                            <span class="adprice">
                                                Sistema de Administración Móvil
                                            </span>
                                            <br>
                                                <a href="https://play.google.com/store/apps/details?id=com.aspel.AspelADM&hl=es" target="_blank">
                                                    <img alt="facture-movil-android-logo-google-play" class="img-responsive apps" height="50" src="/img/play-store.png" title="Descarga Google Play" width="100"/>
                                                </a>
                                                <a href="https://itunes.apple.com/us/app/aspel-adm/id1122703905?l=es&mt=8" target="_blank">
                                                    <img alt="facture-movil-ios-logo-app-store" class="img-responsive apps" height="90" src="/img/app-store.png" title="Descarga App Store" width="247"/>
                                                </a>
                                            </br>
                                        </section>
                                        <div class="clearfix">
                                        </div>
                                    </img>
                                </li>
                            </ul>
                        </br>
                    </div>
                    <div class="tab-pane fade unico2" id="adm2">
                        <h3>
                            Para poder utilizar Aspel ADM en su versión web necesitas:
                        </h3>
                        <p>
                            Un equipo conectado a Internet con navegador web con soporte AJAX como los siguientes:
                        </p>
                        <ul>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                Internet Explorer 10, 11 y Microsoft Edge.
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                Firefox 43 o superior.
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                Safari 9.1 o superior.
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                Google Chrome 47 o superior.
                            </li>
                            <li>
                                <i aria-hidden="true" class="fa fa-angle-right">
                                </i>
                                Opera 35 o superior.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop

<script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}
</script>

<script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}
</script>
{{-- coi--}}
<script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script>
{{-- noi--}}
<script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script>
{{-- caja--}}
<script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script>
{{-- facture--}}
<script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script>
{{-- banco--}}
<script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script>
        {{-- sscrips para descargas con licencia gratuita --}}
                {{-- coi--}}
<script type='text/javascript'>function zs_open_window(url, height, width){var leftPos = 0;var topPos = 0;if(screen){leftPos = (screen.width - width) / 2;topPos = (screen.height - height) / 2;window.open(url, null, 'width='+width+',height='+height+',left='+leftPos+',top='+topPos+', toolbar=0, location=0, status=1, scrollbars=1, resizable=1');}}</script>
                {{-- noi--}}

                {{-- banco--}}

                {{-- caja--}}

                {{-- facture--}}