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
			<h1>Список товаров</h1>
			<main>
        <form class="" action="" method="post">
          {{ csrf_field() }}
          <input type="text" name="qwe" value="">
          <button type="submit" name="button">ok</button>
        </form>
      </main>
		</div>
	</section>
@endsection
