<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <meta name="description" content="@yield('description')" />

        <link href="/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body class="full-height flex-center position-ref">
    	@include('components.header')

		@yield('body')
		
		@include('components.footer')
    </body>
</html>
