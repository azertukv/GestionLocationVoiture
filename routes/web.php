<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContratController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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
require __DIR__.'/auth.php';
