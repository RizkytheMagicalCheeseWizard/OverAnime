<?php

use App\Http\Controllers\AnimeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/{id}', [AnimeController::class,'getAnime']);
Route::get('/', [AnimeController::class,'topAnime']);
