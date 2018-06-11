@extends('templates.main')
@section('title','Complementos')
@section('content')

<section id="descarga">
    <div class="img">
        <div class="container">
            <h1 class="wow fadeInDown" data-wow-delay="0.5s">
                Complementos Para Soporte
            </h1>
            <p class="wow fadeInDown" data-wow-delay="0.5s">
                Descarga algún software para el acceso via remota
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
                        Software
                    </p>
                    <div class="sp-module-content">
                        <ul class="nav menu">
                            <li class="item-732">
                                <a data-toggle="tab" href="#aspel-sae">
                                    Team Viewer
                                </a>
                            </li>
                            <li class="item-732">
                                <a data-toggle="tab" href="#aspel-coi">
                                    AnyDesk!
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
                            Descargar Team Viewer
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
                            Potenciando el acceso remoto y soporte seguros
                        </h3>
                        <p>
                            TeamViewer es un programa para ordenador cuya función es conectarse remotamente a otro equipo.
                        </p>
                        <ul class="list">
                            <li>
                                <img alt="" src="/img/remote/TeamViewer.png" title="">
                                    <section class="list-left">
                                        <h5 class="title">
                                            Team Viewer 12
                                            <br>
                                            </br>
                                        </h5>
                                        <span class="adprice">
                                            Software Para El Acceso Remoto
                                        </span>
                                        <strong class="date">
                                            Actualizado:
                                            <span>
                                                21 / 07 / 2017
                                            </span>
                                        </strong>
                                        @include('partials.condiciones-de-uso-sistemas')
                                        
                                        <a href="https://download.teamviewer.com/download/TeamViewer_Setup.exe">
                                            <button class="btn btn-default" type="button">
                                                Descargar Team Viewer 12
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
                                Team Viewer 12
                            </span>
                            <br>
                                Actualizado: 21 / 07 / 2017
                            </br>
                            <em class="download">
                                12.9 MB
                                <a class="ico icon-download"
                                href="https://download.teamviewer.com/download/TeamViewer_Setup.exe">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            <span>
                                Team Viewer 11
                            </span>
                            <br>
                                Actualizado: 21 / 07 / 2017
                            </br>
                            <em class="download">
                                11.7 MB
                                <a class="ico icon-download"
                                href="descargas/complemento/teamviewer-11-0-66695.exe" 
                                download="Team Viewer 11">
                                </a>
                            </em>
                        </div>
                        <div class="well">
                            <span>
                                Team Viewer 10
                            </span>
                            <br>
                                Actualizado: 21 / 07 / 2017
                            </br>
                            <em class="download">
                                9.06 MB
                                <a class="ico icon-download"
                                href="descargas/complemento/teamviewer-10-0-47484-multi-win.exe" 
                                download="Team Viewer 11">
                                </a>
                            </em>
                        </div>
                        
                       
                    </div>
                    <div class="tab-pane fade unico2" id="menu2">
                        @include('partials.requerimientos-remote')
                    </div>
                </div>
            </div>
            {{--  VENTANA DE ASPEL COI --}}
            <div class="tab-pane fade col-md-9" id="aspel-coi">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a data-toggle="tab" href="#coi">
                            Descargar Anydesk
                        </a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#coi1">
                            Mejoras y actualizaciones
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
                            Soporte Vía Acceso Remoto
                        </h3>
                        <p>
                            AnyDesk se encuentra disponible, de manera gratuita, para sistemas operativos Windows, aunque sus desarrolladores ya están trabajando en los clientes de otras plataformas, como iPad, MacOS X, Linux y Android, por lo que está claro que tendremos una gran variedad.
                        </p>
                        <ul class="list">
                            <li>
                                <img alt="" src="/img/remote/AnyDesk.png" title="">
                                    <section class="list-left">
                                        <h5 class="title">
                                            Anydesk 3.4
                                            <br>
                                            </br>
                                        </h5>
                                        <span class="adprice">
                                            Soporte Via Acceso Remoto
                                        </span>
                                        <strong class="date">
                                            Actualizado:
                                            <span>
                                                21 / 06 / 2017
                                            </span>
                                        </strong>
                                        @include('partials.condiciones-de-uso-sistemas')
                                        <a href="descargas/complemento/anydesk-3-4-1.exe" 
                                           download="Anydesk 3.4">
                                            <button class="btn btn-default" type="button">
                                                Descargar Anydesk 3.4
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
                            <span>
                                Anydesk Version 3.4
                            </span>
                            
                            <br>
                                Actualizado: 21 / 07 / 2017
                            </br>
                            <em class="download">
                                1.7 MB
                                <a class="ico icon-download" 
                                href="descargas/complemento/anydesk-3-4-1.exe" 
                                download="Anydesk 3.4">
                                </a>
                            </em>
                        </div>

                        <div class="well">
                            <span>
                                Anydesk Version 2.6
                            </span>
                            <br>
                                Actualizado: 21 / 07 / 2017
                            </br>
                            <em class="download">
                                1.5 MB
                                <a class="ico icon-download" 
                                href="descargas/complemento/anydesk-2-6-1.exe" 
                                download="Anydesk 2.6">
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
                                100 MB. de espacio libre en disco duro.
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
          
        </div>
    </div>
</section>
@stop
