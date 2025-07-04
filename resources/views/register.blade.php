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
  <body  class=" d-flex flex-column">
    <script src="./dist/js/demo-theme.min.js?1692870487"></script>
    <div class="page page-center">
      <div class="container container-tight py-4">
        <div class="text-center mb-4">
          <a href="." class="navbar-brand navbar-brand-autodark">
            <img src="./static/loguito.png" width="110" height="32" >
          </a>
        </div>
        <form class="card card-md" action="/register" method="post" autocomplete="off">
          @csrf
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Crear nueva cuenta</h2>
            <div class="mb-3">
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control" placeholder="Enter name" name="nombre" required autofocus>
            </div>
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" class="form-control" placeholder="Enter email" name ="email" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <div class="input-group input-group-flat">
                <input type="password" class="form-control"  placeholder="Password"  autocomplete="off" name="password" required>
                <span class="input-group-text">
                  
                </span>
              </div>
            </div>
            <div class="mb-3">
              <label class="form-check">
                <input type="checkbox" class="form-check-input" required />
                <span class="form-check-label">Acepta los <a href="terminos"  target="_blank" tabindex="-1">terminos y condiciones</a>.</span>
              </label>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Crear cuenta</button>
            </div>
          </div>
        </form>
        <div class="text-center text-secondary mt-3">
          Ya tienes una cuenta? <a href="/" tabindex="-1">Ingresar</a>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js?1692870487" defer></script>
    <script src="./dist/js/demo.min.js?1692870487" defer></script>
  </body>
</html>