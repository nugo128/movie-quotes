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
    public function edit($id)
    {
        $user = auth()->user();
        $quote = Quote::find($id);
        $movies = Movie::all();
        return view('manage.quotes.edit', ['quote' => $quote, 'user'=>$user, 'movies'=>$movies]);
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'quote' => 'required|max:255',
            'movie_id' => 'required|exists:movies,id',
            'thumbnail' => 'image', 
        ]);
        $quote = Quote::findOrFail($id);
        $quote->quote = $request->input('quote');
        $quote->movie_id = $request->input('movie_id');

        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $thumbnailPath = $thumbnail->store('thumbnails');
            $quote->thumbnail = $thumbnailPath;
        }
        $quote->save();
        return redirect('/admin')->with('success', 'Quote updated successfully!');
    }
    public function destroy($id)
    {
        $quote= Quote::find($id);
        $quote->delete();
        return back()->with('success', 'deleted!');
    }
}
