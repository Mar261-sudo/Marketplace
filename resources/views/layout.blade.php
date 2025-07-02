<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Marketplace</title>
    <!-- CSS files -->
    <link href="{{url('dist/css/tabler.min.css')}}" rel="stylesheet"/>
    <link href="{{url('dist/css/tabler-flags.min.css')}}" rel="stylesheet"/>
    <link href="{{url('dist/css/tabler-payments.min.css')}}" rel="stylesheet"/>
    <link href="{{url('dist/css/tabler-vendors.min.css')}}" rel="stylesheet"/>
    <link href="{{url('dist/css/demo.min.css')}}" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>

    @yield('styles')
  </head>
  <body >
    <script src="{{url('dist/js/demo-theme.min.js')}}"></script>
    <div class="page">
      <!-- Navbar -->
      <header class="navbar navbar-expand-md d-print-none"  data-bs-theme="dark">
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
              <img src="./static/loguito.png" width="110" height="32">
            </a>
            <div class="d-none d-xl-block ps-2">
                  <div>Perfil</div>
                  <div class="mt-1 small text-secondary">{{ Auth::user()->nombre }}</div>
                </div>
          </h1>
            <div>
              <a href="{{ url('/logout') }}" class="dropdown-item text-danger">
                <i class="bi bi-box-arrow-right me-2"></i> Cerrar sesión
            </a>
            </div>
        </div>
      </header>
      <header class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="navbar">
            <div class="container-xl">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/') }}" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
<!--
category: Buildings
tags: [love, sweet, dating, care, safety]
unicode: "f353"
version: "1.88"
-->
 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                 class="bi bi-house-heart-fill" viewBox="0 0 16 16">
                <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707z"/>
                <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018"/>
            </svg>
                    </span>
                    <span class="nav-link-title">
                      Inicio
                    </span>
                  </a>
                </li>
                

                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle show" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="true">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                      <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                    </svg>
                    </span>
                    <span class="nav-link-title">
                      Ajustes
                    </span>
<!-- 					
					<span class="nav-link-title">
                      Comentarios
                    </span> -->
                  </a>
				
                  <div class="dropdown-menu" data-bs-popper="static">
                    <div class="dropdown-menu-columns">
                      <div class="dropdown-menu-column">
                        <a class="dropdown-item" href="{{ url ('categorias')}}">Categorias</a>
                        <a class="dropdown-item" href="{{ url ('ciudades')}}">Ciudades</a>
	  					          <a class="dropdown-item" href="{{ url ('productos')}}">Productos</a>
                        <a class="dropdown-item" href="{{ url ('usuarios')}}">Usuarios</a>
                      </div>
                    </div>
                  </div>
                </li>
              <li class="nav-item">
    <a class="nav-link" href="{{ route('comentarios.index') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
             class="bi bi-chat-left-heart-fill me-1" viewBox="0 0 16 16">
            <path d="M2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6 3.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"/>
        </svg>
        Comentarios
    </a>
</li>




              </ul>
            
            </div>
          </div>
        </div>
      </header>
      <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
          <div class="container-xl">
            <div class="row g-2 align-items-center">
             @yield('header')
            </div>
          </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">

          <div class = "card">
            <div class = "card-body">
            @yield('content')
          </div>
        </div>
		<!-- footer -->
        <footer class="footer footer-transparent d-print-none">
          <div class="container-xl">
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-lg-auto ms-lg-auto">
               
              </div>
              
            </div>
          </div>
        </footer>
      </div>
    </div>
	  @yield('modals')
    <!-- Libs JS -->
    <script src= "{{url('dist/libs/apexcharts/dist/apexcharts.min.js')}}" defer></script>
    <script src= "{{url('dist/libs/jsvectormap/dist/js/jsvectormap.min.js')}}" defer></script>
    <script src= "{{url('dist/libs/jsvectormap/dist/maps/world.js')}}" defer></script>
    <script src= "{{url('dist/libs/jsvectormap/dist/maps/world-merc.js')}}" defer></script>
    <!-- Tabler Core -->
    <script src= "{{url('dist/js/tabler.min.js')}}" defer></script>
    <script ssrc= "{{url('dist/js/demo.min.js')}}" defer></script>
	 @yield('scripts')
  </body>
</html>