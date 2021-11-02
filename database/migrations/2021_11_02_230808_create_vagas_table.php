<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVagasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vagas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_post_id')->constrained('users');
            $table->string('titulo');
            $table->date('dt_abertura');
            $table->date('dt_fechamento');
            $table->longText('descricao');
            $table->enum('status', ['ativo', 'inativo']);
            $table->date('reported_at')->nullable();
            $table->string('report_description')->nullable();
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
        Schema::dropIfExists('vagas');
    }
}
