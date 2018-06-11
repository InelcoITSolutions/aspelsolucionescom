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
                <a href="{{url('aspel-sae-nube')}}">
                    SAE NUBE
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
                        <a href="{{url('aspel-sae-nube/soluciones#Siempre-bajo-control')}}">
                            Siempre bajo control
                        </a>
                    </li>

                    <li>
                        <a href="{{url('aspel-sae-nube/soluciones#Elige-solo-lo-que-necesitas')}}">
                            Elige solo lo que necesitas
                        </a>
                    </li>

                    <li>
                        <a href="{{url('aspel-sae-nube/soluciones#Manten-a-salvo-tu-informacion')}}">
                            Mantén a salvo tu información
                        </a>
                    </li>

                    <li>
                        <a href="{{url('aspel-sae-nube/soluciones#respaldos-automaticos')}}">
                            Respaldos Automaticos
                        </a>
                    </li>

                    <li>
                        <a href="{{url('aspel-sae-nube/soluciones#multiples-soluciones-administrativas')}}">
                            Multiples Soluciones Administrativas
                        </a>
                    </li>
                   
                </ul>
            </li>
            
            <li>
                <a href="{{url('centro-de-descarga#sae')}}">
                    Descargar Aspel SAE NUBE
                </a>
            </li>
        </ul>
    </div>
    <!-- /dl-menuwrapper -->
</div>
