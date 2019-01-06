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
			<h1>Редактирование товара</h1>
			<main>
        <form class="" action="update" method="post">
					{{ csrf_field() }}
					{{ method_field('PUT') }}
          <input type="text" name="qwe" value="">
          <button type="submit" name="button">ok</button>
        </form>
      </main>
		</div>
	</section>
@endsection
