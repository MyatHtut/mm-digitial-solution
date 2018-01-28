<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requestedtocitem extends Model
{
    protected $table="requestedtocitems";
    protected $hidden=['id','subtopicslist_id'];

    function subtopiclist()
    {
        return $this->belongsTo("App\Subtopiclist")->select(['id']);
    }



}
