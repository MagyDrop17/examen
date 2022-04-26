<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CasalController;

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

Route::get('/', [CasalController::class, 'index'])->name('index');
Route::get('/afegir', [CasalController::class, 'afegir'])->name('afegir');
Route::post('/store', [CasalController::class, 'store'])->name('store');
Route::get('/editar/{id}', [CasalController::class, 'show'])->name('editar');
Route::post('/edited', [CasalController::class, 'edited'])->name('edited');
Route::get('/eliminar/{id}', [CasalController::class, 'destroy'])->name('eliminar');