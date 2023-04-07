<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        $quote = $movie->quote;


        $user = auth()->user();


        return view('films.index', compact('movie', 'quote', 'user'));
    }
}
