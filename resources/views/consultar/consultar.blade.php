@extends('layouts.app')


@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Consultar</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="well">

                    <form class="form-group" action="/register" method="POST" id="">
                        {{ csrf_field() }}
                        
                        <fieldset>

                            <!-- Cédula -->
                            <div class="form-group ">
                                {!! Form::label('cedula', 'Cédula:', ['class' => 'col-lg-2 control-label', 'name' => 'cedula']) !!}
                                <div class="col-lg-10">
                                    {!! Form::text('cedula', $value = null,  ['class' => 'form-control', 'name' => 'cedula', 'placeholder' => 'Cédula de Ciudadanía']) !!}
                                </div>
                            </div>
                            
                           

                            
                            <!-- Submit Button -->

                            <div class="d-flex p-2 bd-highlight ">
                                <div class="col-lg-10 col-lg-offset-2">
                                    {!! Form::submit('Consultar', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                                </div>

                                <div class="col-lg-10 col-lg-offset-2">
                                    {!! Form::submit('Crear', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
                                </div>
                            </div>

                            <div class="form-group  ">
                                
                            </div>
                    
                        </fieldset>

                    </form>    
                    {{-- {!! Form::close()  !!} --}}
                 
@endsection