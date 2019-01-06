@extends('layouts.main')

@section('title', $page->title)
@section('description', '')

@section('body')
	<section>
		<div class="container">
			@include('components.breadcrumbs')
		</div>
	</section>
	<section>
		<div class="container">
			<h1>{{ $page->title }}</h1>
			<main>{{ $page->content }}</main>
		</div>
	</section>
@endsection