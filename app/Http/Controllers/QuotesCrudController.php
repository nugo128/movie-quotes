<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class QuotesCrudController extends Controller
{
    public function create()
    {
        $movie = Movie::all();
        return view('manage.quotes.add-quote', compact('movie'));
    }
    public function store(QuoteRequest $request)
    {
        $attributes = $request->validated();
        $quote = new Quote();
        $quote->setTranslation('quote', 'en', $attributes['quote_en']);
        $quote->setTranslation('quote', 'ka', $attributes['quote_ka']);
        $quote->movie_id = $attributes['movie_id'];
        $quote->save();

        return redirect()->route('admin');
    }
    public function edit(Quote $quote)
    {
        $movies = Movie::all();
        return view('manage.quotes.edit', ['quote' => $quote, 'movies'=>$movies]);
    }
    public function update(QuoteRequest $request, Quote $quote)
    {
        $attributes = $request->validated();
        $quote->setTranslation('quote', 'en', $attributes['quote_en']);
        $quote->setTranslation('quote', 'ka', $attributes['quote_ka']);
        $quote->movie_id = $attributes['movie_id'];


        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailPath = $thumbnail->store('thumbnails');
            $quote->thumbnail = $thumbnailPath;
        }

        $quote->save();

        return redirect()->route('admin')->with('success', 'Quote updated successfully!');
    }
    public function destroy(Quote $quote)
    {
        $quote->delete();
        return back()->with('success', 'deleted!');
    }
}
