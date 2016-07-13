<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //

    protected $fillable = ['nomeJob', 'parceiro', 'praca', 'codnome', 'codmail', 'nf', 'codtele', 'inicio', 'fim','status'];
}
