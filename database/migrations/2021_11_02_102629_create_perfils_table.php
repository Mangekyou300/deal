<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfils', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('avatar')->nullable();
            $table->string('nome_fantasia');
            $table->string('cpf_cnpj', 18);
            $table->date('dt_nascimento')->nullable();
            $table->string('telefone', 20);
            $table->string('telefone2', 20)->nullable();
            $table->string('cep', 10);
            $table->string('logradouro', 120);
            $table->string('numero', 50);
            $table->string('complemento', 20)->nullable();
            $table->string('bairro', 70);
            $table->string('cidade', 70);
            $table->text('sobre_mim')->nullable();
            $table->char('uf', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfils');
    }
}
