@extends('admin.plantilla')
@section('title','Categorias')


@section('content')
<section class="categoria" id="categoria">
    <div class="container">
        <div class="row">
            <h1 class="text-center h1-responsive">
                Categorias
            </h1>
            <p>
                <a class="btn btn-primary" href="{{url('admin/categorias/create')}}">
                    Agregar nueva categoria
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
                        Nombre
                    </th>
                    <th>
                        Etiqueta
                    </th>
                    <th>
                        Descripcion
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                <tr>
                    <td>
                        <a class="btn btn-primary" href="{{route('categorias.edit', $categoria)}}">
                            <i aria-hidden="true" class="fa fa-pencil-square-o">
                            </i>
                        </a>
                    </td>
                    <td>
                        {!!Form::open(['route' => ['categorias.destroy', $categoria]])!!}
                        <input name="_method" type="hidden" value="DELETE">
                        </input>
                        <button class="btn btn-danger" onclick="return confirm('Elimiar registro')">
                            <i aria-hidden="true" class="fa fa-times">
                            </i>
                        </button>
                        {!! Form::close() !!}
                    </td>
                    <td>
                        {{$categoria->Nombre}}
                    </td>
                    <td>
                        {{$categoria->Etiqueta}}
                    </td>
                    <td>
                        {{$categoria->Descripcion}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@stop
