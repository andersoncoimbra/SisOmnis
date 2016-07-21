<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //

    protected $fillable = ['nomeJob', 'parceiro', 'praca', 'codnome', 'codmail', 'nf', 'codtele', 'inicio', 'fim','status'];

    public function vagaJobs()
    {
        return $this->hasMany(VagasJob::class, 'id_job');
    }
}
