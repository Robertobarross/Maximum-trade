<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto; // Incluindo Model Produto //
use App\Models\User; // Necessário para defineir o dono da Empresa e do produto //

class ProdutoController extends Controller
{

/* ----------------------------- */
public function store(Request $request){ // Para inserir informação do formulário no Banco de dados

    $produto = new Produto;

    $produto->prod = $request->prod;
   // $produto->foto = $request->foto;
    $produto->informe = $request->informe;
    $produto->valor = $request->valor;
    $produto->dt = $request->dt;
    $produto->obs = $request->obs;

    // Upload da imagem no banco de dados //
    if($request->hasFile('foto')  && $request->file('foto')->isValid()) {
        $requestImage = $request->foto;
        $extension = $requestImage->extension();
        $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
        $requestImage->move(public_path('pasta-img/img'), $imageName);
        $produto->foto = $imageName;
    }

    $user = auth()->user(); // Para separar produto por usuário //
    $produto->user_id = $user->id;

    $produto->save();// salva os arquivos no banco //
    return redirect('/cadprod')->with('msg', 'Produto cadastrado com sucesso!');// Retornar para página cadprod //
}
/* ----------------------------- */


/* ----------------------------- */
public function cadprod(){ // Rota cadstrar produtos //
    return view('cadprod');
}
/* ----------------------------- */


/* ----------------------------- */
public function produtos(){ // Rota meus produtos, mostra os prudos do ususário no arquivo produtos.blade.php //

    $produtos = Produto::all()

    ->where('user_id', auth()->user()->id); // Permite aparecer apenas dados do usuário logado

    $user = auth()->user(); // Separar empresa por usuário //
    $produtos->user_id = $user->id; // Buscar usuário //

    $produtoOwner = User::where('id', '=', $produtos->user_id)->first()->toArray();

    return view('produtos', ['produtos' => $produtos, 'produtoOwner' => $produtoOwner ]);
}
/* ----------------------------- */

}
