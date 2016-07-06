<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Criação da tabela CriarUsuario
        Schema::create('usuario', function ($table){
            $table->increments('id');
            $table->string('email', 255)->unique();
            $table->string('nome', 255);
            $table->string('senha', 60);
            $table->enum('tipo', array('autor','admin'));
            $table->string('remember_token', 100)->nullable();
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
        //Excluir a tabele usuario

        Schema::drop('usuario');
    }
}
