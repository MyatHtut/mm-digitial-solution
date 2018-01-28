<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Saveddevtweet extends Model
{
    protected $hidden = ['pivot'];
    protected $table="saveddevtweets";

    public function userSave()
    {
        return $this->belongsToMany('App\User','saveddevtweets_users','saveddevtweet_id','user_id');
    }
}
