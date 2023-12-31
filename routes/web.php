<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocaleController;
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

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/movies/{id}', [MovieController::class,'show'])->name('films.index');

Route::view('/login', 'login.create')->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login-post');

Route::post('/logout', [LoginController::class,'logout'])->name('logout');


Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [MoviesCrudController::class, 'index'])->name('admin');
    Route::resource('movies', MoviesCrudController::class)->except('show');
});

Route::resource('admin/quotes', QuotesCrudController::class)->middleware('auth');
Route::post('admin/quotes/create', [QuotesCrudController::class, 'store'])->name('quotes.store.post');

Route::get('locale/{locale}', [LocaleController::class, 'setLocale'])->name('setLocale');
