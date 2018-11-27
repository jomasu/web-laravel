<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="{{ asset('img/home/favicon.png') }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>T fire - @yield('title')</title> 
	
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



	<header id="header"><!--header-->

			<div>
				@include('layouts.menutop')
				@include('layouts.navmiddle')
				@include('layouts.nav')
				
			</div>

	</header><!--/header-->

		@show

		<div>
		
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