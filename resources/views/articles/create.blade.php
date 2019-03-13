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
	</div>
@endsection
