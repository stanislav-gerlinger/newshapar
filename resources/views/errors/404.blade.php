@extends('layouts.main')

@section('title', 'Страница не найдена')
@section('description', '')

@section('body')
	<section>
		<div class="container">
			@include('components.breadcrumbs')
		</div>
	</section>
	<section>
		<div class="container">
			404

			@include('components.menu')
		</div>
	</section>
@endsection
