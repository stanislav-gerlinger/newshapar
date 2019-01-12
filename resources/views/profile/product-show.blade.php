@extends('layouts.profile')

@section('title', 'qwe')
@section('description', 'qwerty')

@section('body')
	<section>
		<div class="container">
			@include('components.breadcrumbs')
		</div>
	</section>
	<section>
		<div class="container">
			<h1>{{ $page->title }}</h1>
			<a href="{{ $page->ID }}/edit">Редактировать</a>
			<main>
        {{ $page->content }}
      </main>
		</div>
	</section>
@endsection
