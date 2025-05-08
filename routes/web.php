<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'Homepage'] )->name('Homepage');

Route::get('/chi-siamo', [PublicController::class, 'aboutUs'])->name('aboutUs');


Route::get('/chi-siamo/detail/{name}', [PublicController::class, 'aboutUsDetail'] ) ->name('aboutUsDetail') ;


Route::get('/contatti', [PublicController::class, 'contacts'])->name('contacts');


Route::get('movies', [MovieController::class, 'movieList'])->name('movie.list');



Route::get('/movie/detail{id}', [MovieController::class, 'movieDetail'])-> name('movie.detail');



// INSERIMENTO FILM
Route::get('movie/create', [MovieController::class,'create'])->name('movie.create');
Route::post('/movie/submit', [MovieController::class, 'store'])->name('movie.submit');