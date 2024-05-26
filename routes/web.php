<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\SearchController;
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


//Rutas de la API para obtener los países
Route::get('countries', [CountryController::class, 'getAll']);
Route::get('countries/{id}', [CountryController::class, 'getOne']);

//Rutas de la API para obtener las ciudades
Route::get('cities', [CityController::class, 'getAll']);
Route::get('cities/{id}/by_country', [CityController::class, 'getByCityId']);
Route::get('cities/{id}', [CityController::class, 'getOne']);

//Rutas de la API para historial de consultas
Route::get('history', [HistoryController::class, 'getAll']);
Route::post('history', [HistoryController::class, 'saveHistory']);