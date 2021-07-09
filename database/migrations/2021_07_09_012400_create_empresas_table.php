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
            $table->text("cnpj");
            $table->text("endereco");
            $table->text("cidade");
            $table->text("bairro");
            $table->text("uf");
            $table->text("proprietario");
            $table->integer("numero");
            $table->string("contrato-social");
            $table->string("registro-junta-comercial");
            $table->string("inscricao-estadual");
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
