@extends('layouts.profile')

@section('title', 'Справочник')
@section('description', '')

@section('body')
	<section>
		<div class="container">
			@include('components.breadcrumbs')
		</div>
	</section>
	<section>
		<div class="container">
			<h1>Редактировать</h1>
			<main>
				<form class="" action="/profile/directories/{{ $directory->ID }}" method="post">
						{{ csrf_field() }}
						{{ method_field('PATCH') }}
						<input type="hidden" name="ID" value="{{ $directory->ID }}">

						<input type="text" name="title" value="{{ $directory->title }}" placeholder="Title">
						<input type="text" name="code" value="{{ $directory->code }}" placeholder="Code">

						<ul>
								@foreach ($options as $option)
										<li>
											<input type="text" name="options[{{ $option->ID }}][name]" value="{{ $option->name }}">
											<input type="text" name="options[{{ $option->ID }}][shortname]" value="{{ $option->shortname }}">
											<input type="text" name="options[{{ $option->ID }}][additional]" value="{{ $option->additional }}">
										</li>
								@endforeach
						</ul>


						<button type="submit">Сохранить</button>
						<a href="/profile/directories">Отменить</a>
				</form>
      </main>
		</div>
	</section>
@endsection
