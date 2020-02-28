
@extends('layouts.app')

@yield('javascript')
@section('content')

<div class="row justify-content-center">
    <div class="col-10">
        <div class="card">
            <div class="card-header">Consultar</div>

            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif

                <div class="well">

                    <form action="/search" method="get" role="search">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control" name="c" placeholder="Search users"> <span
                                class="input-group-btn">
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search"><i class="fas fa-search"></i></span>
                                </button>
                            </span>
                        </div>
                    </form>

                </div>
            </div>
        </div>


        <div class="container registrados">
            @if(isset($details))
            <p>los resultados de búsqueda para su consulta <b>{{ $query }}</b> son : </p>
            <h3 class="titulo">Usuarios Registrados</h3>
            <table class="table table-bordered  table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Cedula</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Cumpleaños</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Servicio</th>
                        <th scope="col">Consultar</th>
                        {{-- <th scope="col">Last</th>
                    <th scope="col">Handle</th> --}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($details as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->cedula}}</td>
                        <td>{{$user->nombres}}</td>
                        <td>{{$user->direccion}}</td>
                        <td>{{$user->cumpleanos}}</td>
                        <td>{{$user->telefono}}</td>
                        <td><a type="button" href="{{ route('register.edit', $user->id) }}"  class="btn btn-success">Editar</a></td>
                        <td><a type="button" href="{{ asset ('service/create') }}?user={{$user->id}}"  class="btn btn-warning">Crear Servicio </a></td>
                        <td><a type="button" href="{{route('service.index',$user->id) }}" class="btn btn-info">Consultar Pro </a></td>
    
                    </tr>
    
    
                    @endforeach
                </tbody>
    
            </table>
            @elseif(isset($message))
            <p>{{$message}}</p>
            @endif
    
    
    
        </div>
    
    
    
       




    </div>



    

</div>



@endsection

<script type="text/javascript">
    console.log('hola feo registrados')


    function divLogin() {
        var element = document.getElementById("mostrar");
        element.classList.remove("ocultar");
    }

</script>
