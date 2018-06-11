@extends('templates.main')

@section('title','Dispositivos compatibles ADM Tienda')

@push('add-css')
<link href="/css/products-styles.css" rel="stylesheet"/>
@endpush

@section('content')
    @include('templates.adm-tienda.banner-admtienda')


    <section class="descripcion-prod desc-admtienda secciones " >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 align="center" id="mas">
                        <strong>Dispositivos compatibles</strong>
                    </h2>
                    <h2 align="center">Conoce los modelos de contratación y comienza a utilizar ADM Tienda.</h2>

                   
                </div>
                <div class="col-md-3">

                </div>

                <div class="col-md-6">
                    <div class="table-responsive "  >
                        <table class="table table-striped table-hover"  align="center" style="text-align: center;" border="0">
                        
                              <thead>
                                <tr>
                                  <th height="55px" style="text-align: center;" class="bg-success">MARCA
                                  </th>
                                  <th style="text-align: center;" class="bg-danger">
                                  DISPOSITIVOS
                                  </th>
                                   <th style="text-align: center;" class="bg-success">
                                  MODELO
                                  </th>
                                </tr>
                              </thead>

                              <tbody>
                                <tr>
                                  <td height="50px" class="bg-success">Unitech</td>
                                  <td class="bg-danger">Lector óptico</td>
                                  <td class="bg-success">
                                  <ul>
                                    <li>MS842-2UPBGC-SG  
                                    </li>

                                    <li>MS920
                                    </li>
                                    <li>MS912
                                    </li>
                                    <li>MS910
                                    </li>
                                    <li>MS916
                                    </li>
                                  </ul>
                                  </td>
                                </tr>

                                <tr>
                                  <td height="50px" class="bg-success">Star Micronics</td>
                                  <td class="bg-danger">Impresora Térmica</td>
                                  <td class="bg-success">
                                  <ul>
                                    <li>SM-T3OOi  
                                    </li>
                                    <li>SM-L200
                                    </li>
                                    <li>SM-230
                                    </li>
                                  </ul>
                                  </td>
                                </tr>

                                <tr>
                                  <td height="50px" class="bg-success">Epson</td>
                                  <td class="bg-danger">Impresora Térmica</td>
                                  <td class="bg-success">
                                  <ul>
                                    <li>TM-M10  
                                    </li>
                                    <li>TM-M30
                                    </li>
                                    <li>TM-P20
                                    </li>
                                  </ul>
                                  </td>
                                </tr>

                                <tr>
                                  <td height="50px" class="bg-success">POWA</td>
                                  <td class="bg-danger">Unidad T25</td>
                                  <td class="bg-success">
                                  <ul>
                                    <li>Lector Óptico  
                                    </li>
                                    <li>Impresora Térmica
                                    </li>
                                    <li>Cajón de dinero
                                    </li>
                                  </ul>
                                  </td>
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


       
@include('partials.botones-compra-admtienda')
@include('templates.adm-tienda.menu-tienda')

@endsection

@push('add-js')
    @stack('files-menu')



@endpush
