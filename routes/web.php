<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ReservationController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/hello/{name}', [HelloController::class, 'index'])->name('hello');



Route::get('/restaurant',[ReservationController::class, 'index'])->name('restaurant');

//@todo créer les routes pour les pages Menu, Contact, Reservation et Mentions légales 
Route::get('/menu', [MenuController::class, 'index'])->name('menu');

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