<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;






Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




