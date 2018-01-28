<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paragraphlist extends Model
{
    function topic(){
        return $this->belongsTo("App\Topic");
    }
    function codesample(){
        return $this->hasMany("App\Codesample");
    }
    protected $hidden=["topic_id"];

}
