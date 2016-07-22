<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChaveEstrageiraExtrasVagasJobsParaVagaJob extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('extras_vagas_jobs', function (Blueprint $table) {
            //
            $table->foreign('id_vaga_job')->references('id')->on('vaga_jobs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('extras_vagas_jobs', function (Blueprint $table) {
            //
            $table->dropForeign('extras_vagas_jobs_id_vaga_job_foreign');

        });
    }
}
