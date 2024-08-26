<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;


Route::get('/create', [OrderController::class, 'create'])->name('create');
Route::get('/', function () {
    return view('welcome');
});
