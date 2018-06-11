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
                <a href="{{url('aspel-espacio')}}">
                    ⓔSPACIO
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
                        <a href="{{url('aspel-espacio/soluciones#buzon-contable')}}">
                            Búzon contable
                        </a>
                    </li>

                    <li>
                        <a href="{{url('aspel-espacio/soluciones#modalidades')}}">
                            Modalidades
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('aspel-espacio/lo-nuevo')}}">
                    Lo nuevo
                </a>
            </li>
            <li>
                <a href="{{url('aspel-espacio/lista-precio-espacio')}}">
                    Lista de precios
                </a>
            </li>
        </ul>
    </div>
    <!-- /dl-menuwrapper -->
</div>
