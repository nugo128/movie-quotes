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
        $quote = Quote::where('id', $id)->get();
        $user = auth()->user();


        return view('films.index', compact('movie', 'quote', 'user'));
    }
}
