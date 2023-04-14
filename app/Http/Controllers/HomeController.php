<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $quote = Quote::with('movie')->inRandomOrder()->first();
        $movie = $quote ? $quote->movie : null;
        return view('home.index', compact('movie', 'quote'));
    }
}
