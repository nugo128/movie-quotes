<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show(Movie $movie, $id)
    {
        $movie = Movie::with('quotes')->findOrFail($id);
        return view('films.index', compact('movie'));
    }
}
