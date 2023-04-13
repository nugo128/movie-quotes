<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show(Movie $movie, $id)
    {
        $movie = Movie::with('quote', 'user')->findOrFail($id);
        $quote = $movie->quote;
        $user = $movie->current_user;
        return view('films.index', compact('movie', 'quote', 'user'));
    }
}
