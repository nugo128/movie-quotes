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
        return view('manage.movies.index', compact('user','movie'));
    }
}
