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
                <a href="{{url('aspel-prod')}}">
                    PROD
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
                        <a href="{{url('aspel-prod/soluciones#manejo-de-insumos')}}">
                            Manejo de insumos
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-prod/soluciones#eficiente-control-de-la-materia-prima')}}">
                            Eficiente control de la materia prima
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-prod/soluciones#productos-terminados')}}">
                            Productos terminados
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-prod/soluciones#ordenes-de-produccion-y-seguimiento')}}">
                            Órdenes de producción y seguimiento
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-prod/soluciones#procesos-de-produccion')}}">
                            Procesos de producción
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-prod/soluciones#implosion-y-explosion-de-materiales')}}">
                            Implosión y explosión de materiales
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-prod/soluciones#mas-soluciones-prod')}}">
                            Más soluciones PROD
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('centro-de-descarga#prod')}}">
                    Descargar Aspel PROD
                </a>
            </li>
        </ul>
    </div>
    <!-- /dl-menuwrapper -->
</div>
