
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Expi </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>


    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">

                    <img src="/expin.jpg" height="60p" width="60p">

            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>  <li class="nav-item dropdown">
                                <a id="navbarDropdown " class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <b> Registro</b>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                                     <a class="dropdown-item dropdown-item" href="/servicio">
                                       Administrador
                                    </a>

                                </div>
        </li>
                        @else
             <b><li><a class="nav-link" href="{{ route('login') }}">{{ __('Inicio') }}</a></li></b>
@if(Auth::user()->tipo==2)
        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <b>  Usuarios especiales</b>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/uespeciales/altas">
                                        Altas
                                    </a>
                                      <a class="dropdown-item" href="/uespeciales/bajas">
                                        Bajas
                                    </a>
                                      <a class="dropdown-item" href="/uespeciales/consultas">
                                        Consultas
                                    </a>

                                </div>
        </li>
         <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <b>  Tarifas</b>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url( '/listar',Auth::user()->email)}}">
                                       Crear
                                    </a>
                                      <a class="dropdown-item" href="#">
                                        Configurar
                                    </a>
                                </div>
        </li>
        <b><li><a class="nav-link" href="{{ url( '/consultas',Auth::user()->email)}}">{{ __('Consultas') }}</a></li></b>
         <b><li><a class="nav-link" href="/">{{ __('Estacionamiento') }}</a></li></b>


 @endif

@if(Auth::user()->tipo==1)

      <div class="container d-flex flex-column flex-md-row justify-content-between">
               <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <b> Servicio</b>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/administradores/consultas">
                                        Administradores
                                    </a>
                                       <a class="dropdown-item" href="#">
                                       Estacionamientos
                                    </a>

                                </div>
        </li>

      </div>
  <div class="container d-flex flex-column flex-md-row justify-content-between">
               <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <b> Super usuarios</b>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/super/altas">
                                        Altas
                                    </a>
                                      <a class="dropdown-item" href="#">
                                        Bajas
                                    </a>
                                      <a class="dropdown-item" href="#">
                                        Consultas
                                    </a>

                                </div>
        </li>

      </div>
        <div class="container d-flex flex-column flex-md-row justify-content-between">
               <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <b> Terminos y condiciones</b>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/terminosycondiciones">
                                       Crear
                                    </a>
                                      <a class="dropdown-item" href="#">
                                       Cambiar
                                    </a>
                                      <a class="dropdown-item" href="#">
                                        Eliminar
                                    </a>
                                     <a class="dropdown-item" href="#">
                                        Consultas
                                    </a>

                                </div>
        </li>

      </div>

          <div class="container d-flex flex-column flex-md-row justify-content-between">
               <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <b> Contrato</b>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/creacontrato">
                                       Crear
                                    </a>

                                    <a class="dropdown-item" href="#">
                                       Cambiar
                                    </a>
                                     <a class="dropdown-item" href="#">
                                        Consultas
                                    </a>
                                </div>
        </li>

      </div>






@endif
                           <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <b>
                                    @if(Auth::user()->tipo==2)
                                    Administrador:
                                    @endif
                                    @if(Auth::user()->tipo==1)
                                    Super:
                                    @endif

                                    <i>{{Auth::user()->name }}</s></i><span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest



                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>


</body>

</html>
