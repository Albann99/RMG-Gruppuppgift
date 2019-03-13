@extends('layouts/app')

@section('content')
	<div class="container mt-3">

		<h1>{{ $category->name }}</h1>
		<br>
		<h5>All Articles in {{ $category->name }} category</h5> 
		<ol>
			@foreach($articles as $article)
			<li><a href="/articles/{{$article->slug }}"> {{ $article->name }}</li>
			@endforeach
		</ol>
		@endsection

