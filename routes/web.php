<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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
use App\Models\Empresa;

Route::get('/', function () { /* Rota Home */
    return view('home');
});

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); /* Rota dashboard */


Route::get('/create-empresa', function () {
    return view('create-empresa');
})->middleware('auth'); /* Rota criar loja */


Route::get('/dashboard', [EmpresaController::class, 'dashboard'])->middleware('auth'); // rota dashboard //


Route::post('/empresas', [EmpresaController::class, 'store'])->middleware('auth'); // Rota Controller das postagens no banco de dados //


Route::get('/user/{user}', function (User $user) { // rota confirmação do usuário //
    return $user;
});




