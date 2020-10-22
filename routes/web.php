<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActorsController;
use App\Http\Controllers\MoviesController;


Route::get('/', [MoviesController::class, 'index'])->name('movies.index');
Route::get('/movie/{movie}', [MoviesController::class, 'show'])->name('movies.show');





Route::get('/actors', [ActorsController::class, 'index'])->name('actors.index');
Route::get('/actors/page/{page?}', [ActorsController::class, 'index']);
Route::get('/actors/{id}', [ActorsController::class, 'show'])->name('actors.show');

