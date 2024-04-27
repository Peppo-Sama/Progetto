<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/profile', function () {
    // Logic per l'area utente
})->name('profile');

Route::get('/creaesame', function () {
    // Logic per creare un esame
})->name('creaesame');

Route::get('/showesami', function () {
    // Logic per mostrare gli esami
})->name('showesami');

Route::get('/revisionaesame', function () {
    // Logic per la revisione degli esami
})->name('revisionaesame');

Route::get('/pubblicaesame', function () {
    // Logic per pubblicare un esame
})->name('pubblicaesame');

Route::get('/eliminaesame', function () {
    // Logic per eliminare un esame
})->name('eliminaesame');

Route::get('/biblioteca', function () {
    // Logic per la biblioteca
})->name('biblioteca');

Route::post('/logout', function () {
    // Logic per il logout
})->name('logout');

