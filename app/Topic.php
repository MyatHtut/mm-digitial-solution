<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    function paragraphlist(){
        return $this->hasMany("App\Paragraphlist");
    }

    function style(){
        return $this->hasOne("App\Style");
    }
    function subtopic(){
        return $this->hasOne("App\Subtopic");
    }

    function topicheader(){
        return $this->hasOne("App\Topicheader");
    }

}
