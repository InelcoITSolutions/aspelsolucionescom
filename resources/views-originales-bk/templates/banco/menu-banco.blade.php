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
<div class="demo-5">
    <div class="dl-menuwrapper" id="dl-menu">
        <button class="dl-trigger">
            Open Menu
        </button>
        <ul class="dl-menu">
            <li>
                <a href="{{url('aspel-banco')}}">
                    BANCO
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
                        <a href="{{url('aspel-banco/soluciones#cuentas-bancarias')}}">
                            Cuentas bancarias
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-banco/soluciones#cheques')}}">
                            Cheques
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-banco/soluciones#movimientos-bancarios')}}">
                            Movimientos bancarios
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-banco/soluciones#agenda-de-movimientos')}}">
                            Agenda de movimientos
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-banco/soluciones#multimoneda-y-conciliacion')}}">
                            Multimoneda y conciliación
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-banco/soluciones#consultas-y-reportes')}}">
                            Consultas y reportes
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-banco/soluciones#mas-soluciones-banco')}}">
                            Más soluciones BANCO
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('aspel-banco/lo-nuevo')}}">
                    Lo nuevo
                </a>
            </li>
            <li>
                <a href="{{url('centro-de-descarga#banco')}}">
                    Descargar Aspel BANCO
                </a>
            </li>
        </ul>
    </div>
    <!-- /dl-menuwrapper -->
</div>
