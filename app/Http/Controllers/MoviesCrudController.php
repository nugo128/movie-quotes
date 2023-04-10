<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MoviesCrudController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $movie = Movie::all();
        return view('manage.movies.index', compact('user', 'movie'));
    }

    public function create()
    {
        $user = auth()->user();
        return view('manage.movies.add-movie', compact('user'));
    }
    public function store(Request $request)
    {
        $attributes = $request->validate(['title' => 'required']);
        Movie::create($attributes);
        return redirect()->route('admin');
    }
    public function edit(Movie $movie)
    {
        $user = auth()->user();
        return view('manage.movies.edit', ['movie' => $movie, 'user' => $user]);
    }
    public function update(Request $request, Movie $movie)
    {
        $attributes = $request->validate(['title' => 'required']);
        $movie->update($attributes);
        return redirect(route('admin'))->with('success', 'edited!');
    }
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return back()->with('success', 'deleted!');
    }
}
