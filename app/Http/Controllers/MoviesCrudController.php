<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class MoviesCrudController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $movie = Movie::all();
        $quote = Quote::all();
        return view('manage.movies.index', compact('user', 'movie', 'quote'));
    }

    public function create()
    {
        $user = auth()->user();
        return view('manage.movies.add-movie', compact('user'));
    }
    public function store()
    {
        $attributes = request()->validate(['title'=>'required']);
        Movie::create($attributes);
        return redirect('/admin');
    }
    public function edit($id)
    {
        $user = auth()->user();
        $movie = Movie::find($id);
        return view('manage.movies.edit', ['movie' => $movie, 'user'=>$user]);
    }
    public function update($id)
    {
        $attributes = request()->validate(['title'=>'required']);
        $movie = Movie::findOrFail($id);
        $movie->update($attributes);


        return redirect('/admin')->with('success', 'edited!');
    }
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return back()->with('success', 'deleted!');
    }
}
