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
                <a href="{{url('aspel-caja')}}">
                    CAJA
                </a>
            </li>
            <li>
                <a href="#">
                    Soluciones
                    <span class="caret icon-arrow-down6">
                    </span>
                </a>
                <ul class="dl-submenu">
                    <li>
                        <a href="{{url('aspel-caja/soluciones#tienda-y-cajas')}}">
                            Tienda y cajas
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-caja/soluciones#inventarios')}}">
                            Inventarios
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-caja/soluciones#clientes-y-cuentas-por-cobrar')}}">
                            Clientes y cuentas por cobrar
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-caja/soluciones#documentos-de-venta')}}">
                            Documentos de venta
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-caja/soluciones#comprobantes-fiscales-digitales-cfdi')}}">
                            Comprobantes Fiscales Digitales
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-caja/soluciones#consolidacion-de-informacion')}}">
                            Consolidación de información
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-caja/soluciones#mas-soluciones')}}">
                            Más soluciones caja
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('aspel-caja/lo-nuevo')}}">
                    Lo nuevo
                </a>
            </li>
            <li>
                <a href="{{url('centro-de-descarga#caja')}}">
                    Descargar Aspel CAJA
                </a>
            </li>
        </ul>
    </div>
    <!-- /dl-menuwrapper -->
</div>
