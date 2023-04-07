<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MoviesCrudController;
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
    $movie = Movie::inRandomOrder()->first();
    $quote = Quote::where('id', $movie->id)->inRandomOrder()->first();
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
Route::post('/logout', [LoginController::class,'destroy'])->name('logout');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [MoviesCrudController::class, 'index'])->name('admin');
    Route::resource('movies', MoviesCrudController::class)->except('show');
});
