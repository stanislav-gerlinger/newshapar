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
                <form action="/profile/pages" method="post">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}

                    <button type="submit">Сохранить</button>

                    <input type="text" name="title" value="" placeholder="Title">
                    <input type="text" name="name" value="" placeholder="Name">
                    <input type="text" name="description" value="" placeholder="Description">
                    <input type="text" name="content" value="" placeholder="Content">
                    
                    <input type="text" name="page_title" value="">
                    <input type="text" name="page_description" value="">
                    <input type="text" name="page_keywords" value="">

                    <button type="submit">Сохранить</button>
                    <a href="/profile/pages">Отменить</a>
                </form>
            </div>
        </section>
    </main>
@endsection
