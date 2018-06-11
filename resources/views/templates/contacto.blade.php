@extends('templates.main')
@section('title','Contacto')
@section('content')
<section class="contacto" id="contacto">
    <div class="img">
        <div class="container">
            <h1 class="wow fadeInDown" data-wow-delay="0.5s">
                Nos encantaría saber de ti
            </h1>
            <p class="wow fadeInDown" data-wow-delay="0.5s">
                El cambio que buscas empieza aquí, permitenos apoyarte.
            </p>
        </div>
    </div>
</section>
<section class="contacto" id="contacto2">
    <div class="container">
        <div class="row">
            <div class="col-md-9 formulario">
                <div class="wow fadeInLeft" data-wow-delay="1s">
                    <div class="col-sm-10 title_sec">
                        <h3>
                            Información de contacto
                        </h3>
                        <p>
                            Si requieres alguna información, envíanos un mensaje y te contactaremos lo antes posible
                        </p>
                        @include('partials.zoho-form')
                    </div>
                </div>
            </div>
            <div class="col-md-3 horarios">
                <h5>
                    Horarios de atención
                </h5>
                <p>
                    <strong>
                        Lunes - Viernes:
                    </strong>
                    9:00 am - 6:00 pm
                </p>
                <!--
                <p>
                    <strong>
                        Sábados:
                    </strong>
                    9:00 am - 2:00 pm
                </p>
                -->

            </div>
        </div>
    </div>
</section>
<section class="contacto" id="contacto3">
    <div class="container">
        <div class="wow fadeInRight" data-wow-delay="1.5s">
            <div class="col-md-6 map">
                <h4>
                    <strong>
                        Monterrey
                    </strong>
                </h4>
                <p class="direccion">
                    Edificio Cintemex
                </p>
                <p class="direccion">
                    Av. Fundidora N° 501 Int. 18
                </p>
                <p class="direccion">
                    64010 Monterrey, Nuevo León
                </p>
                <p class="direccion">
                    (81) 1352 2020
                </p>
                <div class="mapas">
                    <iframe allowfullscreen="" frameborder="0" height="300" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.793480944093!2d-100.29106668546014!3d25.678139818322215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866295620b11a765%3A0xa261ff913e98ee9e!2sInelco+IT+Solutions!5e0!3m2!1ses-419!2smx!4v1464149661376" style="border:0" width="100%">
                    </iframe>
                </div>
            </div>
            <div class="col-md-6 map">
                <h4>
                    <strong>
                        San Luis Potosí
                    </strong>
                </h4>
                <p class="direccion">
                    Mariano Otero N° 610 Int. 3
                </p>
                <p class="direccion">
                    Tequisquiapan
                </p>
                <p class="direccion">
                    78250 San Luis Potosí
                </p>
                <p class="direccion">
                    (444) 211 9009
                </p>
                <div class="mapas">
                    <iframe allowfullscreen="" frameborder="0" height="300" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3695.3760437451656!2d-100.99518268574494!3d22.14975345394168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842a98b29695cb8d%3A0xced6173409c0a00!2sMariano+Otero+610%2C+De+Tequisquiapan%2C+78230+San+Luis%2C+S.L.P.!5e0!3m2!1ses-419!2smx!4v1464151375539" style="border:0" width="100%">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
