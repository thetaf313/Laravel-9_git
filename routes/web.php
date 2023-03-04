<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\AttributionController;
use App\Http\Controllers\AccesController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('Back.partials.main');
    })->name('dashboard');
});
Route::resource('/app/client',ClientController::class)->middleware('auth');
Route::resource('/app/Module',ModuleController::class)->middleware('auth');
Route::get('/module-activation/{id}', [ModuleController::class, 'state'])->name('Module.state');
Route::resource('/app/groupe',GroupeController::class)->middleware('auth');
Route::resource('/app/attribution',AttributionController::class)->middleware('auth');
Route::resource('/app/acces',AccesController::class)->middleware('auth');


