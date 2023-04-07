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
    public function store()
    {
        $attributes = request()->validate(['title'=>'required']);
        Movie::create($attributes);
        return redirect(route('admin'));
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
        $movie = Movie::find($id);
        $movie->update($attributes);


        return redirect(route('admin'))->with('success', 'edited!');
    }
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        return back()->with('success', 'deleted!');
    }
}
