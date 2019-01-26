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
			<main>
					<h1>{{ $directory->title }}</h1>
					<a href="{{ route('directories.edit', $directory->ID) }}">Редактировать</a>
					<form action="{{ route('directories.destroy', $directory->ID) }}" method="POST">
							{{ method_field('DELETE') }}
							{{ csrf_field() }}
							<button>Удалить</button>
					</form>
					<br><br><br><br>

					<div>Параметры:</div>
					<br>
					<br>
					<ul>
							@foreach ($directory_elements as $directory_element)
									<li>
										<span>{{ $directory_element->name }}</span>
									</li>
							@endforeach
					</ul>

      </main>
		</div>
	</section>
@endsection
