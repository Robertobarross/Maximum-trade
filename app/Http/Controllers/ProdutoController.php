<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto; // Incluindo Model Produto //
use App\Models\User; // Necessário para defineir o dono da Empresa e do produto //

class ProdutoController extends Controller
{
      /* ------------------------------ */
      public function create(){ // Rota cadastrar produtos
        return view('cadprod');
    }
/* ----------------------------- */
public function store(Request $request){ // Para inserir informação do formulário no Banco de dados //

    $produto = new Produto;

    $produto->produto = $request->produto;
    $produto->foto = $request->foto;
    $produto->informe = $request->informe;
    $produto->valor = $request->valor;
    $produto->data = $request->data;
    $produto->obs = $request->obs;

    $user = auth()->user(); // Para separar produto por usuário //
    $produto->user_id = $user->id;

    $produto->save();// salva os arquivos no banco //
    return redirect('/cadprod')->with('msg', 'Produto cadastrado com sucesso!');// Retornar para página cadprod //
}
}
