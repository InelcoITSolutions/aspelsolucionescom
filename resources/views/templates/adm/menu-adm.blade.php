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
                <a href="{{url('aspel-adm')}}">
                    ADM
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
                        <a href="{{url('aspel-adm/soluciones#comprobantes-fiscales-digitales')}}">
                            Comprobantes Fiscales Digitales
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-adm/soluciones#catalogo-de-clientes')}}">
                            Catálogo de Clientes
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-adm/soluciones#catalogo-de-productos')}}">
                            Catálogo de Productos
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('aspel-adm/lo-nuevo')}}">
                    Lo Nuevo
                </a>
            </li>
            <li>
                <a href="{{url('centro-de-descarga#adm')}}">
                    Descargar Aspel ADM
                </a>
            </li>
        </ul>
    </div>
    <!-- /dl-menuwrapper -->
</div>
