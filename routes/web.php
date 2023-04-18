<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CorpsController;
use App\Http\Controllers\PolesController;
use App\Http\Controllers\FilterController;

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

// Route::get('/', function () {
//     return view('recherch');
// });


Route::get('/',[CorpsController::class, 'index']);
Route::get('/get_grades',[CorpsController::class, 'get_grades']);

///////////////////////////////////////////

Route::get('/get_division',[PolesController::class, 'get_division']);
Route::get('/get_services',[PolesController::class, 'get_services']);

///////////////////////////////////////////

Route::get('/employes',[FilterController::class, 'filteremployes']);
