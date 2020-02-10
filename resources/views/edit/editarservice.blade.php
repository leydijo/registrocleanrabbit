@extends('layouts.app')

@yield('javascript')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Editar Usuarios</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="container">

                <form class="form-group" action="{{route('register.edit', $usuarioregistrado->id)}}" method="GET" id="">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="cedula">Cédula </label>
                        <input  type="text" class="form-control" id="cedula" name="cedula"  value="{{$usuarioregistrado->cedula}}"aria-describedby="emailHelp">
                         
                        </div>
                        <div class="form-group">
                          <label for="nombrescompletos">Nombres Completos</label>
                          <input type="text" class="form-control"  name="nombrescompletos" value="{{$usuarioregistrado->nombres}}" id="nombrescompletos">
                        </div>

                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" name="direccion"  value="{{$usuarioregistrado->direccion}}" id="direccion">
                        </div>

                        <div class="form-group">
                            <label for="cumpleanos">Cumpleaños</label>
                            <input type="date" class="form-control" name="cumpleanos"  value="{{$usuarioregistrado->cumpleaños}}" id="cumpleanos">
                        </div>

                        
                        <div class="form-group">
                            <label   for="telefono">Télefono</label>
                            <input type="text" class="form-control" name="telefono"  value="{{$usuarioregistrado->telefono}}" id="telefono">
                        </div>

                        <div class="col-lg-10 col-lg-offset-2">
                            <a type="submit" class="btn btn-lg btn-danger pull-right">Actualizar</a>
                            <a type="submit" href="{{ asset('register/create') }}" class="btn btn-lg btn-info pull-left">Regresar</a>
                        </div> 
                            
                      </form>
                    
                      
                </div> 

            </div>    
      
                    
                 
@endsection

<script type="text/javascript">


   console.log('hola ')


  

    
   

   
   
</script>

<style>

 
</style>