<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $movie = Movie::has('quote')->inRandomOrder()->first();
        $quote = $movie ? $movie->quote()->inRandomOrder()->first() : null;
        return view('home.index', compact('movie', 'quote'));
    }
}
