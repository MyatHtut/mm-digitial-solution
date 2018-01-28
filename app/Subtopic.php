<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subtopic extends Model
{
    protected $table='subtopics';

    function subtopicList()
    {
        return $this->hasMany("App\Subtopiclist");
    }
}
