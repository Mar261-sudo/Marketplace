<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biolife - Organic Food</title>
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

    <!-- HEADER -->
    <header id="header" class="header-area style-01 layout-03">
        <div class="header-top bg-main hidden-xs">
            <div class="container">
                <div class="top-bar left">
                    <ul class="horizontal-menu">
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>Organic@company.com</a></li>
                        <li><a href="#">Free Shipping for all Order of $99</a></li>
                    </ul>
                </div>
                <div class="top-bar right">
                    <ul class="social-list">
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    </ul>
                    <ul class="horizontal-menu">
                        <li class="horz-menu-item currency">
                            <select name="currency">
                                <option value="eur">€ EUR (Euro)</option>
                                <option value="usd" selected>$ USD (Dollar)</option>
                                <option value="usd">£ GBP (Pound)</option>
                                <option value="usd">¥ JPY (Yen)</option>
                            </select>
                        </li>
                        <li class="horz-menu-item lang">
                            <select name="language">
                                <option value="fr">French (EUR)</option>
                                <option value="en" selected>English (USD)</option>
                                <option value="ger">Germany (GBP)</option>
                                <option value="jp">Japan (JPY)</option>
                            </select>
                        </li>
                        <li><a href="login.html" class="login-link"><i class="biolife-icon icon-login"></i>Login/Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-middle biolife-sticky-object ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-2 col-md-6 col-xs-6">
                        <a href="index-2.html" class="biolife-logo"><img src="{{asset('assets/images/organic-3.png')}}" alt="biolife logo" width="135" height="34"></a>
                    </div>
                    <div class="col-lg-6 col-md-7 hidden-sm hidden-xs">
                        <div class="primary-menu">
                            <ul class="menu biolife-menu clone-main-menu clone-primary-menu" id="primary-menu" data-menuname="main menu">
                                <li class="menu-item"><a href="index-2.html">Home</a></li>
                                <li class="menu-item menu-item-has-children has-megamenu">
                                    <a href="#" class="menu-name" data-title="Shop" >Shop</a>
                                    <div class="wrap-megamenu lg-width-900 md-width-750">
                                        <div class="mega-content">
                                            <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                                <div class="wrap-custom-menu vertical-menu">
                                                    <h4 class="menu-title">Fresh Berries</h4>
                                                    <ul class="menu">
                                                        <li><a href="#">Fruit & Nut Gifts</a></li>
                                                        <li><a href="#">Mixed Fruits</a></li>
                                                        <li><a href="#">Oranges</a></li>
                                                        <li><a href="#">Bananas & Plantains</a></li>
                                                        <li><a href="#">Fresh Gala Apples</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                                <div class="wrap-custom-menu vertical-menu">
                                                    <h4 class="menu-title">Vegetables</h4>
                                                    <ul class="menu">
                                                        <li><a href="#">Berries</a></li>
                                                        <li><a href="#">Pears</a></li>
                                                        <li><a href="#">Chili Peppers</a></li>
                                                        <li><a href="#">Fresh Avocado</a></li>
                                                        <li><a href="#">Grapes</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                                <div class="wrap-custom-menu vertical-menu ">
                                                    <h4 class="menu-title">Fresh Fruits</h4>
                                                    <ul class="menu">
                                                        <li><a href="#">Basket of apples</a></li>
                                                        <li><a href="#">Strawberry</a></li>
                                                        <li><a href="#">Blueberry</a></li>
                                                        <li><a href="#">Orange</a></li>
                                                        <li><a href="#">Pineapple</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                                <div class="wrap-custom-menu vertical-menu">
                                                    <h4 class="menu-title">Featured Products</h4>
                                                    <ul class="menu">
                                                        <li><a href="#">Coffee Creamers</a></li>
                                                        <li><a href="#">Mayonnaise</a></li>
                                                        <li><a href="#">Almond Milk</a></li>
                                                        <li><a href="#">Fruit Jam</a></li>
                                                        <li><a href="#">Beverages</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-has-children has-child">
                                    <a href="#" class="menu-name" data-title="Products">Products</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item"><a href="#">Omelettes</a></li>
                                        <li class="menu-item"><a href="#">Breakfast Scrambles</a></li>
                                        <li class="menu-item menu-item-has-children has-child"><a href="#" class="menu-name" data-title="Eggs & other considerations">Eggs & other considerations</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="#">Classic Breakfast</a></li>
                                                <li class="menu-item"><a href="#">Huevos Rancheros</a></li>
                                                <li class="menu-item"><a href="#">Everything Egg Sandwich</a></li>
                                                <li class="menu-item"><a href="#">Egg Sandwich</a></li>
                                                <li class="menu-item"><a href="#">Vegan Burrito</a></li>
                                                <li class="menu-item"><a href="#">Biscuits and Gravy</a></li>
                                                <li class="menu-item"><a href="#">Bacon Avo Egg Sandwich</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="#">Griddle</a></li>
                                        <li class="menu-item menu-item-has-children has-child"><a href="#" class="menu-name" data-title="Sides & Extras">Sides & Extras</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="#">Breakfast Burrito</a></li>
                                                <li class="menu-item"><a href="#">Crab Cake Benedict</a></li>
                                                <li class="menu-item"><a href="#">Corned Beef Hash</a></li>
                                                <li class="menu-item"><a href="#">Steak & Eggs</a></li>
                                                <li class="menu-item"><a href="#">Oatmeal</a></li>
                                                <li class="menu-item"><a href="#">Fruit & Yogurt Parfait</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item"><a href="#">Biscuits</a></li>
                                        <li class="menu-item"><a href="#">Seasonal Fruit Plate</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children has-megamenu">
                                    <a href="#" class="menu-name" data-title="Demo">Demo</a>
                                    <div class="wrap-megamenu lg-width-800 md-width-750">
                                        <div class="mega-content">
                                            <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                                <div class="wrap-custom-menu vertical-menu">
                                                    <h4 class="menu-title">Home Page</h4>
                                                    <ul class="menu">
                                                        <li><a href="home-01.html">Home 01</a></li>
                                                        <li><a href="home-02.html">Home 02</a></li>
                                                        <li><a href="index-2.html">Home 03</a></li>
                                                        <li><a href="home-03-green.html">Home 03 Green</a></li>
                                                        <li><a href="home-04.html">Home 04</a></li>
                                                        <li><a href="home-04-light.html">Home 04 Light</a></li>
                                                        <li><a href="home-05.html">Home 05</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                                <div class="wrap-custom-menu vertical-menu">
                                                    <h4 class="menu-title">Inner Pages</h4>
                                                    <ul class="menu">
                                                        <li class="menu-item" ><a class="menu-name" href="blog-post.html">Blog Single</a></li>
                                                        <li class="menu-item" ><a class="menu-name" href="blog-v01.html">Blog Style 01</a></li>
                                                        <li class="menu-item" ><a class="menu-name" href="blog-v02.html">Blog Style 02</a></li>
                                                        <li class="menu-item" ><a class="menu-name" href="blog-v03.html">Blog Style 03</a></li>
                                                        <li class="menu-item" ><a class="menu-name" href="contact.html">Contact Us</a></li>
                                                        <li class="menu-item" ><a class="menu-name" href="about-us.html">About Us</a></li>
                                                        <li class="menu-item" ><a class="menu-name" href="checkout.html">Checkout</a></li>
                                                        <li class="menu-item" ><a class="menu-name" href="shopping-cart.html">Shopping Cart</a></li>
                                                        <li class="menu-item" ><a class="menu-name" href="login.html">Login/Register</a></li>
                                                        <li class="menu-item" ><a class="menu-name" href="404.html">404</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                                <div class="wrap-custom-menu vertical-menu">
                                                    <h4 class="menu-title">Category Pages</h4>
                                                    <ul class="menu">
                                                        <li><a href="category-grid-3-cols.html">Grid 3 Cols</a></li>
                                                        <li><a href="category-grid.html">Grid 4 Cols</a></li>
                                                        <li><a href="category-grid-6-cols.html">Grid 6 Cols</a></li>
                                                        <li><a href="category-grid-left-sidebar.html">Grid Left Sidebar</a></li>
                                                        <li><a href="category-grid-right-sidebar.html">Grid Right Sidebar</a></li>
                                                        <li><a href="category-list.html">List Full</a></li>
                                                        <li><a href="category-list-left-sidebar.html">List Left Sidebar</a></li>
                                                        <li><a href="category-list-right-sidebar.html">List Right Sidebar</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-xs-12 md-margin-bottom-0 xs-margin-bottom-25">
                                                <div class="wrap-custom-menu vertical-menu">
                                                    <h4 class="menu-title">Product Types</h4>
                                                    <ul class="menu">
                                                        <li><a href="single-product-simple.html">Simple</a></li>
                                                        <li><a href="single-product-grouped.html">Grouped</a></li>
                                                        <li><a href="single-product.html">Variable</a></li>
                                                        <li><a href="single-product-external.html">External/Affiliate</a></li>
                                                        <li><a href="single-product-onsale.html">Countdown</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item menu-item-has-children has-megamenu">
                                    <a href="#" class="menu-name" data-title="Blog">Blog</a>
                                    <div class="wrap-megamenu lg-width-800 md-width-750">
                                        <div class="mega-content">
                                            <div class="col-lg-3 col-md-3 col-xs-6">
                                                <div class="wrap-custom-menu vertical-menu">
                                                    <h4 class="menu-title">Blog Categories</h4>
                                                    <ul class="menu">
                                                        <li><a href="#">Beauty (30)</a></li>
                                                        <li><a href="#">Fashion (50)</a></li>
                                                        <li><a href="#">Food (10)</a></li>
                                                        <li><a href="#">Life Style (60)</a></li>
                                                        <li><a href="#">Travel (10)</a></li>
                                                        <li><a href="#">Nutrition (35)</a></li>
                                                        <li><a href="#">Food Decoration (45)</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-xs-6">
                                                <div class="wrap-custom-menu vertical-menu">
                                                    <h4 class="menu-title">Featured Posts</h4>
                                                    <ul class="menu">
                                                        <li><a href="#">Post example<sup>#1</sup></a></li>
                                                        <li><a href="#">Post example<sup>#2</sup></a></li>
                                                        <li><a href="#">Post example<sup>#3</sup></a></li>
                                                        <li><a href="#">Post example<sup>#4</sup></a></li>
                                                        <li><a href="#">Post example<sup>#5</sup></a></li>
                                                        <li><a href="#">Post example<sup>#6</sup></a></li>
                                                        <li><a href="#">Post example<sup>#7</sup></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-xs-12 md-margin-top-0 xs-margin-top-25px">
                                                <div class="block-posts">
                                                    <h4 class="menu-title">Recent Posts</h4>
                                                    <ul class="posts">
                                                        <li>
                                                            <div class="block-post-item">
                                                                <div class="thumb"><a href="#"><img src="{{asset('assets/images/megamenu/thumb-05.jpg')}}" width="100" height="73" alt=""></a></div>
                                                                <div class="left-info">
                                                                    <h4 class="post-name"><a href="#">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                                                                    <span class="p-date">Jan 05, 2019</span>
                                                                    <span class="p-comment">2 Comments</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="block-post-item">
                                                                <div class="thumb"><a href="#"><img src="{{asset('assets/images/megamenu/thumb-06.jpg')}}" width="100" height="73" alt=""></a></div>
                                                                <div class="left-info">
                                                                    <h4 class="post-name"><a href="#">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                                                                    <span class="p-date">May 15, 2019</span>
                                                                    <span class="p-comment">8 Comments</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="block-post-item">
                                                                <div class="thumb"><a href="#"><img src="{{asset('assets/images/megamenu/thumb-07.jpg')}}" width="100" height="73" alt=""></a></div>
                                                                <div class="left-info">
                                                                    <h4 class="post-name"><a href="#">Ashwagandha: The #1 Herb in the World for Anxiety?</a></h4>
                                                                    <span class="p-date">Apr 26, 2019</span>
                                                                    <span class="p-comment">10 Comments</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="menu-item"><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-md-6 col-xs-6">
                        <div class="biolife-cart-info">
                            <div class="mobile-search">
                                <a href="javascript:void(0)" class="open-searchbox"><i class="biolife-icon icon-search"></i></a>
                                <div class="mobile-search-content">
                                    <form action="#" class="form-search" name="mobile-seacrh" method="get">
                                        <a href="#" class="btn-close"><span class="biolife-icon icon-close-menu"></span></a>
                                        <input type="text" name="s" class="input-text" value="" placeholder="Search here...">
                                        <select name="category">
                                            <option value="-1" selected>All Categories</option>
                                            <option value="vegetables">Vegetables</option>
                                            <option value="fresh_berries">Fresh Berries</option>
                                            <option value="ocean_foods">Ocean Foods</option>
                                            <option value="butter_eggs">Butter & Eggs</option>
                                            <option value="fastfood">Fastfood</option>
                                            <option value="fresh_meat">Fresh Meat</option>
                                            <option value="fresh_onion">Fresh Onion</option>
                                            <option value="papaya_crisps">Papaya & Crisps</option>
                                            <option value="oatmeal">Oatmeal</option>
                                        </select>
                                        <button type="submit" class="btn-submit">go</button>
                                    </form>
                                </div>
                            </div>
                            <div class="wishlist-block hidden-sm hidden-xs">
                                <a href="#" class="link-to">
                                    <span class="icon-qty-combine">
                                        <i class="icon-heart-bold biolife-icon"></i>
                                        <span class="qty">4</span>
                                    </span>
                                </a>
                            </div>
                            <div class="minicart-block">
                                <div class="minicart-contain">
                                    <a href="javascript:void(0)" class="link-to">
                                            <span class="icon-qty-combine">
                                                <i class="icon-cart-mini biolife-icon"></i>
                                                <span class="qty">8</span>
                                            </span>
                                        <span class="title">My Cart -</span>
                                        <span class="sub-total">$0.00</span>
                                    </a>
                                    <div class="cart-content">
                                        <div class="cart-inner">
                                            <ul class="products">
                                                <li>
                                                    <div class="minicart-item">
                                                        <div class="thumb">
                                                            <a href="#"><img src="{{asset('assets/images/minicart/pr-01.jpg')}}" width="90" height="90" alt="National Fresh"></a>
                                                        </div>
                                                        <div class="left-info">
                                                            <div class="product-title"><a href="#" class="product-name">National Fresh Fruit</a></div>
                                                            <div class="price">
                                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                            </div>
                                                            <div class="qty">
                                                                <label for="cart[id123][qty]">Qty:</label>
                                                                <input type="number" class="input-qty" name="cart[id123][qty]" id="cart[id123][qty]" value="1" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="minicart-item">
                                                        <div class="thumb">
                                                            <a href="#"><img src="{{asset('assets/images/minicart/pr-02.jpg')}}" width="90" height="90" alt="National Fresh"></a>
                                                        </div>
                                                        <div class="left-info">
                                                            <div class="product-title"><a href="#" class="product-name">National Fresh Fruit</a></div>
                                                            <div class="price">
                                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                            </div>
                                                            <div class="qty">
                                                                <label for="cart[id124][qty]">Qty:</label>
                                                                <input type="number" class="input-qty" name="cart[id124][qty]" id="cart[id124][qty]" value="1" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="minicart-item">
                                                        <div class="thumb">
                                                            <a href="#"><img src="{{asset('assets/images/minicart/pr-03.jpg')}}" width="90" height="90" alt="National Fresh"></a>
                                                        </div>
                                                        <div class="left-info">
                                                            <div class="product-title"><a href="#" class="product-name">National Fresh Fruit</a></div>
                                                            <div class="price">
                                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                            </div>
                                                            <div class="qty">
                                                                <label for="cart[id125][qty]">Qty:</label>
                                                                <input type="number" class="input-qty" name="cart[id125][qty]" id="cart[id125][qty]" value="1" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="minicart-item">
                                                        <div class="thumb">
                                                            <a href="#"><img src="{{asset('assets/images/minicart/pr-04.jpg9')}}" width="90" height="90" alt="National Fresh"></a>
                                                        </div>
                                                        <div class="left-info">
                                                            <div class="product-title"><a href="#" class="product-name">National Fresh Fruit</a></div>
                                                            <div class="price">
                                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                            </div>
                                                            <div class="qty">
                                                                <label for="cart[id126][qty]">Qty:</label>
                                                                <input type="number" class="input-qty" name="cart[id126][qty]" id="cart[id126][qty]" value="1" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="minicart-item">
                                                        <div class="thumb">
                                                            <a href="#"><img src="assets/images/minicart/pr-05.jpg" width="90" height="90" alt="National Fresh"></a>
                                                        </div>
                                                        <div class="left-info">
                                                            <div class="product-title"><a href="#" class="product-name">National Fresh Fruit</a></div>
                                                            <div class="price">
                                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                            </div>
                                                            <div class="qty">
                                                                <label for="cart[id127][qty]">Qty:</label>
                                                                <input type="number" class="input-qty" name="cart[id127][qty]" id="cart[id127][qty]" value="1" disabled>
                                                            </div>
                                                        </div>
                                                        <div class="action">
                                                            <a href="#" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            <a href="#" class="remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <p class="btn-control">
                                                <a href="#" class="btn view-cart">view cart</a>
                                                <a href="#" class="btn">checkout</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mobile-menu-toggle">
                                <a class="btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom hidden-sm hidden-xs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="vertical-menu vertical-category-block">
                            <div class="block-title">
                                <span class="menu-icon">
                                    <span class="line-1"></span>
                                    <span class="line-2"></span>
                                    <span class="line-3"></span>
                                </span>
                                <span class="menu-title">All departments</span>
                                <span class="angle" data-tgleclass="fa fa-caret-down"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                            </div>
                            <div class="wrap-menu">
                                <ul class="menu clone-main-menu">
                                    <li class="menu-item menu-item-has-children has-megamenu">
                                        <a href="#" class="menu-name" data-title="Fruit & Nut Gifts"><i class="biolife-icon icon-fruits"></i>Fruit & Nut Gifts</a>
                                        <div class="wrap-megamenu lg-width-900 md-width-640">
                                            <div class="mega-content">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-sm-12 xs-margin-bottom-25 md-margin-bottom-0">
                                                        <div class="wrap-custom-menu vertical-menu">
                                                            <h4 class="menu-title">Fresh Fuits</h4>
                                                            <ul class="menu">
                                                                <li><a href="#">Fruit & Nut Gifts</a></li>
                                                                <li><a href="#">Mixed Fruits</a></li>
                                                                <li><a href="#">Oranges</a></li>
                                                                <li><a href="#">Bananas & Plantains</a></li>
                                                                <li><a href="#">Fresh Gala Apples</a></li>
                                                                <li><a href="#">Berries</a></li>
                                                                <li><a href="#">Pears</a></li>
                                                                <li><a href="#">Produce</a></li>
                                                                <li><a href="#">Snack Foods</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-12 lg-padding-left-23 xs-margin-bottom-25 md-margin-bottom-0">
                                                        <div class="wrap-custom-menu vertical-menu">
                                                            <h4 class="menu-title">Nut Gifts</h4>
                                                            <ul class="menu">
                                                                <li><a href="#">Non-Dairy Coffee Creamers</a></li>
                                                                <li><a href="#">Coffee Creamers</a></li>
                                                                <li><a href="#">Mayonnaise</a></li>
                                                                <li><a href="#">Almond Milk</a></li>
                                                                <li><a href="#">Ghee</a></li>
                                                                <li><a href="#">Beverages</a></li>
                                                                <li><a href="#">Ranch Salad Dressings</a></li>
                                                                <li><a href="#">Hemp Milk</a></li>
                                                                <li><a href="#">Nuts & Seeds</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm-12 lg-padding-left-50 xs-margin-bottom-25 md-margin-bottom-0">
                                                        <div class="biolife-products-block max-width-270">
                                                            <h4 class="menu-title">Bestseller Products</h4>
                                                            <ul class="products-list default-product-style biolife-carousel nav-none-after-1k2 nav-center" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":30,"slidesToShow":1, "responsive":[{"breakpoint":767, "settings":{ "arrows": false}}]}' >
                                                                <li class="product-item">
                                                                    <div class="contain-product none-overlay">
                                                                        <div class="product-thumb">
                                                                            <a href="#" class="link-to-product">
                                                                                <img src="assets/images/products/p-08.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                                                            </a>
                                                                        </div>
                                                                        <div class="info">
                                                                            <b class="categories">Fresh Fruit</b>
                                                                            <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                                            <div class="price">
                                                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="product-item">
                                                                    <div class="contain-product none-overlay">
                                                                        <div class="product-thumb">
                                                                            <a href="#" class="link-to-product">
                                                                                <img src="assets/images/products/p-11.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                                                            </a>
                                                                        </div>
                                                                        <div class="info">
                                                                            <b class="categories">Fresh Fruit</b>
                                                                            <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                                            <div class="price">
                                                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="product-item">
                                                                    <div class="contain-product none-overlay">
                                                                        <div class="product-thumb">
                                                                            <a href="#" class="link-to-product">
                                                                                <img src="{{asset('assets/images/products/p-15.jpg')}}" alt="dd" width="270" height="270" class="product-thumnail">
                                                                            </a>
                                                                        </div>
                                                                        <div class="info">
                                                                            <b class="categories">Fresh Fruit</b>
                                                                            <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                                                            <div class="price">
                                                                                <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                                                                <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 md-margin-top-9">
                                                        <div class="biolife-brand" >
                                                            <ul class="brands">
                                                                <li><a href="#"><img src="{{asset('assets/images/megamenu/brand-organic.')}}'" width="161" height="136" alt="organic"></a></li>
                                                                <li><a href="#"><img src="{{asset('assets/images/megamenu/brand-explore.')}}'" width="160" height="136" alt="explore"></a></li>
                                                                <li><a href="#"><img src="{{asset('assets/images/megamenu/brand-organic-2.png')}}" width="99" height="136" alt="organic 2"></a></li>
                                                                <li><a href="#"><img src="{{asset('assets/images/megamenu/brand-eco-teas.png')}}" width="164"  height="136" alt="eco teas"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-has-children has-megamenu">
                                        <a href="#" class="menu-name" data-title="Vegetables"><i class="biolife-icon icon-broccoli-1"></i>Vegetables</a>
                                        <div class="wrap-megamenu lg-width-900 md-width-640 background-mega-01">
                                            <div class="mega-content">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-sm-12 xs-margin-bottom-25 md-margin-bottom-0">
                                                        <div class="wrap-custom-menu vertical-menu">
                                                            <h4 class="menu-title">Vegetables</h4>
                                                            <ul class="menu">
                                                                <li><a href="#">Fruit & Nut Gifts</a></li>
                                                                <li><a href="#">Mixed Fruits</a></li>
                                                                <li><a href="#">Oranges</a></li>
                                                                <li><a href="#">Bananas & Plantains</a></li>
                                                                <li><a href="#">Fresh Gala Apples</a></li>
                                                                <li><a href="#">Berries</a></li>
                                                                <li><a href="#">Pears</a></li>
                                                                <li><a href="#">Produce</a></li>
                                                                <li><a href="#">Snack Foods</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-4 col-sm-12 lg-padding-left-23 xs-margin-bottom-25 md-margin-bottom-0">
                                                        <div class="wrap-custom-menu vertical-menu">
                                                            <h4 class="menu-title">Gifts</h4>
                                                            <ul class="menu">
                                                                <li><a href="#">Non-Dairy Coffee Creamers</a></li>
                                                                <li><a href="#">Coffee Creamers</a></li>
                                                                <li><a href="#">Mayonnaise</a></li>
                                                                <li><a href="#">Almond Milk</a></li>
                                                                <li><a href="#">Ghee</a></li>
                                                                <li><a href="#">Beverages</a></li>
                                                                <li><a href="#">Ranch Salad Dressings</a></li>
                                                                <li><a href="#">Hemp Milk</a></li>
                                                                <li><a href="#">Nuts & Seeds</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 col-md-4 col-sm-12 lg-padding-left-57 md-margin-bottom-30">
                                                        <div class="biolife-brand vertical md-boder-left-30">
                                                            <h4 class="menu-title">Hot Brand</h4>
                                                            <ul class="brands">
                                                                <li><a href="#"><img src="assets/images/megamenu/v-brand-organic.png" width="167" height="74" alt="organic"></a></li>
                                                                <li><a href="#"><img src="assets/images/megamenu/v-brand-explore.png" width="167" height="72" alt="explore"></a></li>
                                                                <li><a href="#"><img src="assets/images/megamenu/v-brand-organic-2.png" width="167" height="99" alt="organic 2"></a></li>
                                                                <li><a href="#"><img src="assets/images/megamenu/v-brand-eco-teas.png" width="167" height="67" alt="eco teas"></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item menu-item-has-children has-megamenu">
                                        <a href="#" class="menu-name" data-title="Fresh Berries"><i class="biolife-icon icon-grape"></i>Fresh Berries</a>
                                        <div class="wrap-megamenu lg-width-900 md-width-640 background-mega-02">
                                            <div class="mega-content">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 sm-col-12 md-margin-bottom-83 xs-margin-bottom-25">
                                                        <div class="wrap-custom-menu vertical-menu">
                                                            <h4 class="menu-title">Fresh Berries</h4>
                                                            <ul class="menu">
                                                                <li><a href="#">Fruit & Nut Gifts</a></li>
                                                                <li><a href="#">Mixed Fruits</a></li>
                                                                <li><a href="#">Oranges</a></li>
                                                                <li><a href="#">Bananas & Plantains</a></li>
                                                                <li><a href="#">Fresh Gala Apples</a></li>
                                                                <li><a href="#">Berries</a></li>
                                                                <li><a href="#">Pears</a></li>
                                                                <li><a href="#">Produce</a></li>
                                                                <li><a href="#">Snack Foods</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 sm-col-12 lg-padding-left-23 xs-margin-bottom-36px md-margin-bottom-0">
                                                        <div class="wrap-custom-menu vertical-menu">
                                                            <h4 class="menu-title">Gifts</h4>
                                                            <ul class="menu">
                                                                <li><a href="#">Non-Dairy Coffee Creamers</a></li>
                                                                <li><a href="#">Coffee Creamers</a></li>
                                                                <li><a href="#">Mayonnaise</a></li>
                                                                <li><a href="#">Almond Milk</a></li>
                                                                <li><a href="#">Ghee</a></li>
                                                                <li><a href="#">Beverages</a></li>
                                                                <li><a href="#">Ranch Salad Dressings</a></li>
                                                                <li><a href="#">Hemp Milk</a></li>
                                                                <li><a href="#">Nuts & Seeds</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 sm-col-12 lg-padding-left-25 md-padding-top-55">
                                                        <div class="biolife-banner layout-01">
                                                            <h3 class="top-title">Farm Fresh</h3>
                                                            <p class="content"> All the Lorem Ipsum generators on the Internet tend.</p>
                                                            <b class="bottomm-title">Berries Series</b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="menu-item"><a href="#" class="menu-name" data-title="Ocean Foods"><i class="biolife-icon icon-fish"></i>Ocean Foods</a></li>
                                    <li class="menu-item menu-item-has-children has-child">
                                        <a href="#" class="menu-name" data-title="Butter & Eggs"><i class="biolife-icon icon-honey"></i>Butter & Eggs</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="#">Omelettes</a></li>
                                            <li class="menu-item"><a href="#">Breakfast Scrambles</a></li>
                                            <li class="menu-item menu-item-has-children has-child"><a href="#" class="menu-name" data-title="Eggs & other considerations">Eggs & other considerations</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="#">Classic Breakfast</a></li>
                                                    <li class="menu-item"><a href="#">Huevos Rancheros</a></li>
                                                    <li class="menu-item"><a href="#">Everything Egg Sandwich</a></li>
                                                    <li class="menu-item"><a href="#">Egg Sandwich</a></li>
                                                    <li class="menu-item"><a href="#">Vegan Burrito</a></li>
                                                    <li class="menu-item"><a href="#">Biscuits and Gravy</a></li>
                                                    <li class="menu-item"><a href="#">Bacon Avo Egg Sandwich</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item"><a href="#">Griddle</a></li>
                                            <li class="menu-item menu-item-has-children has-child"><a href="#" class="menu-name" data-title="Sides & Extras">Sides & Extras</a>
                                                <ul class="sub-menu">
                                                    <li class="menu-item"><a href="#">Breakfast Burrito</a></li>
                                                    <li class="menu-item"><a href="#">Crab Cake Benedict</a></li>
                                                    <li class="menu-item"><a href="#">Corned Beef Hash</a></li>
                                                    <li class="menu-item"><a href="#">Steak & Eggs</a></li>
                                                    <li class="menu-item"><a href="#">Oatmeal</a></li>
                                                    <li class="menu-item"><a href="#">Fruit & Yogurt Parfait</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item"><a href="#">Biscuits</a></li>
                                            <li class="menu-item"><a href="#">Seasonal Fruit Plate</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-fast-food"></i>Fastfood</a></li>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-beef"></i>Fresh Meat</a></li>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-onions"></i>Fresh Onion</a></li>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-avocado"></i>Papaya & Crisps</a></li>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-contain"></i>Oatmeal</a></li>
                                    <li class="menu-item"><a href="#" class="menu-title"><i class="biolife-icon icon-fresh-juice"></i>Fresh Bananas & Plantains</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 padding-top-2px">
                        <div class="header-search-bar layout-01">
                            <form action="#" class="form-search" name="desktop-seacrh" method="get">
                                <input type="text" name="s" class="input-text" value="" placeholder="Search here...">
                                <select name="category">
                                    <option value="-1" selected>All Categories</option>
                                    <option value="vegetables">Vegetables</option>
                                    <option value="fresh_berries">Fresh Berries</option>
                                    <option value="ocean_foods">Ocean Foods</option>
                                    <option value="butter_eggs">Butter & Eggs</option>
                                    <option value="fastfood">Fastfood</option>
                                    <option value="fresh_meat">Fresh Meat</option>
                                    <option value="fresh_onion">Fresh Onion</option>
                                    <option value="papaya_crisps">Papaya & Crisps</option>
                                    <option value="oatmeal">Oatmeal</option>
                                </select>
                                <button type="submit" class="btn-submit"><i class="biolife-icon icon-search"></i></button>
                            </form>
                        </div>
                        <div class="live-info">
                            <p class="telephone"><i class="fa fa-phone" aria-hidden="true"></i><b class="phone-number">(+900) 123 456 7891</b></p>
                            <p class="working-time">Mon-Fri: 8:30am-7:30pm; Sat-Sun: 9:30am-4:30pm</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!--Hero Section-->
    <div class="hero-section hero-background">
        <h1 class="page-title">Organic Fruits</h1>
    </div>

    <!--Navigation section-->
    <div class="container">
        <nav class="biolife-nav">
            <ul>
                <li class="nav-item"><a href="index-2.html" class="permal-link">Home</a></li>
                <li class="nav-item"><a href="#" class="permal-link">Natural Organic</a></li>
                <li class="nav-item"><span class="current-page">Fresh Fruit</span></li>
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
                            <li><img src="{{asset('assets/images/details-product/detail_01.jpg')}}" alt="" width="500" height="500"></li>
                            <li><img src="{{asset('assets/images/details-product/detail_02.jpg')}}" alt="" width="500" height="500"></li>
                            <li><img src="{{asset('assets/images/details-product/detail_03.jpg')}}" alt="" width="500" height="500"></li>
                            <li><img src="{{asset('assets/images/details-product/detail_04.jpg')}}" alt="" width="500" height="500"></li>
                            <li><img src="{{asset('assets/images/details-product/detail_05.jpg')}}" alt="" width="500" height="500"></li>
                            <li><img src="{{asset('assets/images/details-product/detail_06.jpg')}}" alt="" width="500" height="500"></li>
                            <li><img src="{{asset('assets/images/details-product/detail_07.jpg')}}" alt="" width="500" height="500"></li>
                        </ul>
                        <ul class="biolife-carousel slider-nav" data-slick='{"arrows":false,"dots":false,"centerMode":false,"focusOnSelect":true,"slidesMargin":10,"slidesToShow":4,"slidesToScroll":1,"asNavFor":".slider-for"}'>
                            <li><img src="{{asset('assets/images/details-product/thumb_01.jpg')}}" alt="" width="88" height="88"></li>
                            <li><img src="{{asset('assets/images/details-product/thumb_02.jpg')}}" alt="" width="88" height="88"></li>
                            <li><img src="{{asset('assets/images/details-product/thumb_03.jpg')}}" alt="" width="88" height="88"></li>
                            <li><img src="{{asset('assets/images/details-product/thumb_04.jpg')}}" alt="" width="88" height="88"></li>
                            <li><img src="{{asset('assets/images/details-product/thumb_05.jpg')}}" alt="" width="88" height="88"></li>
                            <li><img src="{{asset('assets/images/details-product/thumb_06.jpg')}}" alt="" width="88" height="88"></li>
                            <li><img src="{{asset('assets/images/details-product/thumb_07.jpg')}}" alt="" width="88" height="88"></li>
                        </ul>
                    </div>
                    <div class="product-attribute">
                        <h3 class="title">Organic 10 Assorted Flavors Jelly Beans, 5.5 Oz</h3>
                        <div class="rating">
                            <p class="star-rating"><span class="width-80percent"></span></p>
                            <span class="review-count">(04 Reviews)</span>
                            <span class="qa-text">Q&A</span>
                            <b class="category">By: Natural food</b>
                        </div>
                        <span class="sku">Sku: #76584HH</span>
                        <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vel maximus lacus. Duis ut mauris eget justo dictum tempus sed vel tellus.</p>
                        <div class="price">
                            <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                            <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                        </div>
                        <div class="product-atts">
                            <div class="atts-item">
                                <span class="title">Color:</span>
                                <ul class="color-list">
                                    <li class="color-item"><a href="#" class="c-link"><span class="symbol img-color"></span>Multi</a></li>
                                    <li class="color-item"><a href="#" class="c-link"><span class="symbol hex-code color-01"></span>Red</a></li>
                                    <li class="color-item"><a href="#" class="c-link"><span class="symbol hex-code color-02"></span>Orrange</a></li>
                                    <li class="color-item"><a href="#" class="c-link"><span class="symbol hex-code color-03"></span>Other</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="shipping-info">
                            <p class="shipping-day">3-Day Shipping</p>
                            <p class="for-today">Pree Pickup Today</p>
                        </div>
                    </div>
                    <div class="action-form">
                        <div class="quantity-box">
                            <span class="title">Quantity:</span>
                            <div class="qty-input">
                                <input type="text" name="qty12554" value="1" data-max_value="20" data-min_value="1" data-step="1">
                                <a href="#" class="qty-btn btn-up"><i class="fa fa-caret-up" aria-hidden="true"></i></a>
                                <a href="#" class="qty-btn btn-down"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="total-price-contain">
                            <span class="title">Total Price:</span>
                            <p class="price">£199.99</p>
                        </div>
                        <div class="buttons">
                            <a href="#" class="btn add-to-cart-btn">add to cart</a>
                            <p class="pull-row">
                                <a href="#" class="btn wishlist-btn">wishlist</a>
                                <a href="#" class="btn compare-btn">compare</a>
                            </p>
                        </div>
                        <div class="location-shipping-to">
                            <span class="title">Ship to:</span>
                            <select name="shipping_to" class="country">
                                <option value="-1">Select Country</option>
                                <option value="america">America</option>
                                <option value="france">France</option>
                                <option value="germany">Germany</option>
                                <option value="japan">Japan</option>
                            </select>
                        </div>
                        <div class="social-media">
                            <ul class="social-list">
                                <li><a href="#" class="social-link"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                                <li><a href="#" class="social-link"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="acepted-payment-methods">
                            <ul class="payment-methods">
                                <li><img src="assets/images/card1.jpg" alt="" width="51" height="36"></li>
                                <li><img src="assets/images/card2.jpg" alt="" width="51" height="36"></li>
                                <li><img src="assets/images/card3.jpg" alt="" width="51" height="36"></li>
                                <li><img src="assets/images/card4.jpg" alt="" width="51" height="36"></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Tab info -->
                <div class="product-tabs single-layout biolife-tab-contain">
                    <div class="tab-head">
                        <ul class="tabs">
                            <li class="tab-element active"><a href="#tab_1st" class="tab-link">Products Descriptions</a></li>
                            <li class="tab-element" ><a href="#tab_2nd" class="tab-link">Addtional information</a></li>
                            <li class="tab-element" ><a href="#tab_3rd" class="tab-link">Shipping & Delivery</a></li>
                            <li class="tab-element" ><a href="#tab_4th" class="tab-link">Customer Reviews <sup>(3)</sup></a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div id="tab_1st" class="tab-contain desc-tab active">
                            <p class="desc">Quisque quis ipsum venenatis, fermentum ante volutpat, ornare enim. Phasellus molestie risus non aliquet cursus. Integer vestibulum mi lorem, id hendrerit ante lobortis non. Nunc ante ante, lobortis non pretium non, vulputate vel nisi. Maecenas dolor elit, fringilla nec turpis ac, auctor vulputate nulla. Phasellus sed laoreet velit.
                                Proin fringilla urna vel mattis euismod. Etiam sodales, massa non tincidunt iaculis, mauris libero scelerisque justo, ut rutrum lectus urna sit amet quam. Nulla maximus vestibulum mi vitae accumsan. Donec sit amet ligula et enim semper viverra a in arcu. Vestibulum enim ligula, varius sed enim vitae, posuere molestie velit. Morbi risus orci, congue in nulla at, sodales fermentum magna.</p>
                            <div class="desc-expand">
                                <span class="title">Organic Fresh Fruit</span>
                                <ul class="list">
                                    <li>100% real fruit ingredients</li>
                                    <li>100 fresh fruit bags individually wrapped</li>
                                    <li>Blending Eastern & Western traditions, naturally</li>
                                </ul>
                            </div>
                        </div>
                        <div id="tab_2nd" class="tab-contain addtional-info-tab">
                            <table class="tbl_attributes">
                                <tbody>
                                <tr>
                                    <th>Color</th>
                                    <td><p>Black, Blue, Purple, Red, Yellow</p></td>
                                </tr>
                                <tr>
                                    <th>Size</th>
                                    <td><p>S, M, L</p></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div id="tab_3rd" class="tab-contain shipping-delivery-tab">
                            <div class="accodition-tab biolife-accodition">
                                <ul class="tabs">
                                    <li class="tab-item">
                                        <span class="title btn-expand">How long will it take to receive my order?</span>
                                        <div class="content">
                                            <p>Orders placed before 3pm eastern time will normally be processed and shipped by the following business day. For orders received after 3pm, they will generally be processed and shipped on the second business day. For example if you place your order after 3pm on Monday the order will ship on Wednesday. Business days do not include Saturday and Sunday and all Holidays. Please allow additional processing time if you order is placed on a weekend or holiday. Once an order is processed, speed of delivery will be determined as follows based on the shipping mode selected:</p>
                                            <div class="desc-expand">
                                                <span class="title">Shipping mode</span>
                                                <ul class="list">
                                                    <li>Standard (in transit 3-5 business days)</li>
                                                    <li>Priority (in transit 2-3 business days)</li>
                                                    <li>Express (in transit 1-2 business days)</li>
                                                    <li>Gift Card Orders are shipped via USPS First Class Mail. First Class mail will be delivered within 8 business days</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="tab-item">
                                        <span class="title btn-expand">How is the shipping cost calculated?</span>
                                        <div class="content">
                                            <p>You will pay a shipping rate based on the weight and size of the order. Large or heavy items may include an oversized handling fee. Total shipping fees are shown in your shopping cart. Please refer to the following shipping table:</p>
                                            <p>Note: Shipping weight calculated in cart may differ from weights listed on product pages due to size and actual weight of the item.</p>
                                        </div>
                                    </li>
                                    <li class="tab-item">
                                        <span class="title btn-expand">Why Didn’t My Order Qualify for FREE shipping?</span>
                                        <div class="content">
                                            <p>We do not deliver to P.O. boxes or military (APO, FPO, PSC) boxes. We deliver to all 50 states plus Puerto Rico. Certain items may be excluded for delivery to Puerto Rico. This will be indicated on the product page.</p>
                                        </div>
                                    </li>
                                    <li class="tab-item">
                                        <span class="title btn-expand">Shipping Restrictions?</span>
                                        <div class="content">
                                            <p>We do not deliver to P.O. boxes or military (APO, FPO, PSC) boxes. We deliver to all 50 states plus Puerto Rico. Certain items may be excluded for delivery to Puerto Rico. This will be indicated on the product page.</p>
                                        </div>
                                    </li>
                                    <li class="tab-item">
                                        <span class="title btn-expand">Undeliverable Packages?</span>
                                        <div class="content">
                                            <p>Occasionally packages are returned to us as undeliverable by the carrier. When the carrier returns an undeliverable package to us, we will cancel the order and refund the purchase price less the shipping charges. Here are a few reasons packages may be returned to us as undeliverable:</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="tab_4th" class="tab-contain review-tab">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                        <div class="rating-info">
                                            <p class="index"><strong class="rating">4.4</strong>out of 5</p>
                                            <div class="rating"><p class="star-rating"><span class="width-80percent"></span></p></div>
                                            <p class="see-all">See all 68 reviews</p>
                                            <ul class="options">
                                                <li>
                                                    <div class="detail-for">
                                                        <span class="option-name">5stars</span>
                                                        <span class="progres">
                                                            <span class="line-100percent"><span class="percent width-90percent"></span></span>
                                                        </span>
                                                        <span class="number">90</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="detail-for">
                                                        <span class="option-name">4stars</span>
                                                        <span class="progres">
                                                            <span class="line-100percent"><span class="percent width-30percent"></span></span>
                                                        </span>
                                                        <span class="number">30</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="detail-for">
                                                        <span class="option-name">3stars</span>
                                                        <span class="progres">
                                                            <span class="line-100percent"><span class="percent width-40percent"></span></span>
                                                        </span>
                                                        <span class="number">40</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="detail-for">
                                                        <span class="option-name">2stars</span>
                                                        <span class="progres">
                                                            <span class="line-100percent"><span class="percent width-20percent"></span></span>
                                                        </span>
                                                        <span class="number">20</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="detail-for">
                                                        <span class="option-name">1star</span>
                                                        <span class="progres">
                                                            <span class="line-100percent"><span class="percent width-10percent"></span></span>
                                                        </span>
                                                        <span class="number">10</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                                        <div class="review-form-wrapper">
                                            <span class="title">Submit your review</span>
                                            <form action="#" name="frm-review" method="post">
                                                <div class="comment-form-rating">
                                                    <label>1. Your rating of this products:</label>
                                                    <p class="stars">
                                                        <span>
                                                            <a class="btn-rating" data-value="star-1" href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                            <a class="btn-rating" data-value="star-2" href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                            <a class="btn-rating" data-value="star-3" href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                            <a class="btn-rating" data-value="star-4" href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                            <a class="btn-rating" data-value="star-5" href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                                        </span>
                                                    </p>
                                                </div>
                                                <p class="form-row wide-half">
                                                    <input type="text" name="name" value="" placeholder="Your name">
                                                </p>
                                                <p class="form-row wide-half">
                                                    <input type="email" name="email" value="" placeholder="Email address">
                                                </p>
                                                <p class="form-row">
                                                    <textarea name="comment" id="txt-comment" cols="30" rows="10" placeholder="Write your review here..."></textarea>
                                                </p>
                                                <p class="form-row">
                                                    <button type="submit" name="submit">submit review</button>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div id="comments">
                                    <ol class="commentlist">
                                        <li class="review">
                                            <div class="comment-container">
                                                <div class="row">
                                                    <div class="comment-content col-lg-8 col-md-9 col-sm-8 col-xs-12">
                                                        <p class="comment-in"><span class="post-name">Quality is our way of life</span><span class="post-date">01/04/2018</span></p>
                                                        <div class="rating"><p class="star-rating"><span class="width-80percent"></span></p></div>
                                                        <p class="author">by: <b>Shop organic</b></p>
                                                        <p class="comment-text">There are few things in life that please people more than the succulence of quality fresh fruit and vegetables.  At Fresh Fruits we work to deliver the world’s freshest, choicest, and juiciest produce to discerning customers across the UAE and GCC.</p>
                                                    </div>
                                                    <div class="comment-review-form col-lg-3 col-lg-offset-1 col-md-3 col-sm-4 col-xs-12">
                                                        <span class="title">Was this review helpful?</span>
                                                        <ul class="actions">
                                                            <li><a href="#" class="btn-act like" data-type="like"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Yes (100)</a></li>
                                                            <li><a href="#" class="btn-act hate" data-type="dislike"><i class="fa fa-thumbs-down" aria-hidden="true"></i>No (20)</a></li>
                                                            <li><a href="#" class="btn-act report" data-type="dislike"><i class="fa fa-flag" aria-hidden="true"></i>Report</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="review">
                                            <div class="comment-container">
                                                <div class="row">
                                                    <div class="comment-content col-lg-8 col-md-9 col-sm-8 col-xs-12">
                                                        <p class="comment-in"><span class="post-name">Quality is our way of life</span><span class="post-date">01/04/2018</span></p>
                                                        <div class="rating"><p class="star-rating"><span class="width-80percent"></span></p></div>
                                                        <p class="author">by: <b>Shop organic</b></p>
                                                        <p class="comment-text">There are few things in life that please people more than the succulence of quality fresh fruit and vegetables.  At Fresh Fruits we work to deliver the world’s freshest, choicest, and juiciest produce to discerning customers across the UAE and GCC.</p>
                                                    </div>
                                                    <div class="comment-review-form col-lg-3 col-lg-offset-1 col-md-3 col-sm-4 col-xs-12">
                                                        <span class="title">Was this review helpful?</span>
                                                        <ul class="actions">
                                                            <li><a href="#" class="btn-act like" data-type="like"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Yes (100)</a></li>
                                                            <li><a href="#" class="btn-act hate" data-type="dislike"><i class="fa fa-thumbs-down" aria-hidden="true"></i>No (20)</a></li>
                                                            <li><a href="#" class="btn-act report" data-type="dislike"><i class="fa fa-flag" aria-hidden="true"></i>Report</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="review">
                                            <div class="comment-container">
                                                <div class="row">
                                                    <div class="comment-content col-lg-8 col-md-9 col-sm-8 col-xs-12">
                                                        <p class="comment-in"><span class="post-name">Quality is our way of life</span><span class="post-date">01/04/2018</span></p>
                                                        <div class="rating"><p class="star-rating"><span class="width-80percent"></span></p></div>
                                                        <p class="author">by: <b>Shop organic</b></p>
                                                        <p class="comment-text">There are few things in life that please people more than the succulence of quality fresh fruit and vegetables.  At Fresh Fruits we work to deliver the world’s freshest, choicest, and juiciest produce to discerning customers across the UAE and GCC.</p>
                                                    </div>
                                                    <div class="comment-review-form col-lg-3 col-lg-offset-1 col-md-3 col-sm-4 col-xs-12">
                                                        <span class="title">Was this review helpful?</span>
                                                        <ul class="actions">
                                                            <li><a href="#" class="btn-act like" data-type="like"><i class="fa fa-thumbs-up" aria-hidden="true"></i>Yes (100)</a></li>
                                                            <li><a href="#" class="btn-act hate" data-type="dislike"><i class="fa fa-thumbs-down" aria-hidden="true"></i>No (20)</a></li>
                                                            <li><a href="#" class="btn-act report" data-type="dislike"><i class="fa fa-flag" aria-hidden="true"></i>Report</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ol>
                                    <div class="biolife-panigations-block version-2">
                                        <ul class="panigation-contain">
                                            <li><span class="current-page">1</span></li>
                                            <li><a href="#" class="link-page">2</a></li>
                                            <li><a href="#" class="link-page">3</a></li>
                                            <li><span class="sep">....</span></li>
                                            <li><a href="#" class="link-page">20</a></li>
                                            <li><a href="#" class="link-page next"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                        </ul>
                                        <div class="result-count">
                                            <p class="txt-count"><b>1-5</b> of <b>126</b> reviews</p>
                                            <a href="#" class="link-to">See all<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- related products -->
                <div class="product-related-box single-layout">
                    <div class="biolife-title-box lg-margin-bottom-26px-im">
                        <span class="biolife-icon icon-organic"></span>
                        <span class="subtitle">All the best item for You</span>
                        <h3 class="main-title">Related Products</h3>
                    </div>
                    <ul class="products-list biolife-carousel nav-center-02 nav-none-on-mobile" data-slick='{"rows":1,"arrows":true,"dots":false,"infinite":false,"speed":400,"slidesMargin":0,"slidesToShow":5, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 4}},{"breakpoint":992, "settings":{ "slidesToShow": 3, "slidesMargin":20 }},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":10}}]}'>

                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-13.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-14.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-15.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-10.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-08.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-21.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="product-item">
                            <div class="contain-product layout-default">
                                <div class="product-thumb">
                                    <a href="#" class="link-to-product">
                                        <img src="assets/images/products/p-18.jpg" alt="dd" width="270" height="270" class="product-thumnail">
                                    </a>
                                </div>
                                <div class="info">
                                    <b class="categories">Fresh Fruit</b>
                                    <h4 class="product-title"><a href="#" class="pr-name">National Fresh Fruit</a></h4>
                                    <div class="price">
                                        <ins><span class="price-amount"><span class="currencySymbol">£</span>85.00</span></ins>
                                        <del><span class="price-amount"><span class="currencySymbol">£</span>95.00</span></del>
                                    </div>
                                    <div class="slide-down-box">
                                        <p class="message">All products are carefully selected to ensure food safety.</p>
                                        <div class="buttons">
                                            <a href="#" class="btn wishlist-btn"><i class="fa fa-heart" aria-hidden="true"></i></a>
                                            <a href="#" class="btn add-to-cart-btn"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>add to cart</a>
                                            <a href="#" class="btn compare-btn"><i class="fa fa-random" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>
                
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer id="footer" class="footer layout-03">
        <div class="footer-content background-footer-03">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-9">
                        <section class="footer-item">
                            <a href="#" class="logo footer-logo"><img src="assets/images/organic-3.png" alt="biolife logo" width="135" height="34"></a>
                            <div class="footer-phone-info">
                                <i class="biolife-icon icon-head-phone"></i>
                                <p class="r-info">
                                    <span>Got Questions ?</span>
                                    <span>(700)  9001-1909  (900) 689 -66</span>
                                </p>
                            </div>
                            <div class="newsletter-block layout-01">
                                <h4 class="title">Newsletter Signup</h4>
                                <div class="form-content">
                                    <form action="#" name="new-letter-foter">
                                        <input type="email" class="input-text email" value="" placeholder="Your email here...">
                                        <button type="submit" class="bnt-submit" name="ok">Sign up</button>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 md-margin-top-5px sm-margin-top-50px xs-margin-top-40px">
                        <section class="footer-item">
                            <h3 class="section-title">Useful Links</h3>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-xs-6">
                                    <div class="wrap-custom-menu vertical-menu-2">
                                        <ul class="menu">
                                            <li><a href="#">About Us</a></li>
                                            <li><a href="#">About Our Shop</a></li>
                                            <li><a href="#">Secure Shopping</a></li>
                                            <li><a href="#">Delivery infomation</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Our Sitemap</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-xs-6">
                                    <div class="wrap-custom-menu vertical-menu-2">
                                        <ul class="menu">
                                            <li><a href="#">Who We Are</a></li>
                                            <li><a href="#">Our Services</a></li>
                                            <li><a href="#">Projects</a></li>
                                            <li><a href="#">Contacts Us</a></li>
                                            <li><a href="#">Innovation</a></li>
                                            <li><a href="#">Testimonials</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 md-margin-top-5px sm-margin-top-50px xs-margin-top-40px">
                        <section class="footer-item">
                            <h3 class="section-title">Transport Offices</h3>
                            <div class="contact-info-block footer-layout xs-padding-top-10px">
                                <ul class="contact-lines">
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-location"></i>
                                            <b class="desc">7563 St. Vicent Place, Glasgow, Greater Newyork NH7689, UK </b>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-phone"></i>
                                            <b class="desc">Phone: (+067) 234 789  (+068) 222 888</b>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-letter"></i>
                                            <b class="desc">Email:  contact@company.com</b>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="info-item">
                                            <i class="biolife-icon icon-clock"></i>
                                            <b class="desc">Hours: 7 Days a week from 10:00 am</b>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="biolife-social inline">
                                <ul class="socials">
                                    <li><a href="#" title="twitter" class="socail-btn"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="facebook" class="socail-btn"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="pinterest" class="socail-btn"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="youtube" class="socail-btn"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="#" title="instagram" class="socail-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="separator sm-margin-top-70px xs-margin-top-40px"></div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                       <div class="copy-right-text"><p><a href="templateshub.net">Templates Hub</a></p></div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12">
                        <div class="payment-methods">
                            <ul>
                                <li><a href="#" class="payment-link"><img src="{{asset('assets/images/card1.jpg')}}" width="51" height="36" alt=""></a></li>
                                <li><a href="#" class="payment-link"><img src="{{asset('assets/images/card2.jpg')}}" width="51" height="36" alt=""></a></li>
                                <li><a href="#" class="payment-link"><img src="{{asset('assets/images/card3.jpg')}}" width="51" height="36" alt=""></a></li>
                                <li><a href="#" class="payment-link"><img src="{{asset('assets/images/card4.jpg')}}" width="51" height="36" alt=""></a></li>
                                <li><a href="#" class="payment-link"><img src="{{asset('assets/images/card5.jpg')}}" width="51" height="36" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Footer For Mobile-->
    <div class="mobile-footer">
        <div class="mobile-footer-inner">
            <div class="mobile-block block-menu-main">
                <a class="menu-bar menu-toggle btn-toggle" data-object="open-mobile-menu" href="javascript:void(0)">
                    <span class="fa fa-bars"></span>
                    <span class="text">Menu</span>
                </a>
            </div>
            <div class="mobile-block block-sidebar">
                <a class="menu-bar filter-toggle btn-toggle" data-object="open-mobile-filter" href="javascript:void(0)">
                    <i class="fa fa-sliders" aria-hidden="true"></i>
                    <span class="text">Sidebar</span>
                </a>
            </div>
            <div class="mobile-block block-minicart">
                <a class="link-to-cart" href="#">
                    <span class="fa fa-shopping-bag" aria-hidden="true"></span>
                    <span class="text">Cart</span>
                </a>
            </div>
            <div class="mobile-block block-global">
                <a class="menu-bar myaccount-toggle btn-toggle" data-object="global-panel-opened" href="javascript:void(0)">
                    <span class="fa fa-globe"></span>
                    <span class="text">Global</span>
                </a>
            </div>
        </div>
    </div>

    <div class="mobile-block-global">
        <div class="biolife-mobile-panels">
            <span class="biolife-current-panel-title">Global</span>
            <a class="biolife-close-btn" data-object="global-panel-opened" href="#">&times;</a>
        </div>
        <div class="block-global-contain">
            <div class="glb-item my-account">
                <b class="title">My Account</b>
                <ul class="list">
                    <li class="list-item"><a href="#">Login/register</a></li>
                    <li class="list-item"><a href="#">Wishlist <span class="index">(8)</span></a></li>
                    <li class="list-item"><a href="#">Checkout</a></li>
                </ul>
            </div>
            <div class="glb-item currency">
                <b class="title">Currency</b>
                <ul class="list">
                    <li class="list-item"><a href="#">€ EUR (Euro)</a></li>
                    <li class="list-item"><a href="#">$ USD (Dollar)</a></li>
                    <li class="list-item"><a href="#">£ GBP (Pound)</a></li>
                    <li class="list-item"><a href="#">¥ JPY (Yen)</a></li>
                </ul>
            </div>
            <div class="glb-item languages">
                <b class="title">Language</b>
                <ul class="list inline">
                    <li class="list-item"><a href="#"><img src="{{asset('assets/images/languages/us.')}}'" alt="flag" width="24" height="18"></a></li>
                    <li class="list-item"><a href="#"><img src="{{asset('assets/images/languages/fr.')}}'" alt="flag" width="24" height="18"></a></li>
                    <li class="list-item"><a href="#"><img src="{{asset('assets/images/languages/ger.jpg')}}" alt="flag" width="24" height="18"></a></li>
                    <li class="list-item"><a href="#"><img src="{{asset('assets/images/languages/jap.jpg')}}" alt="flag" width="24" height="18"></a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Scroll Top Button -->
    <a class="btn-scroll-top"><i class="biolife-icon icon-left-arrow"></i></a>

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