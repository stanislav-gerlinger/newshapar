<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link href="/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body class="full-height flex-center position-ref">
    	<header>
    		<div class="container">
		        <ul class="menu">
		            <li><a href="/">Главная</a></li>
		        </ul>
	        </div>
    	</header>
		
		<section>
			@yield('body')
		</section>
		
		<footer>
    		<div class="container">
		        <ul class="menu">
		            <li><a href="/">Главная</a></li>
		        </ul>
	        </div>
		</footer>
    </body>
</html>
