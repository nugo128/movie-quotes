<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $quote = Quote::with('movie')->inRandomOrder()->first();
        return view('home.index', compact('quote'));
    }
}
