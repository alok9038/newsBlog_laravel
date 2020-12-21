<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;


Route::redirect('/', '/news');

Route::resource('news', NewsController::class);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
