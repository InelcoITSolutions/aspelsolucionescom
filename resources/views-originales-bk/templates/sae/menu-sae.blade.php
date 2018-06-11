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
                <a href="{{url('aspel-sae')}}">
                    SAE
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
                        <a href="{{url('aspel-sae/soluciones#inventarios-y-servicios')}}">
                            Inventarios y servicios
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-sae/soluciones#clientes-y-cuentas-por-cobrar')}}">
                            Clientes y cuentas por cobrar
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-sae/soluciones#facturas-y-vendedores')}}">
                            Facturas y vendedores
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-sae/soluciones#proveedores')}}">
                            Proveedores y cuentas por pagar
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-sae/soluciones#compras')}}">
                            Compras
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-sae/soluciones#sae-en-la-nube')}}">
                            SAE en mi propia Nube
                        </a>
                    </li>
                    <li>
                        <a href="{{url('aspel-sae/soluciones#mas-soluciones')}}">
                            Más soluciones SAE
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{url('aspel-sae/lo-nuevo')}}">
                    Lo nuevo
                </a>
            </li>
            <li>
                <a href="{{url('aspel-sae/sae-movil')}}">
                    SAE móvil
                </a>
            </li>
            {{--
            <li>
                <a href="#">
                    Factura electrónica
                </a>
            </li>
            --}}
            <li>
                <a href="{{url('centro-de-descarga#sae')}}">
                    Descargar Aspel SAE
                </a>
            </li>
        </ul>
    </div>
    <!-- /dl-menuwrapper -->
</div>
