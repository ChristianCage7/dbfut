<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/players', [PlayerController::class, 'index']);
Route::get('/search-player', [PlayerController::class, 'searchForm']);
Route::post('/search-player', [PlayerController::class, 'search']);
Route::get('/test-player', [PlayerController::class, 'test']);