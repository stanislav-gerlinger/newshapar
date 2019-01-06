@extends('layouts.main')

@section('title', $product->page_title)
@section('description', $product->page_description)

@section('body')
	<section>
		<div class="container">
			@include('components.breadcrumbs')
		</div>
	</section>
	<section>
		<div class="container">
			<h1>{{ $product->title }}</h1>
			<main>{{ $product->description }}</main>
		</div>
	</section>
@endsection