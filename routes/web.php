<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MentionsLegalesController;
use App\Http\Controllers\ContactController;
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

//Ici utilisation de controllers pour un gain de teamps et d'espace.

Route::get('/accueil', [AccueilController::class, 'index'])->name('accueil');

// Route::get('/accueil', [function () {
//     return view('accueil');
// }])->name('accueil');

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

Route::get('/mentions-legales', [MentionsLegalesController::class, 'index'])->name('mentions_legales');
    
// Route::get('/mentions_legales', function () {
//     return view('mentions_legales');
// })->name('mentions_legales');