<?php

use Illuminate\Support\Facades\Route;




// Routs для HomePage
Route::get('/', [\App\Http\Controllers\HomeController::class,'index' ])->name('home');
Route::get('/showe/{id}', [\App\Http\Controllers\HomeController::class, 'show'])->name('showe');
Route::get('/edit/{id}', [\App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [\App\Http\Controllers\HomeController::class, 'update'])->name('update');
Route::get('/delete/{id}', [\App\Http\Controllers\HomeController::class, 'delete'])->name('delete');

// Route для Books
