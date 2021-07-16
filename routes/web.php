<?php

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

use App\Http\Controllers\EmpresaController;


Route::get('/', function () { /* Rota Home */
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); /* Rota dashboard */


Route::get('/create-empresa', function () {
    return view('create-empresa');
})->middleware('auth'); /* Rota criar loja */

Route::post('/empresas', [EmpresaController::class, 'store'])->middleware('auth'); // Rota Controller das postagens //



