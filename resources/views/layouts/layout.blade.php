<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>App Name - @yield('title')</title> 

    <!-- code CSS-->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<!--<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">-->
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/price-range.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
	<script src="{{ asset('js/app.js') }}" defer></script>

    
    
</head>
<body>
@section('header')
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> 0800 333 2425</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@tfire.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fab fa-facebook"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.html"><img src="{{ asset('img/home/tfire.png') }} " alt="" /></a>
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-user"></i> Nosotros</a></li>
								<li><a href=""><i class="fa fa-star"></i> Mi lista</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Salir</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Carrito</a></li>

							  @if (Route::has('login'))
								  @auth
								<li class="dropdown"><a ><i class="fa fa-lock"></i> Bienvenido <span class="name-user">{{ Auth::user()->name }}</span></a>
								<ul role="menu" class="sub-menu">
										<li ><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
								</li>
									</ul>
								</li>
								 @else
								 <li><a href="{{ route('login') }}">Login</a></li>
								 @endauth
							@endif

							


							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.html" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Productos</a></li>
										<li><a href="product-details.html">Detalles de productos</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Carrito</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<!--<li><a href="404.html">404</a></li>-->
								<li><a href="contact-us.html">Sucursales</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Buscar"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
    </header><!--/header-->

    @show

    <div class="container">
            @yield('content')
    </div>

    <div>
        @yield('body')
    </div>

    <div>
        @yield('footer')
    </div>    
    


<!-- code javascript-->

<script src="{{ asset('js/jquery.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
<script src="{{ asset('js/jquery.scrollUp.min.js') }}" defer></script>
<script src="{{ asset('js/price-range.js') }}" defer></script>
<script src="{{ asset('js/jquery.prettyPhoto.js') }}" defer></script>
<script src="{{ asset('js/main.js') }}" defer></script>
<script src="{{ asset('js/preview.js') }}" defer></script>


</body>
</html>