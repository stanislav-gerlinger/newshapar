<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="full-height flex-center position-ref">
    	<header>
    		<div class="container">
		        <ul class="menu">
		            <li><a href="/profile">Главная</a></li>
		            <li><a href="/profile/posts">Посты</a></li>
		            <li><a href="/profile/products">Товары</a></li>
		            <li><a href="/profile/yarn">Пряжа</a></li>
		            <li><a href="/profile/pages">Страницы</a></li>
		            <li><a href="/profile/dictionaries">Справочники</a></li>
		        </ul>
	        </div>
    	</header>
		
		<main id="app">
			@yield('body')
		</main>
		
		<footer>
    		<div class="container">
		        <ul class="menu">
		            <li><a href="/">Главная</a></li>
		        </ul>
	        </div>
		</footer>
    </body>
</html>
