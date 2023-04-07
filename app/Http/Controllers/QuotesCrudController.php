<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class QuotesCrudController extends Controller
{
    public function create()
    {
        $user = auth()->user();
        $movie = Movie::all();
        return view('manage.quotes.add-quote', compact('user', 'movie'));
    }
    public function store(Request $request)
    {
        // Retrieve form data
        $attributes = $request->validate([
            'quote' => 'required',
            'movie_id' => ['required', Rule::exists('movies', 'id')],
            'thumbnail' => 'required|image'
        ]);

        $quote = new Quote();
        $quote->quote = $attributes['quote'];
        $quote->movie_id = $attributes['movie_id'];

        $quote->thumbnail = $request->file('thumbnail')->store('thumbnails');

        $quote->save();

        return redirect('/admin');
    }
}
