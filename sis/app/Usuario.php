<?php

namespace App;

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\RemindableInterface;


class Usuario extends Eloquent implements UserInterface, RemindableInterface
{
    protected $table = 'usuarios';
    protected  $hidden = array('senha');

    public function getAuthIdentifier(){
        return $this->getKey();
    }

    public function getAuthPassaword(){
        return $this->senha;
    }

    public function getRememderEmail(){
        return $this->email;
    }

    public function getRememberToken(){
        return $this->remenber_token;
    }

    public  function setRememberToken($value){

        $this->remember_token = $value;
    }

    public function getRememberTokenName(){

        return 'remember_token';
    }
}
