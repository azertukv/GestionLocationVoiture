<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContratController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FlotteController;
use App\Http\Controllers\ReservationController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/ajout/client', function () {
    return view('client.ajout');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/contrat/all',[ContratController::class, 'index'])->name('show_contrat');
Route::get('/contrat/search/{id}',[ContratController::class, 'show']);
Route::post('/contrat/add',[ContratController::class, 'store']);
Route::post('/contrat/update/{id}',[ContratController::class, 'update']);
Route::delete('/contrat/delete/{id}',[ContratController::class, 'destroy']);

Route::get('/client/all',[ClientController::class, 'index'])->name('all_clients');
Route::get('/client/search/{id}',[ClientController::class, 'show'])->name('show_client');
Route::post('/client/add',[ClientController::class, 'store'])->name('add_client');
Route::post('/client/update/{id}',[ClientController::class, 'update'])->name('update_client');
Route::delete('/client/delete/{id}',[ClientController::class, 'destroy'])->name('delete_client');
Route::get('/flotte',[FlotteController::class, 'index'])->name('all_flottes');
Route::get('/flotte/{id}',[FlotteController::class, 'show'])->name('show_flotte');
Route::post('/ajout/flotte',[FlotteController::class, 'store'])->name('add_flotte');
Route::post('update/flotte/{id}',[FlotteController::class, 'update'])->name('update_flotte');
Route::delete('delete/flotte/{id}',[FlotteController::class, 'destroy'])->name('delete_flotte');

Route::get('/reservation/all',[ReservationController::class, 'index'])->name('all_reservations');
Route::get('/reservation/search/{id}',[ReservationController::class, 'show'])->name('show_reservations');
Route::post('/reservation/add',[ReservationController::class, 'store'])->name('add_reservations');
Route::post('/reservation/update/{id}',[ReservationController::class, 'update'])->name('update_reservations');
Route::delete('/reservation/delete/{id}',[ReservationController::class, 'destroy'])->name('delete_reservations');

require __DIR__.'/auth.php';
