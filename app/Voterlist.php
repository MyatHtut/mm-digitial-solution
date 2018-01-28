<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voterlist extends Model
{
    function padcapp()
    {
        return $this->belongsTo("App\Padcapp");
    }
    protected $hidden=["padcapp_id"];
}
