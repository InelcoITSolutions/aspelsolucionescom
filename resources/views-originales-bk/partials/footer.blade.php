<section class="footer-section" id="footer">
    <div class="heading-about">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-4 col-md-4">
                    <div class="inner">
                        <div class="logo">
                            <center>
                                <img alt="" class="img-responsive" height="60" 
                                src="/img/logo-doble.png" width="217"/>
                            </center>
                        </div>
                        <p class="descripcion">
                            Aspel Soluciones es el
                            <b>
                                área espeacializada
                            </b>
                            de
                            <b>
                                SYCA Consultores
                            </b>
                            dedicada a ofrecer soluciones a las las micro, pequeñas y medianas empresas, favoreciendo la correcta toma de decisiones de manera sencilla, eficiente y productiva.
                        </p>
                        <br>
                            <p>
                                Siguenos en las redes sociales
                            </p>
                        </br>
                        <center>
                            <ul class="redes-sociales" style="margin-top: -5%; margin-bottom: 10%;">
                                <li>
                                    <a class="icono-facebook" href="https://www.facebook.com/Aspel-Soluciones-1392656057613447/?fref=ts" target="_blank">
                                        <span class="icon-facebook-with-circle">
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="icono-twitter" href="https://twitter.com/AspelSoluciones" target="_blank">
                                        <span class="icon-twitter-with-circle">
                                        </span>
                                    </a>
                                </li>
                                
                            </ul>
                        </center>

                     
                
                    </div>
                    {{--Condiciones para mostrar botones de compartir en face--}}
                    @php
                        $host= $_SERVER["HTTP_HOST"];
                        $url= $_SERVER["REQUEST_URI"];
                        $direc= "http://" . $host . $url;            
                    @endphp
                    @if($direc == 'http://aspelsoluciones.com/' OR $direc == 'http://aspelsoluciones.dev:8080/' OR $direc == 'http://www.aspelsoluciones.com/')
                    <div class="col-md-6" style="left: -3%;">
                        <div class="fb-like" data-action="like" data-href="http://aspelsoluciones.com/" data-layout="button_count" data-share="true" data-show-faces="true" data-size="small">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fb-send" data-href="http://www.aspelsoluciones.com/">
                        </div>
                    </div>
                    @elseif($direc == 'http://aspelsoluciones.com/productos/sae/presentacion' OR $direc == 'http://aspelsoluciones.dev:8080/productos/sae/presentacion' OR $direc == 'http://www.aspelsoluciones.com/productos/sae/presentacion')
                    <div class="col-md-6" style="left: -3%;">
                        <div class="fb-like" data-action="like" data-href="http://aspelsoluciones.com/productos/sae/presentacion" data-layout="button_count" data-share="true" data-show-faces="true" data-size="small">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fb-send" data-href="http://aspelsoluciones.com/productos/sae/presentacion">
                        </div>
                    </div>
                    @endif
                </div>

                

                <div class="col-xs-6 col-sm-4 col-md-4 footer-grid foot">
                    <div class="titulos">
                        <h4>
                            Sucursales
                        </h4>
                    </div>
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
                                        64010 Monterrey, N.L.
                                    </br>
                                </br>
                            </div>
                        </li>
                        <li>
                            <i aria-hidden="true" class="fa fa-phone">
                            </i>
                            <a href="tel:8113522020"> (81) 1352 2020 </a>
                        </li>
                        <li>
                            <i aria-hidden="true" class="glyphicon glyphicon-envelope">
                            </i>
                            <a href="mailto:contacto@aspelsoluciones.com">
                                contacto@aspelsoluciones.com
                            </a>
                        </li>
                    </ul>
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
                            <a href="tel:4442119009"> (444) 211 9009 </a>
                        </li>
                        <li>
                            <i aria-hidden="true" class="glyphicon glyphicon-envelope">
                            </i>
                            <a href="mailto:contacto@aspelsoluciones.com">
                                contacto@aspelsoluciones.com
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-4 col-md-4">
                    <div class="titulos">
                        <h4>
                            Enlaces
                        </h4>
                    </div>
                    <div class="izquierda-links">
                        <p>
                            <a href="http://www.inelco.mx" target="_blank">
                                 Inelco IT Solutions
                            </a>
                        </p>
                        <p>
                            <a href="http://www.solucionespararestaurantes.mx" target="_blank">
                                Soluciones Para Restaurantes
                            </a>
                        </p>
                        <p>
                            <a href="http://www.solucionespararestaurantes.mx/ontheminute" target="_blank">
                                On The Minute
                            </a>
                        </p>

                        <p>
                        <a href="http://www.solucionespararestaurantes.mx/nshoteles" target="_blank">
                            NS Hoteles
                        </a>
                        </p>


                        <p>
                            <a href="https://www.comprobantesfiscales.org/" target="_blank">
                                Comprobantes Fiscales
                            </a>
                        </p>

                        <div class="fb-page" data-adapt-container-width="true" data-height="200" data-hide-cover="false" data-href="https://www.facebook.com/Aspel-Soluciones-1392656057613447/?fref=ts" data-show-facepile="true" data-small-header="false" data-tabs="timeline">
                            <blockquote cite="https://www.facebook.com/Aspel-Soluciones-1392656057613447/?fref=ts" class="fb-xfbml-parse-ignore">
                                <a href="https://www.facebook.com/Aspel-Soluciones-1392656057613447/?fref=ts">
                                    Aspel Soluciones
                                </a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<center>
    <div class="derechos">
        <p class="copy">
            © 2017 Inelco IT Solutions S.A. de C.V. Todos los derechos reservados
            <br>
                <a href="">
                    Aviso de privacidad
                </a>
                |
                <a href="">
                    Términos y condiciones
                </a>
            </br>
        </p>
    </div>
</center>
