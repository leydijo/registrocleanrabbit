<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cleanrabbit</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/d1fdf6a701.js" crossorigin="anonymous"></script>

        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #000;
                font-family: 'Montserrat', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                padding: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
  
    </head>
    <body>
        @yield('scripts')

        <nav class="navbar navbar-light bg-dark">
            <a class="navbar-brand" href="#">
              <img src= {{ asset('../img/conejo.png') }} width="40" height="30" class="d-inline-block align-top" alt="">
             
 
             <span style="color: #fff;">CleanRabbit</span>
            </a>
          </nav>
        <div class="container text-center">

         

            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="card">
                        <div class="card-header">Registro</div>
            
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
                                        <input type="text" class="form-control" name="c" 
                                            placeholder="Search users"> <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default">
                                                <span class="glyphicon glyphicon-search"><i class="fas fa-search"></i></span>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                                <div class="div container">
                                    @if(isset($details)) 
                                    <p>los resultados de búsqueda para su consulta <b>{{ $query }}</b> son : </p> 
                                    <h2>Usuarios Registrados</h2>
                                    <table class="table table-hover">
                                        <thead>
                                          <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Cedula</th>
                                            <th scope="col">Nombres</th>
                                            <th scope="col">Dirección</th>
                                            <th scope="col">Cumpleaños</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Editar</th>
                                            <th scope="col">Servicio</th>
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
                                                <td><a type="button"  href="{{ route('register.edit', $user->id) }}"class="btn btn-info">Editar</a></td> 
                                            <td><a type="button"  href="{{ asset ('service/create') }}?user={{$user->id}}" class="btn btn-warning">Crear Servicio </a></td> 
            
                                            </tr>  
                                           
                                            
                                          @endforeach  
                                        </tbody> 
                                        
                                    </table>
                                      @elseif(isset($message))
                                        <p>{{$message}}</p>
                                      @endif
            
                          
            
                                </div>
                                
                                  
                            </div> 
            {{-- <div class="col">
               <div class="main-section">
                   <div class="col-12">
                       <div class="avatar">
                            <img  src="img/avatar.png"/>
                       </div>
                        
                        <form class="col-12"method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            {{-- <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
     --}}
                            {{-- <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary text-center">
                                        <i class="fas fa-sign-in-alt"></i>
                                        {{ __('Ingresar') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form> --}}










                   </div>
                </div> 
            </div> 
           
        </div>
    </body>
</html>
