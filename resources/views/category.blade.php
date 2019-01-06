@extends('layouts.main')

@section('title', $category->page_title)
@section('description', $category->page_description)

@section('body')
	<section>
		<div class="container">
			@include('components.breadcrumbs')
		</div>
	</section>
	<section>
		<div class="container">
			<h1>{{ $category->title }}</h1>
			<main>{{ $category->content }}</main>
		</div>
	</section>
@endsection