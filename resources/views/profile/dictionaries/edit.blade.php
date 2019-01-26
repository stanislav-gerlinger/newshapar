@extends('layouts.profile')

@section('title', 'Редактирование страницы')
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
                <h1>Редактирование товара</h1>
                <form class="" action="/profile/pages/{{ $page->ID }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <input type="hidden" name="ID" value="{{ $page->ID }}">
                    
                    <button type="submit">Сохранить</button>

                    <input type="text" name="title" value="{{ $page->title }}" placeholder="Title">
                    <input type="text" name="name" value="{{ $page->name }}" placeholder="Name">
                    <input type="text" name="description" value="{{ $page->description }}" placeholder="Description">
                    <input type="text" name="content" value="{{ $page->content }}" placeholder="Content">
                    
                    <input type="text" name="page_title" value="{{ $page->page_title }}">
                    <input type="text" name="page_description" value="{{ $page->page_description }}">
                    <input type="text" name="page_keywords" value="{{ $page->page_keywords }}">

                    <button type="submit">Сохранить</button>
                    <a href="/profile/pages">Отменить</a>
                </form>
            </div>
        </section>
    </main>
@endsection
