@extends('templates.main')

@section('title','Lista Precios ESPACIO')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
    @include('templates.espacio.banner-espacio')


    <section class="descripcion-prod desc-espacio secciones " >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 align="center" id="mas">
                        <strong>Lista de Precios</strong>
                    </h2>
                    <h2 align="center">Elige la que mejor modalidad que se adapte a tus necesidades.</h2>

                   
                </div>
                <div class="col-md-3">

                </div>

                <div class="col-md-6">
                    <div class="table-responsive "  >
                        <table class="table table-striped table-hover"  align="center" style="text-align: center;" border="0">
                              <thead>
                                <tr>
                                  <th height="55px" style="text-align: center;" class="bg-primary">SERVICIO</th>
                                  <th style="text-align: center;" class="bg-primary">PRECIO</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td height="50px" >ⓔspacio 4G por 1 Mes</td>
                                  <td>$65.00</td>
                                </tr>

                                <tr>
                                  <td height="50px">ⓔspacio 4G por 2 Meses</td>
                                  <td>$127.40</td>
                                </tr>

                                <tr>
                                  <td height="50px">ⓔspacio 4G por 3 Meses</td>
                                  <td>$189.15</td>
                                </tr>

                                <tr>
                                  <td height="50px">ⓔspacio 4G por 6 Meses</td>
                                  <td height="50px">$370.50</td>
                                </tr>

                                <tr>
                                  <td height="50px" >ⓔspacio 10G por 1 Meses</td>
                                  <td>$156.00</td>
                                </tr>

                                <tr>
                                  <td height="50px">ⓔspacio 10G por 2 Meses</td>
                                  <td>$305.76</td>
                                </tr>

                                <tr>
                                  <td height="50px" >ⓔspacio 10G por 3 Meses</td>
                                  <td>$453.96</td>
                                </tr>

                                <tr>
                                  <td height="50px">ⓔspacio 10G por 6 Meses</td>
                                  <td>$889.20</td>
                                </tr>


                                <tr height="50px" >
                                  <td>ⓔspacio 10G por 1 Año</td>
                                  <td>$1,684.80</td>
                                </tr>

                                <tr>
                                  <td height="50px">ⓔspacio 40G por 1 Mes</td>
                                  <td>$468.00</td>
                                </tr>

                                <tr>
                                  <td height="50px">ⓔspacio 40G por 2 Meses</td>
                                  <td>$917.28</td>
                                </tr>

                                <tr>
                                  <td height="50px">ⓔspacio 40G por 3 Meses</td>
                                  <td>$1,361.88</td>
                                </tr>

                                <tr>
                                  <td height="50px">ⓔspacio 40G por 6 Meses</td>
                                  <td>$2,667.60</td>
                                </tr>

                                <tr>
                                  <td height="50px">ⓔspacio 40G por 1 Año</td>
                                  <td>$5,054.40</td>
                                </tr>

                                <tr>
                                  <td height="50px">ⓔspacio 80G por 1 Mes</td>
                                  <td>$780.00</td>
                                </tr>

                                <tr>
                                  <td height="50px">ⓔspacio 80G por 2 Meses</td>
                                  <td>$1,528.80</td>
                                </tr>

                                <tr>
                                  <td height="50px">ⓔspacio 80G por 3 Meses</td>
                                  <td>$2,269.80</td>
                                </tr>

                                <tr>
                                  <td height="50px">ⓔspacio 80G por 6 Meses</td>
                                  <td>$4,446.00</td>
                                </tr>

                                <tr>
                                  <td height="50px">ⓔspacio 80G por 1 Año</td>
                                  <td>$8,424.00</td>
                                </tr>
                                
                              </tbody>
                            </table>
                        </div>
                       
                    </div>
                                      
                </div>
        
            <a href="{{url('/contacto')}}" >
                            <div class="col-md-12">
                            <p class="text-center"><input class="btn btn-primary btn-lg"  value='Lo quiero' /></p>
                            </div>
            </a>
            </div>
        </div>
    </section>


       
@include('partials.botones-compra-espacio')
@include('templates.espacio.menu-espacio')

@endsection

@push('add-js')
    @stack('files-menu')

{{--    
<script src="/js/jquery.elevatezoom.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".zoom1").elevateZoom({
                zoomWindowPosition: 10,
                /*zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 500,
                lensFadeIn: 500,
                lensFadeOut: 500,*/
                easing : true,
                scrollZoom : true
            }); 
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(".zoom2").elevateZoom({
                zoomWindowPosition:2,
                /*zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 500,
                lensFadeIn: 500,
                lensFadeOut: 500,*/
                easing : true,
                scrollZoom : true
            }); 
        });
    </script>
--}}

@endpush
