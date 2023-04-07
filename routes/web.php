<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MoviesCrudController;
use App\Http\Controllers\QuotesCrudController;
use App\Models\Movie;
use App\Models\Quote;
use App\Models\User;
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
    $movie = Movie::has('quote')->inRandomOrder()->first();
    $quote = $movie ? $movie->quote()->inRandomOrder()->first() : null;
    $user = auth()->user();

    return view('home.index', compact('movie', 'quote', 'user'));
});
// Route::get('/movies/{movie}', function (Movie $movie) {
//     // dd($movie->title);
//     //tested if database works
//     $movie = Movie::inRandomOrder()->first();
//     $quote = Quote::where('movie_id', $movie->movie_id)->inRandomOrder()->first();
//     return view('films.index', compact('movie', 'quote'));
// });
Route::get('/movies/{id}', [MovieController::class,'show'])->name('films.index');

Route::get('/login', [LoginController::class,'create'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class,'destroy']);

Route::get('admin', [MoviesCrudController::class,'index'])->middleware('auth');

Route::get('admin/movies/create', [MoviesCrudController::class,'create'])->middleware('auth');
Route::post('admin/movies/create', [MoviesCrudController::class,'store'])->middleware('auth');

Route::get('admin/movies/{id}/edit', [MoviesCrudController::class,'edit'])->name('manage.movies.edit')->middleware('auth');
Route::patch('admin/movies/{id}', [MoviesCrudController::class,'update'])->middleware('auth');
Route::delete('admin/movies/{id}', [MoviesCrudController::class,'destroy'])->middleware('auth');

Route::get('admin/quotes/create', [QuotesCrudController::class, 'create'])->middleware('auth');
Route::post('admin/quotes/create', [QuotesCrudController::class, 'store'])->middleware('auth');

Route::get('admin/quotes/{id}/edit', [QuotesCrudController::class,'edit'])->middleware('auth');
Route::patch('admin/quotes/{id}', [QuotesCrudController::class,'update'])->middleware('auth');
Route::delete('admin/quotes/{id}', [QuotesCrudController::class,'destroy'])->middleware('auth');
