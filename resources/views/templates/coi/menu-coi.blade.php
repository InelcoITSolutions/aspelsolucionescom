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
<div class="demo-3">
    <div class="dl-menuwrapper" id="dl-menu">
        <button class="dl-trigger">
            Open Menu
        </button>
        <ul class="dl-menu">
            <li>
                <a href="{{url('aspel-coi')}}">
                    COI
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
                        <a href="{{url('aspel-coi/soluciones#catalogo-de-cuentas')}}">
                            Catálogo de cuentas
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-coi/soluciones#departamentos-centro-de-costos-y/o-proyectos')}}">
                            Departamentos, centro de costos y/o proyectos
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-coi/soluciones#polizas')}}">
                            Pólizas
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-coi/soluciones#fiscales')}}">
                            Fiscales
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-coi/soluciones#activos-y-depreciacion')}}">
                            Activos y depreciación
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-coi/soluciones#multimoneda')}}">
                            Multimoneda
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-coi/soluciones#mas-soluciones')}}">
                            Más soluciones COI
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('aspel-coi/lo-nuevo')}}">
                    Lo nuevo
                </a>
            </li>
            <li>
                <a href="{{url('centro-de-descarga#coi')}}">
                    Descargar Aspel COI
                </a>
            </li>
        </ul>
    </div>
    <!-- /dl-menuwrapper -->
</div>
