<!DOCTYPE html>
<!-- saved from url=(0043)https://semantic-ui.com/examples/fixed.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Standard Meta -->
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Marketplace</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.5.0/semantic.min.css">
  <
  <style type="text/css">
  body {
    background-color: #FFFFFF;
  }
  .ui.menu .item img.logo {
    margin-right: 1.5em;
  }
  .main.container {
    margin-top: 7em;
  }
  .wireframe {
    margin-top: 2em;
  }
  .ui.footer.segment {
    margin: 5em 0em 0em;
    padding: 5em 0em;
  }
  </style>

</head>
<body>

  <div class="ui fixed inverted menu">
    <div class="ui container">
      <a href="https://semantic-ui.com/examples/fixed.html#" class="header item">
        <img class="logo" src="img/logo.png">
        Project Name
      </a>
      <a href="https://semantic-ui.com/examples/fixed.html#" class="item">Home</a>
      <div class="ui simple dropdown item">
        Dropdown <i class="dropdown icon"></i>
        <div class="menu">
          <a class="item" href="https://semantic-ui.com/examples/fixed.html#">Link Item</a>
          <a class="item" href="https://semantic-ui.com/examples/fixed.html#">Link Item</a>
          <div class="divider"></div>
          <div class="header">Header Item</div>
          <div class="item">
            <i class="dropdown icon"></i>
            Sub Menu
            <div class="menu">
              <a class="item" href="https://semantic-ui.com/examples/fixed.html#">Link Item</a>
              <a class="item" href="https://semantic-ui.com/examples/fixed.html#">Link Item</a>
            </div>
          </div>
          <a class="item" href="https://semantic-ui.com/examples/fixed.html#">Link Item</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="ui main text container">
    <h1 class="ui header">Categorías</h1> 
    <table class ="ui celled table">
      <thead>
        <tr>
          <th scope ="col">Nombre</th>
          <th scope ="col">Estado</th>
          <th scope ="col">Acciones</th>
        </tr>
    </thead>  
    <tbody>
      @foreach ($data as $categoria)
          <tr>
            <td>{{$categoria ->nombre}}</td>
            <td>{{$categoria ->estado}}</td>
            <td>{{$categoria ->acciones}}</td>
        </tr>
      @endforeach
    </tbody></table>
  </div>
  <div class ="ui inverted vertical footer segment">
    <div class = "ui center aligned container">
      <p> Todos los derechos reservados 2025</p>
  </div></div>
</body></html>