@extends('layouts/app')

@section('content')
<div class="container mt-3">
	<h1>All articles</h1>

	<ol>
		@foreach($articles as $article)
		<li><a href="/articles/{{ $article->id }}">{{ $article->name }}</a></li>
		@endforeach
	</ol>
	@endsection