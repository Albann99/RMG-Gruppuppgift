<?php

namespace App\Http\Controllers;


use App\Booking;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
    	
    	$bookings = Booking::where('article_id', auth()->id())->get();

    	return view('dashboard', ['bookings' => $bookings]);
    }

}
