<?php

use App\Http\Controllers\Admin\PlatController as AdminPlatController;
use App\Http\Controllers\Admin\ReservationController as AdminReservationController;
use App\Http\Controllers\Admin\ActuController as AdminActuController;
use App\Http\Controllers\Admin\Photo_ambianceController as AdminPhoto_ambianceController;
use App\Http\Controllers\Admin\CategorieController as AdminCategorieController;
use App\Http\Controllers\Admin\Photo_platController as AdminPhoto_platController;
use App\Http\Controllers\Admin\EtiquetteController as AdminEtiquetteController;
use App\Http\Controllers\Admin\RestaurantController as AdminRestaurantController;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Photo_platController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\Photo_ambianceController;
use App\Http\Controllers\ActuController;
use App\Http\Controllers\EtiquetteController;
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



Route::get('/reservation',[ReservationController::class, 'index'])->name('reservation');

Route::get('/photo_plat', [PhotoPlatController::class, 'index'])->name('photo_plat');

Route::get('/photo_ambiance', [Photo_ambianceController::class, 'index'])->name('photo_ambiance');
Route::get('/categorie', [CategorieController::class, 'index'])->name('categorie');
Route::get('/etiquette', [EtiquetteController::class, 'index'])->name('etiquette');

//@todo créer les routes pour les pages Menu, Contact, Reservation et Mentions légales 
Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');


Route::get('/mentions-legales', function () {
    return view('mentions-legales');
})->name('mentions-legales');

//CRUD plat
//liste des plat

//CRUD plats
//affichage des plats

Route::get('/admin/plat', [AdminPlatController::class,'index']) ->middleware('auth')->name('admin.plat.index');


Route::get('/admin/plat/create', [AdminPlatController::class,'create']) ->middleware('auth')->name('admin.plat.create');
Route::post('/admin/plat', [AdminPlatController::class,'store']) ->middleware('auth')->name('admin.plat.store');

Route::get('/admin/plat/{id}/edit', [AdminPlatController::class,'edit']) ->middleware('auth')->name('admin.plat.edit');
Route::put('/admin/plat/{id}', [AdminPlatController::class,'update']) ->middleware('auth')->name('admin.plat.update');
//suppresion de la plat
Route::delete('/admin/plat/{id}', [AdminPlatController::class,'delete']) ->middleware('auth')->name('admin.plat.delete');


//CRUD photo_ambiance
//affichage des photo_ambiance

Route::get('/admin/photo_ambiance', [AdminPhoto_ambianceController::class,'index']) ->middleware('auth')->name('admin.photo_ambiance.index');


Route::get('/admin/photo_ambiance/create', [AdminPhoto_ambianceController::class,'create']) ->middleware('auth')->name('admin.photo_ambiance.create');
Route::post('/admin/photo_ambiance', [AdminPhoto_ambianceController::class,'store']) ->middleware('auth')->name('admin.photo_ambiance.store');

Route::get('/admin/photo_ambiance/{id}/edit', [AdminPhoto_ambianceController::class,'edit']) ->middleware('auth')->name('admin.photo_ambiance.edit');
Route::put('/admin/photo_ambiance/{id}', [AdminPhoto_ambianceController::class,'update']) ->middleware('auth')->name('admin.photo_ambiance.update');
//suppresion de la photo_ambiance
Route::delete('/admin/photo_ambiance/{id}', [AdminPhoto_ambianceController::class,'delete']) ->middleware('auth')->name('admin.photo_ambiance.delete');



//CRUD reservation
//afficher les réservations
Route::get('/admin/reservation', [AdminReservationController::class,'index']) ->middleware('auth')->name('admin.reservation.index');

// affichage(create) et enregistrées(store) des données
Route::get('/admin/reservation/create', [AdminReservationController::class,'create']) ->middleware('auth')->name('admin.reservation.create');
Route::post('/admin/reservation', [AdminReservationController::class,'store']) ->middleware('auth')->name('admin.reservation.store');

Route::get('/admin/reservation/{id}/edit', [AdminReservationController::class,'edit']) ->middleware('auth')->name('admin.reservation.edit');
Route::put('/admin/reservation/{id}', [AdminReservationController::class,'update']) ->middleware('auth')->name('admin.reservation.update');
//suppresion de la reservation
Route::delete('/admin/reservation/{id}', [AdminReservationController::class,'delete']) ->middleware('auth')->name('admin.reservation.delete');

//CRUD actu
//afficher les actus
Route::get('/admin/actu', [AdminActuController::class,'index']) ->middleware('auth')->name('admin.actu.index');


