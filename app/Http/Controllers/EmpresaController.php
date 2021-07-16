<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa; // Incluindo Model Empresa //
use App\Models\User; // Necessário para defineir o dono da Empresa //


class EmpresaController extends Controller
{



    public function create(){ // Rota da página criar eventos //
        return view('create-empresa');
    }

    public function store(Request $request){

        $empresa = new Empresa();

        $empresa->empresa = $request->empresa;
        $empresa->cpf = $request->cpf;
        $empresa->cnpj = $request->cnpj;
        $empresa->endereco = $request->endereco;
        $empresa->cidade = $request->cidade;
        $empresa->bairro = $request->bairro;
        $empresa->uf = $request->uf;
        $empresa->proprietario = $request->proprietario;
        $empresa->numero = $request->numero;
        $empresa->contratosocial = $request->contratosocial;
        $empresa->registrocomercial = $request->registrocomercial;
        $empresa->inscricaoestadual = $request->inscricaoestadual;
        $empresa->alvara = $request->alvara;
        $empresa->complemento = $request->complemento;

    }


    //$User = auth()->user(); // Para separar evento por usuário //
   // $empresa->user_id = $user->id;


  //  $empresa->save();// Para que a postagem fique gravada no banco de dados //

    /* Após a postagem, o usuário será redirecionado para página criar eventos. Aparecerá a mensagem 'Evento criado com sucesso!'  */
//  return redirect('/events/create')->with('msg', 'Evento criado com sucesso!');
}
