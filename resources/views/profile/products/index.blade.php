@extends('layouts.profile')

@section('title', 'Редактирование страниц')
@section('description', '')

@section('body')
	<section>
		<div class="container">
			<h1>Все товары</h1>
			<product-edit-index
				v-bind:initial_products="{{ $products }}"
			></product-edit-index>
		</div>
	</section>
@endsection
