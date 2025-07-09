<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detalle de productos</title>
    <link href="https://fonts.googleapis.com/css?family=Cairo:400,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400i,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&amp;display=swap" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main-color.css')}}">
</head>
<body class="biolife-body">

    <!-- Preloader -->
    <div id="biof-loading">
        <div class="biof-loading-center">
            <div class="biof-loading-center-absolute">
                <div class="dot dot-one"></div>
                <div class="dot dot-two"></div>
                <div class="dot dot-three"></div>
            </div>
        </div>
    </div>

 

    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">PRODUCTOS</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><span class="current-page">Informacion de productos</span></li>
            </ul>
        </nav>
    </div>

    <div class="page-contain single-product">
        <div class="container">

            <!-- Main content -->
            <div id="main-content" class="main-content">
                
                <!-- summary info -->
                <div class="sumary-product single-layout">
                    <div class="media">
                        <ul class="biolife-carousel slider-for" data-slick='{"arrows":false,"dots":false,"slidesMargin":30,"slidesToShow":1,"slidesToScroll":1,"fade":true,"asNavFor":".slider-nav"}'>
                            <li>
                             <img src="{{ asset('img/productos/' . $productos->imagen) }}" alt="{{ $productos->nombre }}" width="500" height="500">
                            </li>   
                       </ul>
                </div>
                    <div class="product-attribute">
                        <div class="rating">
                            <h3 class="title">{{ $productos->nombre }}</h3>
                             <b class="category">Categoría: {{ $productos->categoria->nombre }}</b>
                            <p class="excerpt">{{ $productos->descripcion }}</p>
                       </div>
                       <div class="price">
                          <p class="excerpt">Valor producto :</p>

                           <ins><span class="price-amount"><span class="currencySymbol">$</span>{{ $productos->valor }}</span></ins>
                       </div>

                      
                       
                        <div class="product-atts">
                          <div class="atts-item">
                           <span class="title">Publicado por:</span>
                            <p>{{ $productos->usuario->nombre }}</p>
                         </div>
                      </div>
                       <div class="shipping-info">
                          <a href="{{ route('market.index') }}" class="btn btn-success">Volver al Marketplace</a>
                        </div>
                    </div>
                    <div class="action-form">
                       <div class="quantity-box">
                         <span class="title">Estado del producto:</span>
                          <p>{{ $productos->estado == 1 ? 'Disponible' : 'No disponible' }}</p>
                      </div>
                        <div class="total-price-contain">
                            <span class="title">Publicado el:</span>
                            <p>{{ $productos->created_at->format('d/m/Y') }}</p>
                        </div>
                      
                    </div>
                </div>  
                
                        <h4>Comentarios</h4>
@if($productos->comentarios->count() > 0)
    <ul>
        @foreach($productos->comentarios as $comentario)
            <li>
                <strong>{{ $comentario->usuario->nombre ?? 'Usuario desconocido' }}</strong>: 
                {{ $comentario->descripcion }} 
                ({{ $comentario->valoracion }} estrellas)
            </li>
        @endforeach
    </ul>
@else
    <p>No hay comentarios para este producto.</p>
@endif




    <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/biolife.framework.js')}}"></script>
    <script src="{{asset('assets/js/functions.js')}}"></script>
</body>

</html>