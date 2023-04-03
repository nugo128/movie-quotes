<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show($movie_id)
    {
        $movie = Movie::find($movie_id);
        $quote = Quote::where('movie_id', $movie_id)->get();
        dd($quote);


        return view('films.index', compact('movie', 'quote'));
    }
}
