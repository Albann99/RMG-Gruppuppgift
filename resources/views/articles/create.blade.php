@extends('layouts/app')

@section('content')
	<div class="container mt-3">
		<h1>Create a New Article</h1>

		<form method="POST" action="/articles">

			@csrf

			<div class="form-group">
				<label for="name">Article Name</label>
				<input type="text" name="name" id="name" class="form-control" placeholder="Article Name">
			</div>

			<div class="form-group">
				<label for="url">Image</label>
				<input type="text" name="url" id="url" class="form-control" placeholder="URL">
			</div>

			<div class="form-group">
				<label for="rent_price">Pris</label>
				<input type="text" name="rent_price" id="rent_price" class="form-control" placeholder="Exempel: 300">
			</div>

			<label for="category_id">Category</label>
			<select class="form-control" id="category_id" name="category_id">
				@foreach ($categories as $category)
				<option value="{{ $category->id }}">{{ $category->name }}</option>
				@endforeach
			</select>


			<div class="form-group">
				<input type="hidden" name="user_id" id="user_id" class="form-control" placeholder="User_id">
			</div>



<br>
			<input type="submit" value="Create New Article" class="btn btn-primary">
		</form>

		<a href="/articles">&laquo; Back to all articles</a>
	</div>
@endsection
