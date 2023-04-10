<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show(Movie $movie)
    {

        $quote = Quote::where('movie_id', $movie->id)->get();

        $user = auth()->user();
        return view('films.index', compact('movie', 'quote', 'user'));
    }
}
