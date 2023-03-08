<?php

use App\Http\Controllers\Admin\PlatController as AdminPlatController;
use App\Http\Controllers\Admin\ReservationController as AdminReservationController;
use App\Http\Controllers\ActuController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MentionsLegalesController;
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

// routes du front office

// page d'accueil
Route::get('/', [AccueilController::class, 'index'])->name('accueil');

Route::get('/actu', [ActuController::class, 'index'])->name('actu');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation');

Route::get('/mentions-legales', function () {
    return view('mentions-legales');
})->name('mentions-legales');



// routes du back office



// CRUD des plats
Route::get('/admin/plat', [AdminPlatController::class, 'index'])->middleware('auth')->name('admin.plat');

// @todo liste des plats
Route::get('/admin/plat/create', [AdminPlatController::class, 'create'])->middleware('auth')->name('admin.plat.create');
Route::post('/admin/plat', [AdminPlatController::class, 'create'])->middleware('auth')->name('admin.plat.store');

// @todo modification des plats
Route::get('/admin/plat/{id}/edit', [AdminPlatController::class, 'edit'])->middleware('auth')->name('admin.plat.edit');
Route::post('/admin/plat/{id}/edit', [AdminPlatController::class, 'update'])->middleware('auth')->name('admin.plat.update');

// @todo suprression des plats
Route::delete('/admin/plat/{id}', [AdminPlatController::class, 'delete'])->middleware('auth')->name('admin.plat.delete');



//CRUD reservation
Route::get('/admin/reservation', [AdminReservationController::class, 'index'])->middleware('auth')->name('admin.reservation.index');

// Creation = POST
Route::get('/admin/reservation/create', [AdminReservationController::class, 'create'])->middleware('auth')->name('admin.reservation.create');
Route::post('/admin/reservation', [AdminReservationController::class, 'store'])->middleware('auth')->name('admin.reservation.store');

// Modification = PUT
Route::get('/admin/reservation/{id}/edit', [AdminReservationController::class, 'edit'])->middleware('auth')->name('admin.reservation.edit');
Route::put('/admin/reservation/{id}', [AdminReservationController::class, 'update'])->middleware('auth')->name('admin.reservation.update');

// Suppression = DELETE
Route::delete('/admin/reservation/{id}', [AdminReservationController::class, 'delete'])->middleware('auth')->name('admin.reservation.delete');



//CRUD actu
Route::get('/admin/actu', [AdminActuController::class, 'index'])->middleware('auth')->name('admin.actu.index');

// Creation = POST
Route::get('/admin/actu/create', [AdminActuController::class, 'create'])->middleware('auth')->name('admin.actu.create');
Route::post('/admin/actu', [AdminActuController::class, 'store'])->middleware('auth')->name('admin.actu.store');

// Modification = PUT
Route::get('/admin/actu/{id}/edit', [AdminActuController::class, 'edit'])->middleware('auth')->name('admin.actu.edit');
Route::put('/admin/actu/{id}', [AdminActuController::class, 'update'])->middleware('auth')->name('admin.actu.update');

// Suppression = DELETE
Route::delete('/admin/actu/{id}', [AdminActuController::class, 'delete'])->middleware('auth')->name('admin.actu.delete');



//CRUD catégorie
Route::get('/admin/categoriecategoriecategorie', [AdminCategorieController::class, 'index'])->middleware('auth')->name('admin.categorie.index');

// Creation = POST
Route::get('/admin/categorie/create', [AdminCategorieController::class, 'create'])->middleware('auth')->name('admin.categorie.create');
Route::post('/admin/categorie', [AdminCategorieController::class, 'store'])->middleware('auth')->name('admin.categorie.store');

// Modification = PUT
Route::get('/admin/categorie/{id}/edit', [AdminCategorieController::class, 'edit'])->middleware('auth')->name('admin.categorie.edit');
Route::put('/admin/categorie/{id}', [AdminCategorieController::class, 'update'])->middleware('auth')->name('admin.categorie.update');

// Suppression = DELETE
Route::delete('/admin/categorie/{id}', [AdminCategorieController::class, 'delete'])->middleware('auth')->name('admin.categorie.delete');



//CRUD etiquette
Route::get('/admin/etiquette', [AdminEtiquettenController::class, 'index'])->middleware('auth')->name('admin.etiquette.index');

// Creation = POST
Route::get('/admin/etiquette/create', [AdminEtiquetteController::class, 'create'])->middleware('auth')->name('admin.etiquette.create');
Route::post('/admin/etiquette', [AdminEtiquetteControlEtiquetteler::class, 'store'])->middleware('auth')->name('admin.etiquette.store');

// Modification = PUT
Route::get('/admin/etiquette/{id}/edit', [AdminEtiquetteController::class, 'edit'])->middleware('auth')->name('admin.etiquette.edit');
Route::put('/admin/etiquette/{id}', [AdminEtiquetteController::class, 'update'])->middleware('auth')->name('admin.etiquette.update');

// Suppression = DELETE
Route::delete('/admin/etiquette/{id}', [AdminEtiquetteController::class, 'delete'])->middleware('auth')->name('admin.etiquette.delete');



//CRUD photo ambiance
Route::get('/admin/photo-ambiance', [AdminPhotoAmbianceController::class, 'index'])->middleware('auth')->name('admin.photo-ambiance.index');

// Creation = POST
Route::get('/admin/photo-ambiance/create', [AdminPhotoAmbianceController::class, 'create'])->middleware('auth')->name('admin.photo-ambiance.create');
Route::post('/admin/photo-ambiance', [AdminPhotoAmbianceController::class, 'store'])->middleware('auth')->name('admin.photo-ambiance.store');

// Modification = PUT
Route::get('/admin/photo-ambiance/{id}/edit', [AdminPhotoAmbianceController::class, 'edit'])->middleware('auth')->name('admin.photo-ambiance.edit');
Route::put('/admin/photo-ambiance/{id}', [AdminPhotoAmbianceController::class, 'update'])->middleware('auth')->name('admin.photo-ambiance.update');

// Suppression = DELETE
Route::delete('/admin/Photo-ambiance/{id}', [AdminPhotoAmbianceController::class, 'delete'])->middleware('auth')->name('admin.photo-ambiance.delete');



//CRUD reservation
Route::get('/admin/reservation', [AdminReservationController::class, 'index'])->middleware('auth')->name('admin.reservation.index');

// Creation = POST
Route::get('/admin/reservation/create', [AdminReservationController::class, 'create'])->middleware('auth')->name('admin.reservation.create');
Route::post('/admin/reservation', [AdminReservationController::class, 'store'])->middleware('auth')->name('admin.reservation.store');

// Modification = PUT
Route::get('/admin/reservation/{id}/edit', [AdminReservationController::class, 'edit'])->middleware('auth')->name('admin.reservation.edit');
Route::put('/admin/reservation/{id}', [AdminReservationController::class, 'update'])->middleware('auth')->name('admin.reservation.update');

// Suppression = DELETE
Route::delete('/admin/reservation/{id}', [AdminReservationController::class, 'delete'])->middleware('auth')->name('admin.reservation.delete');



// routes de breeze
Route::get('/dashboard', function () {

    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';