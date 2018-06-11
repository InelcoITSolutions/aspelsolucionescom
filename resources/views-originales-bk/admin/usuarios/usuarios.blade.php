@extends('admin.plantilla')
@section('title','Categorias')


@section('content')
<section class="categoria" id="categoria">
    <div class="container">
        <div class="row">
            <h1 class="text-center h1-responsive">
                Usuarios
            </h1>
            <p>
                <a class="btn btn-primary" href="{{route('usuarios.create')}}">
                    Agregar nuevo usuario
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
                        Correo
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                <tr>
                    <td>
                        <a class="btn btn-primary" href="{{route('usuarios.edit',$usuario)}}">
                            <i aria-hidden="true" class="fa fa-pencil-square-o">
                            </i>
                        </a>
                    </td>
                    <td>
                        {!!Form::open(['route' => ['usuarios.destroy', $usuario]])!!}
                        <input name="_method" type="hidden" value="DELETE">
                        </input>
                        <button class="btn btn-danger" onclick="return confirm('Elimiar registro')">
                            <i aria-hidden="true" class="fa fa-times">
                            </i>
                        </button>
                        {!! Form::close() !!}
                    </td>
                    <td>
                        {{$usuario->name}}
                    </td>
                    <td>
                        {{$usuario->email}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <?php echo $usuarios->
        render();?>
    </div>
</section>
@stop
