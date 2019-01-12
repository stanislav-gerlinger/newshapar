@extends('layouts.profile')

@section('title', 'Редактирование страниц')
@section('description', '')

@section('body')
	<section>
		<div class="container">
			@include('components.breadcrumbs')
		</div>
	</section>
	<section>
		<div class="container">
			<h1>Все страницы</h1>
			<main>
                <a href="/profile/pages/create">Новая страница</a>
                <?foreach($pages as $page){?>
                <div>
                    <span><?=$page->title?></span>  
                    <a href="/profile/pages/{{ $page->ID }}">Просмотр</a>
                    <a href="/profile/pages/{{ $page->ID }}/edit">Редактирование</a>
                </div>
                <?}?>
            </main>
		</div>
	</section>
@endsection
