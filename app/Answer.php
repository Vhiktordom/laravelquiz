<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Quiz;

class Answer extends Model
{
    //
    public function quiz(){
    	return $this->belongsTo('App\Quiz');
    }
}
