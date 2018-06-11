<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-6 col-sm-6 footer-w3ls1">
                <div class="inner footer-w3ls2">
                    <div align="left" class="logo">
                        <img alt="" class="img-responsive" height="60" src="/img/logo-aspelsoluciones-blanco.png" width="117"/>
                    </div>
                    <p class="descripcion">
                        En
                        <b>
                            Aspel Soluciones
                        </b>
                        brindamos soluciones de tecnología y servicios especializados de implementación, capacitación, consultoría y soporte para que tus sistemas
                        <b>
                            Aspel
                        </b>
                        funcionen siempre.
                    </p>
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <i aria-hidden="true" class="fa fa-phone">
                                </i>
                                01 (800) 0888 911
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul>
                            <li>
                                <i aria-hidden="true" class="glyphicon glyphicon-envelope">
                                </i>
                                <a href="mailto:contacto@aspelsoluciones.com">
                                    contacto@aspelsoluciones.com
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-6 col-sm-6 footer-w3ls2">
                <div class="titulos">
                    <h4>
                        Contáctanos
                    </h4>
                </div>
                <div class="col-md-6">
                    <h4 class="cd1">
                        Monterrey
                    </h4>
                    <ul>
                        <li>
                            <div class="pull-left">
                                <i aria-hidden="true" class="fa fa-map-marker">
                                </i>
                            </div>
                            <div class="sppb-media-body">
                                Edificio Cintermex
                                <br>
                                    Av. Fundidora N° 501 Int. 18
                                    <br>
                                        64010 Monterrey, NL
                                    </br>
                                </br>
                            </div>
                        </li>
                        <li>
                            <i aria-hidden="true" class="fa fa-phone">
                            </i>
                            (81) 1352 2222
                        </li>
                        {{--
                        <li>
                            <i aria-hidden="true" class="glyphicon glyphicon-envelope">
                            </i>
                            <a href="mailto:example@mail.com">
                                contacto@inelco.com.mx
                            </a>
                        </li>
                        --}}
                    </ul>
                </div>
                <div class="col-md-6">
                    <h4 class="cd2">
                        San Luis Potosí
                    </h4>
                    <ul>
                        <li>
                            <div class="pull-left">
                                <i aria-hidden="true" class="fa fa-map-marker">
                                </i>
                            </div>
                            <div class="sppb-media-body">
                                Mariano Otero N° 610 Int.3
                                <br>
                                    Col. Tequisquiapan
                                    <br>
                                        78250 San Luis Potosí, SLP
                                    </br>
                                </br>
                            </div>
                        </li>
                        <li>
                            <i aria-hidden="true" class="fa fa-phone">
                            </i>
                            (444) 211 9009
                        </li>
                        {{--
                        <li>
                            <i aria-hidden="true" class="glyphicon glyphicon-envelope">
                            </i>
                            <a href="mailto:example@mail.com">
                                contacto@inelco.com.mx
                            </a>
                        </li>
                        --}}
                    </ul>
                </div>
            </div>
        </div>
        <ul class="social-icons1">
            <li>
                <a href="https://www.facebook.com/Aspel-Soluciones-1392656057613447/?fref=ts" target="_blank">
                    <i class="fa fa-facebook">
                    </i>
                </a>
            </li>
            <li>
                <a href="https://twitter.com/AspelSoluciones" target="_blank">
                    <i class="fa fa-twitter">
                    </i>
                </a>
            </li>
            {{--
            <li>
                <a href="">
                    <i aria-hidden="true" class="fa fa-google-plus">
                    </i>
                </a>
            </li>
            --}}
            {{--
            <li>
                <a href="#">
                    <i class="fa fa-whatsapp">
                    </i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-youtube">
                    </i>
                </a>
            </li>
            --}}
        </ul>
        @php
            $host= $_SERVER["HTTP_HOST"];
            $url= $_SERVER["REQUEST_URI"];
            $direc= "http://" . $host . $url;            
        @endphp
        @if($direc == 'http://aspelsoluciones.com/nuevo-noi' OR $direc == 'http://aspelsoluciones.dev:8080/nuevo-noi' OR $direc == 'http://www.aspelsoluciones.com/nuevo-noi')
        {{--plugin de botones de facebook--}}
        <div class="fb-like" data-action="like" data-href="http://aspelsoluciones.com/nuevo-noi" data-layout="standard" data-share="true" data-show-faces="true" data-size="large" data-width="200px">
        </div>
        @elseif($direc == 'http://aspelsoluciones.dev:8080/actualizacion-noi' OR $direc == 'http://aspelsoluciones.com/actualizacion-noi' OR $direc == 'http://www.aspelsoluciones.com/actualizacion-noi')
        <div class="fb-like" data-action="like" data-href="http://aspelsoluciones.com/actualizacion-noi" data-layout="standard" data-share="true" data-show-faces="true" data-size="large" data-width="200px">
        </div>
        @endif
        <p class="copyright">
            © 2017 Inelco IT Solutions S.A. de C.V. Todos los derechos reservados
        </p>
    </div>
</section>