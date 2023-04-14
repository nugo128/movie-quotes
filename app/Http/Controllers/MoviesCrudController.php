<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovieRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class MoviesCrudController extends Controller
{
    public function index()
    {

        $movie = Movie::all();
        $quote = Quote::all();
        return view('manage.movies.index', compact('movie', 'quote'));
    }

    public function create()
    {
        return view('manage.movies.add-movie');
    }

    public function store(MovieRequest $request)
    {
        $attributes = $request->validated();

        $movie = new Movie();
        $movie->setTranslation('title', 'en', $attributes['title_en']);
        $movie->setTranslation('title', 'ka', $attributes['title_ka']);
        $movie->save();
        return redirect()->route('admin');
    }
    public function edit(Movie $movie)
    {
        return view('manage.movies.edit', ['movie' => $movie]);
    }
    public function update(MovieRequest $request, Movie $movie)
    {
        $attributes = $request->validated();
        $movie->setTranslation('title', 'en', $attributes['title_en']);
        $movie->setTranslation('title', 'ka', $attributes['title_ka']);
        $movie->save();
        return redirect()->route('admin')->with('success', 'edited!');
    }
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return back()->with('success', 'deleted!');
    }
}
