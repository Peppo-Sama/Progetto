<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::prefix('studente')->group(function () {
    Route::get('/login', 'Auth\LoginController@showStudenteLoginForm')->name('studente.login');
    Route::post('/login', 'Auth\LoginController@studenteLogin');
    Route::get('/register', 'Auth\RegisterController@showStudenteRegisterForm')->name('studente.register');
    Route::post('/register', 'Auth\RegisterController@createStudente');
});

Route::prefix('docente')->group(function () {
    Route::get('/login', 'Auth\LoginController@showDocenteLoginForm')->name('docente.login');
    Route::post('/login', 'Auth\LoginController@docenteLogin');
    Route::get('/register', 'Auth\RegisterController@showDocenteRegisterForm')->name('docente.register');
    Route::post('/register', 'Auth\RegisterController@createDocente');
});

