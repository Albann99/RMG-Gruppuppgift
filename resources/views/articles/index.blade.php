@extends('layouts/app')

@section('content')
<div class="container mt-3">
	@include('partials/status')


   @if (Auth::check())
   @if ($articles = App\Article::where('user_id', auth()->id())->get())
   <h1>My articles</h1>
<ol>
		@foreach($articles as $article)
		<li><a href="/articles/{{$article->slug }}">{{$article->name }}</a></li>
		@endforeach
	</ol>
	@endif
@endif

@if ($articles = App\Article::orderBy('name')->get())
	<h1>All articles</h1>

	<ol>
		@foreach($articles as $article)
		<div class="card" style="width: 10rem; margin-bottom:10px;">
  <img class="card-img-top" src="{{$article->url}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Pris: {{$article->rent_price}} kr</h5>
    <li><a href="/articles/{{$article->slug}}" class="btn btn-primary">{{$article->name}}</a>
  </div>
</div>
@endforeach
	</ol>
	@endif
	@endsection


