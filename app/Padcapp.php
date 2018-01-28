<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Padcapp extends Model
{
    function voterlist(){
        return $this->hasMany("App\Voterlist");
    }



}
