@extends('layouts/app')

@section('content')
<div class="container mt-3">


   @if(Auth::check())
@if ($articles = App\Article::where('user_id', auth()->id())->get())
   <h1>My articles</h1>
<ol>
		@foreach($articles as $article)
		<li><a href="/articles/{{$article->slug }}">{{$article->name }}</a></li>
		@endforeach
	</ol>
@endif
@endif

	@php
$articles = App\Article::all();
@endphp
	<h1>All articles</h1>

	<ol>
		@foreach($articles as $article)
		<li><a href="/articles/{{ $article->slug }}">{{ $article->name }}</a></li>
		@endforeach
	</ol>
	@endsection


