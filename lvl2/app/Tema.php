<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    //propietat que determina els camps que es poden omplir
    protected $fillable = ['nom'];

    //funcio que retorna els llibres del tema
    public function llibres(){
    	return $this->hasMany('App\Llibre');
    }
}
