<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimesController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/animes', [AnimesController::class, 'listarAnimes']);