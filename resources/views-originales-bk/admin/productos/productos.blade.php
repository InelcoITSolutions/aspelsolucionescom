@extends('admin.plantilla')
@section('title','Categorias')


@section('content')
<section class="categoria" id="categoria">
    <div class="container">
        <div class="row">
            <h1 class="text-center h1-responsive">
                Productos
            </h1>
            <p>
                <a class="btn btn-primary" href="{{url('admin/productos/create')}}">
                    Agregar nuevo producto
                </a>
            </p>
        </div>
        <table class="table table-hover" id="Cart_Totals_Container">
            <thead>
                <tr>
                    <th>
                        Editar
                    </th>
                    <th>
                        Elimiar
                    </th>
                    <th>
                        Clave
                    </th>
                    <th>
                        Nombre
                    </th>
                    <th>
                        Categoria
                    </th>
                    <th>
                        Descripcion
                    </th>
                    <th>
                        Incluye
                    </th>
                    <th>
                        Precio
                    </th>
                    <th>
                        Imagen
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <td>
                        <a class="btn btn-primary" href="{{route('productos.edit', $producto->etiqueta)}}">
                            <i aria-hidden="true" class="fa fa-pencil-square-o">
                            </i>
                        </a>
                    </td>
                    <td>
                        {!!Form::open(['route' => ['productos.destroy', $producto->etiqueta]])!!}
                        <input name="_method" type="hidden" value="DELETE">
                        </input>
                        <button class="btn btn-danger" onclick="return confirm('Elimiar registro')">
                            <i aria-hidden="true" class="fa fa-times">
                            </i>
                        </button>
                        {!! Form::close() !!}
                    </td>
                    <td>
                        {{$producto->clave}}
                    </td>
                    <td>
                        {{$producto->nombre}}
                    </td>
                    <td>
                        {{$producto->categoria->Nombre}}
                    </td>
                    <td>
                        {{$producto->descripcion_corta}}
                    </td>
                    <td>
                        {{$producto->incluye1}}
                    </td>
                    <td>
                        ${{number_format($producto->precio,2)}}
                    </td>
                    <td>
                        <img alt="Logos productos aspel" class="img-responsive" src="{{$producto->imagen}}" width="50">
                        </img>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <?php echo $productos->
        render();?>
    </div>
</section>
@stop
