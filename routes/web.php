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
use App\Http\Controllers\ProdutoController;
use App\Models\Produto;

/*
Route::get('/', function () {
   return view('home');
});
*/

/*-----------------------------------------------*/
Route::get('/', [ProdutoController::class, 'home']); // Rota home produtos
/*-----------------------------------------------*/



/*-----------------------------------------------*/
Route::get('/create-empresa', function () {
    return view('create-empresa');
})->middleware('auth'); /* Rota criar loja */
/*-----------------------------------------------*/



/*-----------------------------------------------*/
Route::get('/dashboard', [EmpresaController::class, 'dashboard'])->middleware('auth'); // rota dashboard //
/*-----------------------------------------------*/



/*-----------------------------------------------*/
Route::post('/empresas', [EmpresaController::class, 'store'])->middleware('auth'); // Rota Controller das postagens no banco de dados //
/*-----------------------------------------------*/



/*-----------------------------------------------*/
Route::get('/empresas/{id}', [EmpresaController::class, 'show'])->middleware('auth'); // Rota mostrar empresa //
/*-----------------------------------------------*/



/*-----------------------------------------------*/
Route::get('/user/{user}', function (User $user) { // rota confirmação do usuário //
    return $user;
});
/*-----------------------------------------------*/



/*-----------------------------------------------*/
Route::get('/cadprod', [ProdutoController::class, 'cadprod'])->middleware('auth'); // Rota cadastrar produtos
/*-----------------------------------------------*/



/*-----------------------------------------------*/
Route::post('/produtos', [ProdutoController::class, 'store'])->middleware('auth'); // Rota postar produtos no bd
/*-----------------------------------------------*/



/*-----------------------------------------------*/
Route::get('produtos', [ProdutoController::class, 'produtos'])->middleware('auth'); // Rota meus produtos
/*-----------------------------------------------*/


/*-----------------------------------------------*/
Route::get('/produtos/edit/{id}', [ProdutoController::class, 'edit'])->middleware('auth');// Rota de Editar produtos //
/*-----------------------------------------------*/


Route::put('/produtos/update/{id}', [ProdutoController::class, 'update'])->middleware('auth'); // Para fazer a atualização da edição //

/* -------------------------------------------- */
Route::get('/produtos/carrinho/{id}', [ProdutoController::class, 'carrinho'])->middleware('auth'); // Rota comprar produtos
/* -------------------------------------------- */
