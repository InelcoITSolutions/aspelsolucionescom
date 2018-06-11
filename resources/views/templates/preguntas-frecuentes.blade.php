@extends('templates.main')
@section('title','Preguntas Frecuentes')
@section('content')
<section class="faq" id="faq">
    <div class="img">
        <div class="container">
            <h1 class="wow fadeInDown" data-wow-delay="0.5s">
                Preguntas Frecuentes
            </h1>
            <p class="wow fadeInDown" data-wow-delay="0.5s">
                Encuentra la
                <span>
                    respuesta
                </span>
                para
                <span>
                    el buen funcionamiento
                </span>
                de tu Sistema Aspel
            </p>
        </div>
    </div>
</section>
<section class="faq" id="faq1">
    <div class="container">
        <div class="col-sm-3 col-md-3" id="sp-left">
            <div class="sppb-addon sppb-addon-module ">
                <div class="sppb-addon-content">
                    <div class="custom">
                        <div class="featured-faq">
                            <div class="top-part">
                                <h3 class="title">
                                    <p>
                                        ¿Tienes dudas?
                                    </p>
                                </h3>
                            </div>
                            <p>
                                En esta sección encontrarás las respuestas a las preguntas más frecuentes acerca de nuestros sistema.
                            </p>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sp-column custom-class">
                <div class="sp-module mimenu">
                    <p class="sp-module-title">
                        Categorías
                    </p>
                    <div class="sp-module-content">
                        <ul class="nav menu">
                            <li class="item-732">
                                <a data-toggle="tab" href="#faq-sae">
                                    Aspel SAE
                                </a>
                            </li>
                            <li class="item-732">
                                <a data-toggle="tab" href="#faq-coi">
                                    Aspel COI
                                </a>
                            </li>
                            <li class="item-732">
                                <a data-toggle="tab" href="#faq-noi">
                                    Aspel NOI
                                </a>
                            </li>
                            <li class="item-732">
                                <a data-toggle="tab" href="#faq-caja">
                                    Aspel CAJA
                                </a>
                            </li>
                            <li class="item-732">
                                <a data-toggle="tab" href="#faq-banco">
                                    Aspel BANCO
                                </a>
                            </li>
                            <li class="item-732">
                                <a data-toggle="tab" href="#faq-prod">
                                    Aspel PROD
                                </a>
                            </li>
                            <li class="item-732">
                                <a data-toggle="tab" href="#faq-facture">
                                    Aspel FACTURE
                                </a>
                            </li>
                            <li class="item-732">
                                <a data-toggle="tab" href="#faq-adm">
                                    Aspel ADM
                                </a>
                            </li>
                            <li class="item-732">
                                <a href="/docs/category/2-fichas-tecnicas">
                                    Fichas Técnicas
                                </a>
                            </li>
                            <li class="item-733">
                                <a href="/docs/category/4-publicidad">
                                    Publicidad
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">
            {{--  VENTANA DE ASPEL SAE --}}
            <div class="tab-pane in active sppb-col-sm-9 col-md-9" id="faq-sae">
                @include('partials.faqs-sae')
            </div>
            {{--  VENTANA DE ASPEL COI --}}
            <div class="tab-pane fade sppb-col-sm-9 col-md-9" id="faq-coi">
                @include('partials.faqs-coi')
            </div>
            {{--  VENTANA DE ASPEL NOI --}}
            <div class="tab-pane fade sppb-col-sm-9 col-md-9" id="faq-noi">
                @include('partials.faqs-noi')
            </div>
            {{--  VENTANA DE ASPEL CAJA --}}
            <div class="tab-pane fade sppb-col-sm-9 col-md-9" id="faq-caja">
                @include('partials.faqs-caja')
            </div>
            {{--  VENTANA DE ASPEL BANCO --}}
            <div class="tab-pane fade sppb-col-sm-9 col-md-9" id="faq-banco">
                @include('partials.faqs-banco')
            </div>
            {{--  VENTANA DE ASPEL PROD --}}
            <div class="tab-pane fade sppb-col-sm-9 col-md-9" id="faq-prod">
                @include('partials.faqs-prod')
            </div>
            {{--  VENTANA DE ASPEL FACTURE --}}
            <div class="tab-pane fade sppb-col-sm-9 col-md-9" id="faq-facture">
                @include('partials.faqs-facture')
            </div>
            {{--  VENTANA DE ASPEL ADM--}}
            <div class="tab-pane fade sppb-col-sm-9 col-md-9" id="faq-adm">
                @include('partials.faqs-adm')
            </div>
        </div>
    </div>
</section>
@stop
