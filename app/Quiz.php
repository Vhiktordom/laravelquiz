<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    //
    public function answers(){
    	return $this->hasMany('App\Answer');
    }

    protected $fillable = ['question','first_opt', 'second_opt', 'third_opt',];
    
}
