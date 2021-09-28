<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto; // Incluindo Model Produto //
use App\Models\User; // Necessário para defineir o dono da Empresa e do produto //

class ProdutoController extends Controller
{

/*-------------------------------*/
public function home(){ // Na home aparecem todos os produtos
    $produtos = Produto::all();

    $search = request('search');
    if($search){
        $produtos = Produto::where([
            ['prod', 'like', '%' .$search. '%']
        ])->get();

    } else {
        $produtos = Produto::all(); // Pegando arquivos do bd, tabela produtos //
    }
    return view('home', ['produtos' => $produtos, 'search' => $search]);
}
/*-------------------------------*/


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


/* ----------------------------- */
public function edit($id){ // Publicando página de edição //

    $user = auth()->user(); // Só aceita edição do dono do produto //

    $produto =  Produto::findOrfail($id);

    if($user->id != $produto->user_id){ // Só aceita edição do dono do produto //
        return redirect('/produtos');
    }

    return view('edit', ['produto' => $produto]);
}
/* ----------------------------- */


/* ----------------------------- */
public function update(Request $request, ){ // Atualização da edição //

    $foto = $request->all();

            // Upload da imagem no banco de dados após edição //
            if($request->hasFile('foto')  && $request->file('foto')->isValid()) {
                $requestImage = $request->foto;
                $extension = $requestImage->extension();
                $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
                $requestImage->move(public_path('img/events'), $imageName);
                $img['image'] = $imageName;
            }

    Produto::findOrfail($request->id)->update($foto);
    return redirect('/produtos')->with('msg', 'Produto editado com sucesso!');
}
/* ----------------------------- */


/* ----------------------------- */
public function carrinho(){ // Rota comprar produtos

    $produtos = Produto::all()

    ->where('user_id', auth()->user()->id); // Permite aparecer apenas dados do usuário logado

    $user = auth()->user(); // Separar produto por usuário //
    $produtos->user_id = $user->id; // Buscar usuário //
    User::where('id', '=', $produtos->user_id)->first()->toArray();

return view('carrinho', ['produtos' => $produtos]);
}
/* ----------------------------- */

}
