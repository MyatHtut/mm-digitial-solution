<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codesample extends Model
{
    protected $table="codesamples";

    function paragraphList(){
        return $this->belongsTo("App\Paragraphlist");
    }
    protected $hidden=["paragraphlist_id"];
}
