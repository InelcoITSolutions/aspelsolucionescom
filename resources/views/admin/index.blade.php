@extends('admin.plantilla')
@section('title','Categorias')

@section('content')
<section class="categoria" id="categoria">
    <div class="container">
        <div class="row">
            <h1 class="text-center h1-responsive">
                Panel de Administración de la tienda en linea Aspel Soluciones
            </h1>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <i aria-hidden="true" class="fa fa-list">
                            <a href="{{url('admin/categorias')}}">
                                <div class="mask">
                                </div>
                            </a>
                        </i>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-block">
                        <a class="btn btn-primary btn-lg btn-block" href="{{url('admin/categorias')}}">
                            CATEGORIAS
                        </a>
                    </div>
                    <!--/.Card content-->
                </div>
                <!--/.Card-->
            </div>
            <div class="col-sm-6 col-md-6">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <i aria-hidden="true" class="fa fa-table">
                            <a href="{{url('admin/productos')}}">
                                <div class="mask">
                                </div>
                            </a>
                        </i>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-block">
                        <a class="btn btn-primary btn-lg btn-block" href="{{url('admin/productos')}}">
                            PRODUCTOS
                        </a>
                    </div>
                    <!--/.Card content-->
                </div>
                <!--/.Card-->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <i aria-hidden="true" class="fa fa-cc-paypal">
                            <a href="{{url('admin/ventas')}}">
                                <div class="mask">
                                </div>
                            </a>
                        </i>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-block">
                        <a class="btn btn-primary btn-lg btn-block" href="{{url('admin/ventas')}}">
                            VENTAS
                        </a>
                    </div>
                    <!--/.Card content-->
                </div>
                <!--/.Card-->
            </div>
            <div class="col-sm-6 col-md-6">
                <!--Card-->
                <div class="card">
                    <!--Card image-->
                    <div class="view overlay hm-white-slight">
                        <i aria-hidden="true" class="fa fa-users">
                            <a href="{{url('admin/usuarios')}}">
                                <div class="mask">
                                </div>
                            </a>
                        </i>
                    </div>
                    <!--/.Card image-->
                    <!--Card content-->
                    <div class="card-block">
                        <a class="btn btn-primary btn-lg btn-block" href="{{url('admin/usuarios')}}">
                            USUARIOS
                        </a>
                    </div>
                    <!--/.Card content-->
                </div>
                <!--/.Card-->
            </div>
        </div>
    </div>
</section>
@stop
