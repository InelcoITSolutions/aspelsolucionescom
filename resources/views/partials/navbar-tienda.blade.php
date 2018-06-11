<!-- Navigation -->
<nav class="navbar z-depth-2" id="nav-bar-id">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" type="button">
                <span class="sr-only">
                    Toggle navigation
                </span>
                <i aria-hidden="true" class="fa fa-navicon">
                </i>
            </button>
            <a href="/">
                <img alt="Logo Aspel Soluciones" class="img-responsive" src="/img/logo-aspelsoluciones-blanco.png" width="150"/>
            </a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left">
                <li id="search-li">
                    @include('partials.buscador-tienda')
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
            <li>
                            <a href="/">
                                <span class="icon-house">
                                </span>
                               <i aria-hidden="true" class="fa fa-home fa"></i> Inicio
                            </a>
                        </li>
                {{--@if (!$signedIn)--}}
                
                {{--@else--}}
                <li>
                    <a href="{{ route('mostrar-carrito') }}">
                        @php
                        $carrito = \Session::get('carrito');
                        @endphp
                       
                        @if(count($carrito) <= 0)
                        <i class="fa fa-shopping-cart" style="color: black;">
                        </i>
                        @else
                        <i class="fa fa-shopping-cart" style="color: black;">
                        </i>
                        <span class="badge green">
                            {{count($carrito)}}
                        </span>
                        @endif
                    </a>
                </li>
                <!-- Authentication Links -->
                @if (Auth::guest())
                <li class="text-left">
                    <a class="texto" href="{{ url('/login') }}">
                        <i aria-hidden="true" class="fa fa-sign-in iconos">
                        </i>
                        Iniciar Sesión
                    </a>
                </li>
                <li class="text-left">
                    <a class="texto" href="{{ url('/register') }}">
                        <i aria-hidden="true" class="fa fa-user-plus iconos">
                        </i>
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
                            <a href="{{ url('/logout') }}">
                                <i class="fa fa-btn fa-sign-out">
                                </i>
                                Cerrar sesión
                            </a>
                        </li>
                    </ul>
                </li>
                @endif
                {{--@endif--}}
            </ul>
        </div>
    </div>
</nav>