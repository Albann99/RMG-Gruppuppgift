
		@extends('layouts.app')

@section('content')
<form method="POST" action="/bookings">
	@csrf
<<<<<<< HEAD
=======
	@method('POST')
@php 
use Carbon\Carbon;
@endphp
>>>>>>> 41b1e86937dcbadbd556f2cf1e62944b2fe2de35
<div class="card-group" style="max-width: 50%;">
  <div class="card" style="margin:20px; border:1px solid black;">
    <img src="{{ $article->url }}" class="card-img-top">
    <div class="card-body">
      <h1 class="card-title" style="text-transform: uppercase;"><strong> {{ $article->name }}</strong></h1>
<<<<<<< HEAD
=======
      <h1 class="card-title" style="text-transform: uppercase;"><strong>PRIS: {{ $article->rent_price }} KR</strong></h1>
      <p>Created: <strong>{{ $article->created_at->diffForHumans() }}</strong></p>
>>>>>>> 41b1e86937dcbadbd556f2cf1e62944b2fe2de35
      <form>
      	
      <div class="form-row">
      <div>
<<<<<<< HEAD
      <input type="hidden" class="form-control" id="article_id" value="{{ $article->id }}">
    </div>
    <div class="form-group col-md-6">
      <label for="firstname">First Name</label>
      <input type="text" class="form-control" id="firstname" name="firstname" value="firstname" placeholder="FirstName">
    </div>
    <div class="form-group col-md-6">
      <label for="lastname">Last Name</label>
      <input type="text" class="form-control" id="lastname" name="lastname" value="lastname" placeholder="LastName">
=======
      <input type="hidden" class="form-control" id="article_id" name="article_id" value="{{ $article->id }}">
    </div>
    <div class="form-group col-md-6">
      <label for="firstname">First Name</label>
      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="FirstName" required>
    </div>
    <div class="form-group col-md-6">
      <label for="lastname">Last Name</label>
      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="LastName" required>
>>>>>>> 41b1e86937dcbadbd556f2cf1e62944b2fe2de35
    </div>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
<<<<<<< HEAD
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
=======
    <input type="email" class="form-control" id="email" name="email" placeholder="....@live.se" required>
  </div>


    <div class="form-group">
      <label for="phone">PHONE NUMBER</label>
      <input type="phone" class="form-control" id="phone" name="phone" placeholder="+4600.." required>
    </div>

    <div class="form-group">
      <label for="date_start">Date Start</label>
      <select class="form-control" name="date_start">
        <option>{{ Carbon::now()->addDay(0) }}</option>
        <option>{{ Carbon::now()->addDay(1) }}</option>
        <option>{{ Carbon::now()->addDay(2) }}</option>
        <option>{{ Carbon::now()->addDay(3) }}</option>
        <option>{{ Carbon::now()->addDay(4) }}</option>
        <option>{{ Carbon::now()->addDay(5) }}</option>
        <option>{{ Carbon::now()->addDay(6) }}</option>
        <option>{{ Carbon::now()->addDay(7) }}</option>
      </select>
    </div>

    <div class="form-group">
      <label for="date_end">Date End</label>
      <select class="form-control" name="date_end">
        <option>{{ Carbon::now()->addDay(0) }}</option>
        <option>{{ Carbon::now()->addDay(1) }}</option>
        <option>{{ Carbon::now()->addDay(2) }}</option>
        <option>{{ Carbon::now()->addDay(3) }}</option>
        <option>{{ Carbon::now()->addDay(4) }}</option>
        <option>{{ Carbon::now()->addDay(5) }}</option>
        <option>{{ Carbon::now()->addDay(6) }}</option>
        <option>{{ Carbon::now()->addDay(7) }}</option>
      </select>
    </div>
   
>>>>>>> 41b1e86937dcbadbd556f2cf1e62944b2fe2de35

  <div class="form-group">
    </div>
  </div>
  <input type="submit" value="HYRA" class="btn btn-primary">
</form>
<<<<<<< HEAD
    </div>
  </div>
</form>
 
</form>
    </div>
  </div>
</div>

=======
<br>
@if (Auth::check())
@if ($article->user_id == Auth::user()->id)

<div>
<a href="/articles/{{ $article->id }}/edit" class="btn btn-warning" style="width:100%">Edit Project</a>

<form method="post" action="/articles/{{ $article->id }}">
				@csrf
				@method('DELETE')

				<input style="width:100%" type="submit" value="DELETE" class="btn btn-danger">
			</form>
</div>
@endif
@endif
>>>>>>> 41b1e86937dcbadbd556f2cf1e62944b2fe2de35
@endsection