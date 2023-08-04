<?php

use App\Http\Controllers\GestionFilmController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('deconnecter','App\Http\Controllers\ProjectionController@logout')->name('deconnexion');

 Route::get('/', function () {
     return view('index');
 });
 Route::get('reserver_place/{id}','App\Http\Controllers\ProjectionController@reserve')->name('reservation');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('liste','App\Http\Controllers\ProjectionController@ListeProjection')->name('liste');
    Route::post('enregistrer/{id}','App\Http\Controllers\ProjectionController@EnregistrerReservation')->name('enregistrer_reservation');
    Route::get('place_reservee','App\Http\Controllers\ProjectionController@ListeReservation')->name('liste_reservation');
    Route::get('place_creneau','App\Http\Controllers\ProjectionController@ListeCreneau')->name('liste_creneau');
    Route::resource('/gestion','App\Http\Controllers\GestionFilmController');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

