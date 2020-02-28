@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Consultar Usuarios</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="">
                    <h1>Consultar Usuarios</h1>
                
                    <table class="table table-bordered  table-hover">
                        <thead class="thead-dark">
                            <tr>
                                {{-- <th scope="col">id</th> --}}
                                <th scope="col">Nombre</th>
                                <th scope="col">Abono</th>
                                <th scope="col">Marcas</th>
                                <th scope="col">Estado del pedido</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($getUserById->orders as $key => $order)

                            <tr>
                                <td>{{$getUserById->nombres}}</td>
                                <td>{{$order->abono}}</td>
                                <td>{{$order->marca->marcas}}</td>
                                <td>{{$getUserById->tipo_servicio}}</td>

                            </tr>

                             @endforeach 
                        </tbody>
            
                    </table>
                </div> 

         
            </div>    
        </div> 
    </div> 
</div>         


      
                    
                 
@endsection

<script type="text/javascript">

   
</script>

<style>

 
</style>