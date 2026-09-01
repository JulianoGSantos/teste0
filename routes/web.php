<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hedd', [HomeController::class, 'hedd']);
Route::get('/catarse15', [HomeController::class, 'catarsequinze']);
Route::get('/catarse30', [HomeController::class, 'catarsetrinta']);
Route::get('/laio125', [HomeController::class, 'laioumevintecinco']);
Route::get('/laio25', [HomeController::class, 'laiodoisemeio']);
Route::get('/laio5', [HomeController::class, 'laiocinco']);
Route::get('/rosa10', [HomeController::class, 'rosadez']);
Route::get('/rosa20', [HomeController::class, 'rosavinte']);

