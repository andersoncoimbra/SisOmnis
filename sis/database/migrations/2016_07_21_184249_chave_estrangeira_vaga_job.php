<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChaveEstrangeiraVagaJob extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vagas_jobs', function (Blueprint $table) {
            //
            $table->foreign('id_job')->references('id')->on('jobs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vagas_jobs', function (Blueprint $table)
        {
            $table->dropForeign('vagas_jobs_id_job_foreign');
        });
    }
}
