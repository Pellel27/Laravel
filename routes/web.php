<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/hello', function () {
    return view('hello');
})->name('hello');

Route::get('/restaurant', function () {
    return view('restaurant');
})->name('restaurant');

//@todo créer les routes pour les pages Menu, Contact, Reservation et Mentions légales 
Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation');

Route::get('/mention-legale', function () {
    return view('mention-legale');
})->name('mention-legale');
// Route..