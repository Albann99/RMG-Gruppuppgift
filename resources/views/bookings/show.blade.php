@extends('layouts/app')

@section('content')
	<div class="container mt-3">

@if($booking->article_id == Auth::user()->id)

<h1>Booking Info:</h1>

<p><strong>Firstname:</strong> {{ $booking->firstname }}</p>
<p><strong>Lastname:</strong> {{ $booking->lastname }}</p>
<p><strong>Email:</strong> {{ $booking->email }}</p>
<p><strong>Phone:</strong> {{ $booking->phone }}</p>
<p><strong>Date Start:</strong> {{ $booking->date_start }}</p>
<p><strong>Date End:</strong> {{ $booking->date_end }}</p>
@endif
@endsection