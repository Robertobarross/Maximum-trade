<?php

use App\Models\Empresa;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text("empresa");
            $table->integer("cpf");
            $table->integer("cnpj");
            $table->text("endereco");
            $table->text("cidade");
            $table->text("bairro");
            $table->text("uf");
            $table->text("proprietario");
            $table->integer("numero");
            $table->string("contratosocial"); /* Contrato social */
            $table->string("registrocomercial"); /* Registro na junta comercial */
            $table->string("inscricaoestadual"); /* Inscrição estadual */
            $table->string("alvara");
            $table->text("complemento");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empresas');
    }
}
