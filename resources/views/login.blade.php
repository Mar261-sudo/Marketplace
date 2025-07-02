<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta20
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Marketplace</title>
    <!-- CSS files -->
    <link href="./dist/css/tabler.min.css?1692870487" rel="stylesheet"/>
    <link href="./dist/css/tabler-flags.min.css?1692870487" rel="stylesheet"/>
    <link href="./dist/css/tabler-payments.min.css?1692870487" rel="stylesheet"/>
    <link href="./dist/css/tabler-vendors.min.css?1692870487" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css?1692870487" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body  class=" d-flex flex-column bg-white">
    <script src="./dist/js/demo-theme.min.js?1692870487"></script>
    <div class="row g-0 flex-fill">
      <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
        <div class="container container-tight my-5 px-lg-5">
          <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/loguito.png" height="36" alt=""></a>
          </div>
          <h2 class="h3 text-center mb-3">
            Ingresar
          </h2>
           @if(session('message'))
              <div class ="alert alert-{{ session('type')}}">
                {{ session ('message')}}
              </div>
            @endif
          <form action="check" method="post" autocomplete="off" >
              @csrf
            <div class="mb-3">
              <label class="form-label">Email </label>
              <input type="email" class="form-control" placeholder="your@email.com" autocomplete="off" name="email" required autofocus>
            </div>
            <div class="mb-2">
              <label class="form-label">
                Password
                
              </label>
              <div class="input-group input-group-flat">
                <input type="password" class="form-control"  placeholder="Your password"  autocomplete="off" name="password" required>
                <span class="input-group-text">
                 
                </span>
              </div>
            </div>
           
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Comenzar</button>
            </div>
          </form>
          <div class="text-center text-secondary mt-3">
            No tienes una cuenta? <a href="register" tabindex="-1">Registrarse</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
        <!-- Photo -->
        <div class="bg-cover h-100 min-vh-100" style="background-image: url(./static/fondo.png)"></div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js?1692870487" defer></script>
    <script src="./dist/js/demo.min.js?1692870487" defer></script>
  </body>
</html>