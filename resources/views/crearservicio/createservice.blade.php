@extends('layouts.app')

@yield('javascript')
@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Crear Servicio</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="container">

                    <form class="form-group" action="/service" method="POST" id="">
                        {{ csrf_field() }}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01">Tipo de Servicio</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="tipo_servicio">
                                <option selected>Seleccione...</option>
                                @foreach ($servicios as  $service)
                                  <option value="{{ $service['id'] }}">{{ $service['tipo_servicio'] }}</option>
                                @endforeach
                             
                            
                              
                            </select>
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect02">Marcas</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="marcas">
                                <option selected>Seleccione...</option>
                                @foreach ($servicios as  $service)
                                  <option value="{{ $service['id'] }}">{{ $service['marcas'] }}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect03">Estado de tenis</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="estado_tenis">
                                <option selected>Seleccione...</option>
                                @foreach ($servicios as  $service)
                                  <option value="{{ $service['id'] }}">{{ $service['estado_tenis'] }}</option>
                                @endforeach
                             
                              
                            </select>
                        </div>
                        
                


                        <div class="input-group  mb-3 ">
                            <div class="input-group-prepend">
                              <span class="input-group-text">Abono</span>
                              <span class="input-group-text">$</span>
                            </div>
                            <input type="text" class="form-control"  name="abono" aria-label="Dollar amount (with dot and two decimal places)">
                        </div>


                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">#</span>
                              <span class="input-group-text">Orden</span>
                            </div>
                            <input type="text" class="form-control"  namme="numero_order" aria-label="Dollar amount (with dot and two decimal places)">
                        </div>


                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text">#</span>
                              <span class="input-group-text">Referencia</span>
                            </div>
                            <input type="text" class="form-control" name="referencia" aria-label="Dollar amount (with dot and two decimal places)">
                        </div>

                          <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01">Estado de Pedido</label>
                            </div>
                            <select class="custom-select" id="inputGroupSelect01" name="estado_pedido">
                                <option selected>Seleccione...</option>
                                @foreach ($servicios as  $service)
                                  <option value="{{ $service['id'] }}">{{ $service['estado_pedido'] }}</option>
                                @endforeach
                              

                              
                            </select>
                        </div> 
                        <div class="form-group">
                            <label for="fechaentrega">Fecha de Entrega</label>
                            <input type="date" class="form-control" name="fecha_entrega" id="fechaentrega">
                        </div>

                        
                       

                        <div class="col-lg-10 col-lg-offset-2">
                            <button type="submit" class="btn btn-lg btn-info pull-right">Agregar</button>
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