// affichage(create) et enregistrées(store) des données
Route::get('/admin/actu/create', [AdminActuController::class,'create']) ->middleware('auth')->name('admin.actu.create');
Route::post('/admin/actu', [AdminActuController::class,'store']) ->middleware('auth')->name('admin.actu.store');

Route::get('/admin/actu/{id}/edit', [AdminActuController::class,'edit']) ->middleware('auth')->name('admin.actu.edit');
Route::put('/admin/actu/{id}', [AdminActuController::class,'update']) ->middleware('auth')->name('admin.actu.update');

//suppresion de la actu
Route::delete('/admin/actu/{id}', [AdminActuController::class,'delete']) ->middleware('auth')->name('admin.actu.delete');


//afficher les photo_plats
Route::get('/admin/photo_plat', [AdminPhoto_platController::class,'index']) ->middleware('auth')->name('admin.photo_plat.index');

// affichage(create) et enregistrées(store) des données
Route::get('/admin/photo_plat/create', [AdminPhoto_platController::class,'create']) ->middleware('auth')->name('admin.photo_plat.create');
Route::post('/admin/photo_plat', [AdminPhoto_platController::class,'store']) ->middleware('auth')->name('admin.photo_plat.store');

Route::get('/admin/photo_plat/{id}/edit', [AdminPhoto_platController::class,'edit']) ->middleware('auth')->name('admin.photo_plat.edit');
Route::put('/admin/photo_plat/{id}', [AdminPhoto_platController::class,'update']) ->middleware('auth')->name('admin.photo_plat.update');

//suppresion de la photo_plat
Route::delete('/admin/photo_plat/{id}', [AdminPhoto_platController::class,'delete']) ->middleware('auth')->name('admin.photo_plat.delete');


// affichage(create) et enregistrées(store) des données
Route::get('/admin/etiquette', [AdminEtiquetteController::class,'index']) ->middleware('auth')->name('admin.etiquette.index');

Route::get('/admin/etiquette/create', [AdminEtiquetteController::class,'create']) ->middleware('auth')->name('admin.etiquette.create');
Route::post('/admin/etiquette', [AdminEtiquetteController::class,'store']) ->middleware('auth')->name('admin.etiquette.store');

Route::get('/admin/etiquette/{id}/edit', [AdminEtiquetteController::class,'edit']) ->middleware('auth')->name('admin.etiquette.edit');
Route::put('/admin/etiquette/{id}', [AdminEtiquetteController::class,'update']) ->middleware('auth')->name('admin.etiquette.update');

//suppresion de la etiquette
Route::delete('/admin/etiquette/{id}', [AdminEtiquetteController::class,'delete']) ->middleware('auth')->name('admin.etiquette.delete');


Route::get('/admin/categorie', [AdminCategorieController::class,'index']) ->middleware('auth')->name('admin.categorie.index');

Route::get('/admin/categorie/create', [AdminCategorieController::class,'create']) ->middleware('auth')->name('admin.categorie.create');
Route::post('/admin/categorie', [AdminCategorieController::class,'store']) ->middleware('auth')->name('admin.categorie.store');

Route::get('/admin/categorie/{id}/edit', [AdminCategorieController::class,'edit']) ->middleware('auth')->name('admin.categorie.edit');
Route::put('/admin/categorie/{id}', [AdminCategorieController::class,'update']) ->middleware('auth')->name('admin.categorie.update');
//suppresion de la categorie
Route::delete('/admin/categorie/{id}', [AdminCategorieController::class,'delete']) ->middleware('auth')->name('admin.categorie.delete');


Route::get('/admin/restaurant', [AdminRestaurantController::class,'index']) ->middleware('auth')->name('admin.restaurant.index');

Route::get('/admin/restaurant/create', [AdminRestaurantController::class,'create']) ->middleware('auth')->name('admin.restaurant.create');
Route::post('/admin/restaurant', [AdminRestaurantController::class,'store']) ->middleware('auth')->name('admin.restaurant.store');

Route::get('/admin/restaurant/{id}/edit', [AdminRestaurantController::class,'edit']) ->middleware('auth')->name('admin.restaurant.edit');
Route::put('/admin/restaurant/{id}', [AdminRestaurantController::class,'update']) ->middleware('auth')->name('admin.restaurant.update');

//suppresion de la restaurant
Route::delete('/admin/restaurant/{id}', [AdminRestaurantController::class,'delete']) ->middleware('auth')->name('admin.restaurant.delete');

// Route de breeze
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';