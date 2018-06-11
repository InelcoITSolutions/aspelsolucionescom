@push('files-menu')
<script src="/js/modernizr.custom2.js">
</script>
<script src="/js/jquery.dlmenu.js">
</script>
<script>
    $(function() {
            $( '#dl-menu' ).dlmenu({
                animationClasses : { classin : 'dl-animate-in-2', classout : 'dl-animate-out-2' }
            });
        });
</script>
@endpush
<div class="demo-2">
    <div class="dl-menuwrapper" id="dl-menu">
        <button class="dl-trigger">
            Open Menu
        </button>
        <ul class="dl-menu">
            <li>
                <a href="{{url('aspel-ADMTienda')}}">
                    ADM Tienda
                </a>
            </li>

            <li>
                <a href="{{url('aspel-AMDTienda/soluciones')}}">
                    Soluciones
                    <span class="caret icon-arrow-down6">
                    </span>
                </a>
                <ul class="dl-submenu">
                    <li>
                        <a href="{{url('aspel-AMDTienda/soluciones#notas')}}">
                            Notas de venta
                        </a>
                    </li>

                    <li>
                        <a href="{{url('aspel-AMDTienda/soluciones#clientes')}}">
                            Clientes
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-AMDTienda/soluciones#productos')}}">
                            Productos
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-AMDTienda/soluciones#movimiento')}}">
                            Movimientos de caja
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-AMDTienda/soluciones#administra')}}">
                            Administra tu punto de venta
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-AMDTienda/soluciones#mas')}}">
                            Mas Soluciones
                        </a>
                    </li>
                </ul>
            </li>


            <li>
                <a href="{{url('aspel-ADMTienda/lo-nuevo')}}">
                    Lo nuevo
                </a>
            </li>

            <li>
                <a href="{{url('aspel-ADMTienda/lista-precio-ADMTienda')}}">
                    Lista de precios
                </a>
            </li>

             <li>
                <a href="{{url('aspel-ADMTienda/Dispositivos-compatibles-ADMTienda')}}">
                    Dispositivos Compatibles
                </a>
            </li>
            
            <li>
                <a href="https://play.google.com/store/apps/details?id=com.aspel.ADMTienda&hl=es"> 
                Descargar
                </a>
            </li>
        </ul>
    </div>
    <!-- /dl-menuwrapper -->
</div>
