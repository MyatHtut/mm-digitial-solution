<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtopiclist extends Model
{
    protected $table='subtopicslists';

    function subtopic()
    {
        return $this->belongsTo("App\Subtopic");
    }

    function requestedtocitem()
    {
        return $this->hasMany("App\Requestedtocitem","subtopicslist_id");
    }
}
