@extends('layouts.profile')

@section('title', 'Просмотр страницы')
@section('description', '')

@section('body')
	<section>
		<div class="container">
			@include('components.breadcrumbs')
		</div>
	</section>
    <main>
        <section>
            <div class="container">
                <a href="/profile/pages">К списку страниц</a>
                <h1>{{ $page->title }}</h1>
                <a href="/profile/pages/{{ $page->ID }}/edit">Редактировать</a>
                <article>{{ $page->content }}<article>
            </div>
        </section>
    </main>
@endsection
