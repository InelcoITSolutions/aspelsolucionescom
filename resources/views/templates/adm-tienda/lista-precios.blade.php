@extends('templates.main')
@section('title','Lista Precios ADM Tienda')
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
                                  <th height="55px" style="text-align: center;" class="bg-primary">Versión básica</th>
                                  <th style="text-align: center;" class="bg-primary">Versión premium</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td height="50px" align="center">
                                    <img src="/img/productos/ADMTienda/Inelco-precio-basico.png" alt="inventario y servicios" class="img-responsive ">   
                                  </td>
                                  <td height="50px" align="center">
                                      <img src="/img/productos/ADMTienda/Inelco-precio-premium.png" alt="inventario y servicios" class="img-responsive ">
                                  </td>
                                </tr>
                                        
                                <tr>
                                  <td height="50px" bgcolor="#64B32E"><font size ="3", color ="#ffffff">
                                    $99.00 IVA Incluido
                                  </td>
                                  <td bgcolor="#64B32E"> <font size ="3", color ="#ffffff">$159.00 IVA Incluido</td>
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
