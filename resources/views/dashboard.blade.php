@extends('layouts/app')

@section('content')
	<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                 <p>You are logged in!</p>

					<p>This is the dashboard.</p>

					<a href="articles/create">Create new Article</a>
					<br>
				
				
					<p>Bokningsförfrågningar:</p>
					
		<ol>
		@foreach($bookings as $booking)
		<li><a href="/bookings/{{$booking->id }}">{{$booking->firstname }}</a></li>
		@endforeach
	</ol>



					
@endsection
				</div>
			</div>
		</div>
	</div>