<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/contrat/all',[ContratController::class, 'index'])->name('all');
Route::get('/contrat/search/{id}',[ContratController::class, 'show']);
Route::post('/contrat/add',[ContratController::class, 'store']);
Route::post('/contrat/update/{id}',[ContratController::class, 'update']);
Route::delete('/contrat/delete/{id}',[ContratController::class, 'destroy']);

Route::get('/client/all',[ClientController::class, 'index'])->name('all');
Route::get('/client/search/{id}',[ClientController::class, 'show']);
Route::post('/client/add',[ClientController::class, 'store']);
Route::post('/client/update/{id}',[ClientController::class, 'update']);
Route::delete('/client/delete/{id}',[ClientController::class, 'destroy']);
