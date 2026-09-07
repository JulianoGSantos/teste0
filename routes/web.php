<?php

use App\Http\Controllers\CatarseQuinzeController;
use App\Http\Controllers\CatarseTrintaController;
use App\Http\Controllers\HeddController;
use App\Http\Controllers\LaioCincoController;
use App\Http\Controllers\LaioDoiseMeioController;
use App\Http\Controllers\LaioUmeVinteCincoController;
use App\Http\Controllers\RosaDezController;
use App\Http\Controllers\RosaVinteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hedd', [HeddController::class, 'index'])->name('hedd-index');
Route::get('/catarse15', [CatarseQuinzeController::class, 'index'])->name('catarsequinze-index');
Route::get('/catarse30', [CatarseTrintaController::class, 'index'])->name('catarsetrinta-index');
Route::get('/laio125', [LaioUmeVinteCincoController::class, 'index'])->name('laioumevintecinco-index');
Route::get('/laio25', [LaioDoiseMeioController::class, 'index'])->name('laiodoisemeio-index');
Route::get('/laio5', [LaioCincoController::class, 'index'])->name('laiocinco-index');
Route::get('/rosa10', [RosaDezController::class, 'index'])->name('rosadez-index');
Route::get('/rosa20', [RosaVinteController::class, 'index'])->name('rosavinte-index');