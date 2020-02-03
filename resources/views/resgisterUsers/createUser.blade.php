@extends('layouts.app')

@yield('javascript')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Registro</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="well">

                    <form action="/search" method="POST" role="search">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" class="form-control" name="c"
                                placeholder="Search users"> <span class="input-group-btn">
                                <button type="submit" class="btn btn-default">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                        </div>
                    </form>
                    <div class="div container">

                        @if(isset($details))
                        <p>los resultados de búsqueda para su consulta <b>{{ $query }}</b> son : </p> 
                        <h2>Detalles</h2>
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">Cedula</th>
                                <th scope="col">Nombres</th>
                                {{-- <th scope="col">Last</th>
                                <th scope="col">Handle</th> --}}
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ( $details as $user )
                                <tr>
                                    <tr>{{$user->cedula}}</tr>
                                    <tr>{{$user->nombres}}</tr> 
                                </tr>  
                              @endforeach  
                            </tbody>
                        </table>
                          @elseif(isset($message))
                            <p>{{$message}}</p>
                          @endif

              

                    </div>
                    
                      
                </div> 
      
                    
                 
@endsection

<script type="text/javascript">


   console.log('hola feo')


   function divLogin() {
        var element = document.getElementById("mostrar");
        element.classList.remove("ocultar");
    }

    
   

   
   
</script>