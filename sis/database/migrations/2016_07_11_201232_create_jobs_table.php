<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomeJob', 60);
            $table->integer('parceiro')->unsigned();
            $table->integer('praca')->unsigned();
            $table->string('codnome', 60);
            $table->string('codemail',60);
            $table->string('codtele', 20);
            $table->boolean('nf');
            $table->dateTime('inicio');
            $table->dateTime('fim');
            $table->interger('status')->unsigned();
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
        Schema::drop('jobs');
    }
}
