<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrinho; // Inclui Model Carrinho
use App\Models\User; // Necessário para defineir o dono da Empresa, do produto e cliente

class CarrinhoController extends Controller
{
/* ----------------------------- */
public function store(Request $request){ // Para inserir informação do formulário no Banco de dados

    $carrinho = new Carrinho;

    $carrinho ->prod = $request->prod;
    $carrinho ->informe = $request->informe;
    $carrinho ->valor = $request->valor;
    $carrinho ->dt = $request->dt;
    $carrinho ->obs = $request->obs;

    // Upload da imagem no banco de dados //
    if($request->hasFile('foto')  && $request->file('foto')->isValid()) {
        $requestImage = $request->foto;
        $extension = $requestImage->extension();
        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
        $requestImage->move(public_path('pasta-img/img'), $imageName);
        $carrinho ->foto = $imageName;
    }

    $user = auth()->user(); // Para separar produto por usuário //
    $carrinho ->user_id = $user->id;

    $carrinho ->save();// salva os arquivos no banco //
    return redirect('/home')->with('msg', 'Produto adicionado ao carrinho!');// Retornar para página home //
}
/* ----------------------------- */
}
