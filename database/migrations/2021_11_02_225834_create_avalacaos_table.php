<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvalacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliacaos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_post_id')->constrained('users');
            $table->foreignId('user_aval_id')->constrained('users');
            $table->enum('star', [1, 2, 3, 4, 5]);
            $table->string('descricao')->nullable();
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
        Schema::dropIfExists('avalacaos');
    }
}
