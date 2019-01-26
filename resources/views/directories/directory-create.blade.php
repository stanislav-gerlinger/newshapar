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
                <h1>Создание</h1>
                <form action="/profile/directories" method="post">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}

										<input type="text" name="title" value="" placeholder="Title">
										<input type="text" name="code" value="" placeholder="Code">


                    <button type="submit">Сохранить</button>
                    <a href="/profile/directories">Отменить</a>
                </form>
            </div>
        </section>
    </main>
@endsection
