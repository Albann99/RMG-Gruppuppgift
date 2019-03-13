@extends('layouts/app')

@section('content')
	<div class="container mt-3">
		
		<h1>Edit Article: {{ $article->name }}</h1>

		<form method="POST" action="{{route('articles.update', $article) }}">

			@csrf
			@method('PATCH')

			<div class="form-group">
				<label for="name">Article Name</label>
				<input type="text" name="name" id="name" class="form-control" placeholder="Article Name" value="{{ $article->name }}">
			</div>

			<div class="form-group">
				<label for="url">Article Image</label>
				<input type="text" name="url" id="url" class="form-control" placeholder="URL" value="{{ $article->url }}">
			</div>

			<div class="form-group">
				<label for="rent_price">Article Price</label>
				<input type="text" name="rent_price" id="rent_price" class="form-control" placeholder="Pris" value="{{ $article->rent_price }}">
			</div>

			<input type="submit" value="Save Changez" class="btn btn-primary">
		</form>

		<a href="/articles">&laquo; Back to all articles</a><br>

	</div>
	
@endsection
