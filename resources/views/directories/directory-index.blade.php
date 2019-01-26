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
			<h1>Справочник</h1>
			<main>
        <a href="{{ route('directories.create') }}">Создать</a>
        <br><br>
          <ul>
              @foreach ($directories as $key => $directory)
                  <li>
                      <a href="{{ route('directories.show', $directory->ID) }}">{{ $directory->title }}</a>
                      <a href="{{ route('directories.edit', $directory->ID) }}">Редактировать</a>
                      <form action="{{ route('directories.destroy', $directory->ID) }}" method="POST">
                          {{ method_field('DELETE') }}
                          {{ csrf_field() }}
                          <button>Удалить</button>
                      </form>
                  </li>
              @endforeach
          </ul>
      </main>
		</div>
	</section>
@endsection
