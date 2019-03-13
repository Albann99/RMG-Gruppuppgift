@extends('layouts/app')

@section('content')
	<div class="container mt-3">
		<h1>All Categories</h1>

		<ol>
			@foreach ($categories as $category)
			<li><a href="/categories/{{ $category->id }}">{{ $category->name}}</a></li>
			@endforeach
		</ol>
		@endsection