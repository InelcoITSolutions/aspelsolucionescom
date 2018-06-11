@push('add-js')
{{--scripts para los efectos de ir de una seccion a otra--}}
<script type="text/javascript">
    $(document).ready(function() {
    // Add smooth scrolling to all links
    $(".efecto-seccion").on('click', function(event) {
        // Prevent default anchor click behavior
        event.preventDefault();
        // Store hash
        var hash = this.hash;
        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 1800, function() {
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
    });
});
</script>
@endpush
<ul class="anim-slider">

    


    <!-- Slide No1 *********************************************solo aspel nube-->
    <li class="anim-slide" id="uno">
        <div class="fondo-gray col-md-6">
            <h1 class="text-left" id="t1">
                Aspel
                <br>
                   Soluciones
                </br>
            </h1>
            <h2 class="texto-inicial text-left" id="p1">
                Aspel Nube avala todos los Sistemas, Apps y Servicios Aspel a los que se tiene acceso vía Internet.
            </h2>
            <div align="left" class="botones" id="botones1">
                <a class="nosotros-a" href="{{url('nosotros')}}">
                    Conócenos
                </a>
                <a class="sol-a efecto-seccion" href="#aspelsoluciones">
                    Ver soluciones
                </a>
            </div>
        </div>
    </li>
    <!-- FIN DEL Slide No1  *********************************************...........-->


    <!-- Slide No2 -->

    <li class="anim-slide" id="dos">
        <div class="fondo-gray col-md-6 col-md-offset-6">
            <h1 class="text-right" id="t2">
                Aspel
                <br>
                    Soluciones
                </br>
            </h1>
            <h2 class="texto-inicial text-right" id="p2">
                Encuentra la solución ideal de tecnología y consultoría para tu empresa
            </h2>
            <div align="right" class="botones" id="botones2" style="margin: 5em;">
                <a class="nosotros-a" href="nosotros">
                    Conócenos
                </a>
                <a class="sol-a efecto-seccion" href="#aspelsoluciones">
                    Ver soluciones
                </a>
            </div>
        </div>
    </li>
    <!-- Slide No3 -->
    <li class="anim-slide" id="tres">
        <div class="fondo-gray col-md-6">
            <h1 class="text-left" id="t3">
                Aspel
                <br>
                    Soluciones
                </br>
            </h1>
            <h2 class="texto-inicial text-left" id="p3">
                Encuentra la solución ideal de tecnología y consultoría para tu empresa
            </h2>
            <div align="left" class="botones" id="botones3">
                <a class="nosotros-a" href="nosotros">
                    Conócenos
                </a>
                <a class="sol-a efecto-seccion" href="#aspelsoluciones">
                    Ver soluciones
                </a>
            </div>
        </div>
    </li>
    <!-- Slide No4-->
    <li class="anim-slide" id="cuatro">
        <div class="fondo-gray col-md-6">
            <h1 class="text-left" id="t4">
                Aspel
                <br>
                    Soluciones
                </br>
            </h1>
            <h2 class="texto-inicial text-left" id="p4">
                Encuentra la solución ideal de tecnología y consultoría para tu empresa
            </h2>
            <div align="left" class="botones" id="botones4">
                <a class="nosotros-a" href="nosotros">
                    Conócenos
                </a>
                <a class="sol-a efecto-seccion" href="#aspelsoluciones">
                    Ver soluciones
                </a>
            </div>
        </div>
    </li>


    

    {{--
    <li class="anim-slide" id="cinco">
        <div class="fondo-gray col-md-6">
            <h1 id="t5">
                Aspel
                <br>
                    Soluciones
                </br>
            </h1>
            <h2 class="texto-inicial" id="p5">
                Encuentra la solución ideal de tecnología y consultoría para tu empresa
            </h2>
            <div align="left" class="botones" id="botones5">
                <a class="nosotros-a" href="nosotros">
                    Conócenos
                </a>
                <a class="sol-a ancla2" href="#solucion">
                    Ver soluciones
                </a>
            </div>
        </div>
    </li>
    <li class="anim-slide" id="seis">
        <div class="fondo-gray col-md-6">
            <h1 id="t6">
                Aspel
                <br>
                    Soluciones
                </br>
            </h1>
            <h2 class="texto-inicial" id="p6">
                Encuentra la solución ideal de tecnología y consultoría para tu empresa
            </h2>
            <div align="left" class="botones" id="botones6">
                <a class="nosotros-a" href="nosotros">
                    Conócenos
                </a>
                <a class="sol-a ancla2" href="#solucion">
                    Ver soluciones
                </a>
            </div>
        </div>
    </li>
    <li class="anim-slide" id="siete">
        <div class="fondo-gray col-md-6">
            <h1 id="t7">
                Aspel
                <br>
                    Soluciones
                </br>
            </h1>
            <h2 class="texto-inicial" id="p7">
                Encuentra la solución ideal de tecnología y consultoría para tu empresa
            </h2>
            <div align="left" class="botones" id="botones7">
                <a class="nosotros-a" href="nosotros">
                    Conócenos
                </a>
                <a class="sol-a ancla2" href="#solucion">
                    Ver soluciones
                </a>
            </div>
        </div>
    </li>
    <li class="anim-slide" id="ocho">
        <div class="fondo-gray col-md-6">
            <h1 id="t8">
                Aspel
                <br>
                    Soluciones
                </br>
            </h1>
            <h2 class="texto-inicial" id="p8">
                Encuentra la solución ideal de tecnología y consultoría para tu empresa
            </h2>
            <div align="left" class="botones" id="botones8">
                <a class="nosotros-a" href="nosotros">
                    Conócenos
                </a>
                <a class="sol-a ancla2" href="#solucion">
                    Ver soluciones
                </a>
            </div>
        </div>
    </li>
    <li class="anim-slide" id="nueve">
        <div class="fondo-gray col-md-6">
            <h1 id="t9">
                Aspel
                <br>
                    Soluciones
                </br>
            </h1>
            <h2 class="texto-inicial" id="p9">
                Encuentra la solución ideal de tecnología y consultoría para tu empresa
            </h2>
            <div align="left" class="botones" id="botones9">
                <a class="nosotros-a" href="nosotros">
                    Conócenos
                </a>
                <a class="sol-a ancla2" href="#solucion">
                    Ver soluciones
                </a>
            </div>
        </div>
    </li>
    --}}
    <nav class="anim-arrows">
        <span class="anim-arrows-prev">
            <i class="fa icon-chevron-thin-left fa-3x">
            </i>
        </span>
        <span class="anim-arrows-next">
            <i class="fa icon-chevron-thin-right fa-3x">
            </i>
        </span>
    </nav>
</ul>