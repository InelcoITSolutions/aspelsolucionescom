<header class="top-panel" id="direc">
    <div class="container-fluid">
        <div class="row">
            <center>
                <div class="col-md-2 col-xs-2">
                    <ul class="icon1">
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
                </div>
                <div class="col-md-10 col-xs-10 text-left sin-espacios">
                    <ul class="icon2">
                        <li>
                            <span class="icon-location">
                            </span>
                            MTY Cintermex
                        </li>
                        <li>
                            <span class="icon-phone">
                            </span>
                            <a href="tel:8113522222"> (81) 1352 2222 </a>
                        </li>
                        <li>
                            |
                        </li>
                        <li>
                            <span class="icon-location">
                            </span>
                            SLP Centro
                        </li>
                        <li>
                            <span class="icon-phone">
                            </span>
                            <a href="tel:4442119009"> (444) 211 9009 </a>
                        </li>
                        <li>
                            |
                        </li>
                        <li>
                            <span class="icon-mail5">
                            </span>
                            <a href="mailto:contatco@aspelsoluciones.com">
                                contacto@aspelsoluciones.com
                            </a>
                        </li>
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li class="text-right">
                            <i aria-hidden="true" class="fa fa-sign-in">
                            </i>
                            <a href="{{ url('/login') }}">
                                Iniciar Sesión
                            </a>
                        </li>
                        <li class="text-right">
                            <i aria-hidden="true" class="fa fa-user-plus">
                            </i>
                            <a href="{{ url('/register') }}">
                                Registrarme
                            </a>
                        </li>
                        @else
                        <li class="dropdown text-right derecha">
                            <a aria-expanded="false" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
                                <i aria-hidden="true" class="fa fa-user">
                                </i>
                                {{ Auth::user()->name }}
                                <span class="caret">
                                </span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/perfil') }}">
                                        <i class="fa fa-btn fa-sign-out">
                                        </i>
                                        Perfil
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/logout') }}">
                                        <i class="fa fa-btn fa-sign-out">
                                        </i>
                                        Cerrar sesión
                                    </a>
                                </li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>
            </center>
        </div>
    </div>
</header>