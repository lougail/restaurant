<?php

use App\Http\Controllers\Admin\ReservationController as AdminReservationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MentionsLegalesController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [AccueilController::class, 'index'])->name('accueil');

// Route::get('/accueil', [function () {
//     return view('accueil');
// }])->name('accueil');

Route::get('/actu', [ActuController::class, 'index'])->name('actu');

Route::get('/reservation', [ReservationController::class, 'index'])->name('reservation');

// Route::get('/hello/{name}', function ($name) {

//     // traitement des données
//     $name = '"'.$name.'"';

//     return view('hello', [
//         // passage de variables à une vue
//         'name' => $name,
//     ]);
// })->name('hello');


// Route::get('/reservation', function () {
//     return view('reservation');
// })->name('reservation');

Route::get('/menu', [MenuController::class, 'index'])->name('menu');

// Route::get('/menu', function () {
//     return view('menu');
// })->name('menu');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

Route::get('/mentions-legales', [MentionsLegalesController::class, 'index'])->name('mentions-legales');

// Route::get('/mentions_legales', function () {
//     return view('mentions_legales');
// })->name('mentions_legales');

Route::get('/admin/reservation', [AdminReservationController::class, 'index'])->middleware('auth')->name('admin.reservation.index');

Route::get('/admin/reservation/create', [AdminReservationController::class, 'create'])->middleware('auth')->name('admin.reservation.create');
Route::post('/admin/reservation', [AdminReservationController::class, 'store'])->middleware('auth')->name('admin.reservation.store');

Route::get('/admin/reservation/{id}/edit', [AdminReservationController::class, 'edit'])->middleware('auth')->name('admin.reservation.edit');
Route::put('/admin/reservation/{id}/update', [AdminReservationController::class, 'update'])->middleware('auth')->name('admin.reservation.update');

Route::delete('/admin/reservation/{id}', [AdminReservationController::class, 'delete'])->middleware('auth')->name('admin.reservation.delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
