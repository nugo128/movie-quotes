<?php

use App\Http\Controllers\MovieController;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $movie = Movie::inRandomOrder()->first();
    $quote = Quote::where('movie_id', $movie->movie_id)->inRandomOrder()->first();
    return view('home.index', compact('movie', 'quote'));
});
// Route::get('/movies/{movie}', function (Movie $movie) {
//     // dd($movie->title);
//     //tested if database works
//     $movie = Movie::inRandomOrder()->first();
//     $quote = Quote::where('movie_id', $movie->movie_id)->inRandomOrder()->first();
//     return view('films.index', compact('movie', 'quote'));
// });
Route::get('/movies/{id}', [MovieController::class,'show']);
