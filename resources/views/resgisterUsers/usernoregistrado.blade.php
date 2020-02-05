@extends('layouts.app')

@yield('javascript')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Crear Usuarios</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="container">

                    <form class="form-group" action="/register" method="POST" id="">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="cedula">Cédula </label>
                          <input  type="text" class="form-control" id="cedula" name="cedula" aria-describedby="emailHelp">
                         
                        </div>
                        <div class="form-group">
                          <label for="nombrescompletos">Nombres Completos</label>
                          <input type="text" class="form-control"  name="nombrescompletos" id="nombrescompletos">
                        </div>

                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" class="form-control" name="direccion" id="direccion">
                        </div>

                        <div class="cumpleanos">
                            <label for="cumpleanos">Cumpleaños</label>
                            <input type="date" class="form-control" name="cumpleanos" id="cumpleanos">
                        </div>

                        
                        <div class="telefono">
                            <label   for="telefono">Télefono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono">
                        </div>

                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-lg btn-info pull-right">Crear</button>
                        </div>
                            
                      </form>
                    
                      
                </div> 

            </div>    
      
                    
                 
@endsection

<script type="text/javascript">


   console.log('hola feo')


  

    
   

   
   
</script>

<style>

 
</style>