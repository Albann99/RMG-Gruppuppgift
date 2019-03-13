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

			<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Kategorier
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Bil</a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
  </ul>
</div>
<br>
			<input type="submit" value="Create New Project" class="btn btn-primary">
		</form>

		<a href="/articles">&laquo; Back to all projects</a>


			<div class="form-group">
				<label for="rent_price">Pris</label>
				<input type="text" name="rent_price" id="rent_price" class="form-control" placeholder="Exempel: 300">
			</div>

			<div class="form-group">
				<label for="category_id">Category id</label>
				<input type="text" name="category_id" id="category_id" class="form-control" placeholder="Exempel: 1">
			</div>


			<div class="form-group">
				<input type="hidden" name="user_id" id="user_id" class="form-control" placeholder="User_id">
			</div>



<br>
			<input type="submit" value="Create New Article" class="btn btn-primary">
		</form>

		<a href="/articles">&laquo; Back to all articles</a>
	</div>
@endsection
