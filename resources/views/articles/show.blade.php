
		@extends('layouts.app')

@section('content')
<form method="POST" action="/bookings">
	@csrf
<div class="card-group" style="max-width: 50%;">
  <div class="card" style="margin:20px; border:1px solid black;">
    <img src="{{ $article->url }}" class="card-img-top">
    <div class="card-body">
      <h1 class="card-title" style="text-transform: uppercase;"><strong> {{ $article->name }}</strong></h1>
      <form>
      	
      <div class="form-row">
      <div>
      <input type="hidden" class="form-control" id="article_id" value="{{ $article->id }}">
    </div>
    <div class="form-group col-md-6">
      <label for="firstname">First Name</label>
      <input type="text" class="form-control" id="firstname" name="firstname" value="firstname" placeholder="FirstName">
    </div>
    <div class="form-group col-md-6">
      <label for="lastname">Last Name</label>
      <input type="text" class="form-control" id="lastname" name="lastname" value="lastname" placeholder="LastName">
    </div>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" id="email" value="email" name="email" placeholder="....@live.se">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="phone">PHONE NUMBER</label>
      <input type="phone" class="form-control" id="phone" value="phone" name="phone" placeholder="+4600..">
    </div>
  </div>

    <div class="form-group">
    <label for="date"></label>
    <input type="date" class="form-control" id="date" value="date" name="date"placeholder="....@live.se">
  </div>

  <div class="form-group">
    </div>
  </div>
  <input type="submit" value="HYRA" class="btn btn-primary">
</form>
    </div>
  </div>
</form>
 
</form>
    </div>
  </div>
</div>

@endsection