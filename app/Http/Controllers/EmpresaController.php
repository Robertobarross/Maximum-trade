<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa; // Incluindo Model Empresa //
use App\Models\User; // Necessário para defineir o dono da Empresa //


class EmpresaController extends Controller
{
    /*-----------------------------------------------------------------------------------------------------------------*/
    public function create(){ // Rota da página criar eventos //
        return view('create-empresa');
    }
    /*-----------------------------------------------------------------------------------------------------------------*/


    /*-----------------------------------------------------------------------------------------------------------------*/
    public function store(Request $request){ // Para inserir informação do formulário no Banco de dados //

        $empresa = new Empresa;

        // Variáveis //
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

        $user_id = auth()->user(); // Para separar empresa por usuário //
        $empresa->user_id = $user_id->id;

        $empresa->save();// salva os arquivos no banco //
        return redirect('/create-empresa')->with('msg', 'Loja cadastradas com sucesso!');// Retornar para página criar empresa //
    }
/*-----------------------------------------------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------------------------------------------*/
    public function dashboard(){ // Permite que as informações sobre a empresa apareçam na view dashboard //
        $empresa = new Empresa;

        $empresas = Empresa::all();

        $user = auth()->user(); // Separar empresa por usuário //
        $empresa->user = $user->id; // Buscar usuário //

        $empresaOwner = User::where('id', $empresa->user)->first()->toArray();

        return view('dashboard', ['empresas' => $empresas, 'empresaOwner' => $empresaOwner]);
    }
/*-----------------------------------------------------------------------------------------------------------------*/


/*-----------------------------------------------------------------------------------------------------------------*/
    public function show($id){ // Buscar loja do usuário que está logado //

        $empresa = Empresa::findOrFail($id);

        return view('show', ['empresa' => $empresa]);
    }
/*-----------------------------------------------------------------------------------------------------------------*/

}

