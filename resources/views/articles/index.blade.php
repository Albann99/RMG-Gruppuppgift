@extends('layouts/app')

@section('content')
<div class="container mt-3">
<<<<<<< HEAD
=======

	@php
use App\Article;
@endphp
   @if(Auth::check())
@if ($articles = Article::where('user_id', auth()->id())->get())
   <h1>My articles</h1>
<ol>
		@foreach($articles as $article)
		<li><a href="/articles/{{$article->id }}">{{$article->name }}</a></li>
		@endforeach
	</ol>
@endif
@endif

	@php
$articles = Article::all();
@endphp
>>>>>>> 41b1e86937dcbadbd556f2cf1e62944b2fe2de35
	<h1>All articles</h1>

	<ol>
		@foreach($articles as $article)
<<<<<<< HEAD
		<li><a href="/articles/{{ $article->id }}">{{ $article->name }}</a></li>
=======
		<li><a href="/articles/{{$article->id }}">{{$article->name }}</a></li>
>>>>>>> 41b1e86937dcbadbd556f2cf1e62944b2fe2de35
		@endforeach
	</ol>
	@endsection