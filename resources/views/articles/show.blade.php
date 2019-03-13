 
    @extends('layouts.app')

@section('content')
<form method="POST" action="/bookings">
  @csrf
  @method('POST')
@php 
use Carbon\Carbon;
@endphp
<div class="card-group" style="max-width: 50%;">
  <div class="card" style="margin:20px; border:1px solid black;">
    <img src="{{ $article->url }}" class="card-img-top">
    <div class="card-body">
      <h1 class="card-title" style="text-transform: uppercase;"><strong> {{ $article->name }}</strong></h1>
      <h1 class="card-title" style="text-transform: uppercase;"><strong>PRIS: {{ $article->rent_price }} KR</strong></h1>
      <p>Created: <strong>{{ $article->created_at->diffForHumans() }}</strong></p>
      <form>
        
      <div class="form-row">
      <div>
      <input type="hidden" class="form-control" id="article_id" name="article_id" value="{{ $article->id }}">
    </div>
    <div class="form-group col-md-6">
      <label for="firstname">First Name</label>
      <input type="text" class="form-control" id="firstname" name="firstname" placeholder="FirstName" required>
    </div>
    <div class="form-group col-md-6">
      <label for="lastname">Last Name</label>
      <input type="text" class="form-control" id="lastname" name="lastname" placeholder="LastName" required>
    </div>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
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
   

  <div class="form-group">
    </div>
  </div>
  <input type="submit" value="HYRA" class="btn btn-primary">
</form>
<br>
@if (Auth::check())
@if ($article->user_id == Auth::user()->id)

<div>
<a href="/articles/{{ $article->slug }}/edit" class="btn btn-warning" style="width:100%">Edit Project</a>

<form method="post" action="/articles/{{ $article->slug }}">
        @csrf
        @method('DELETE')

        <input style="width:100%" type="submit" value="DELETE" class="btn btn-danger">
      </form>
</div>
@endif
@endif
@endsection