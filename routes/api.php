<?php

use App\Http\Controllers\DisabledDaysController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\ServicesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 
Route::get('/reservations', [ReservationsController::class, 'index']); // Listar Reservaciones 
Route::get('/reservations/{id_plan}', [ReservationsController::class, 'show']); // Listar Reservaciones por id_plan
Route::get('/servicies', [ServicesController::class, 'index']); // Listar Servicios
Route::get('/servicies/{id}', [ServicesController::class, 'show']); // Listar Servicios por id
Route::get('/days-disabled', [DisabledDaysController::class, 'index']); // Listar dias deshabilitados
Route::get('/days-disabled/{id}', [DisabledDaysController::class, 'show']); // Listar dias deshabilitados por id