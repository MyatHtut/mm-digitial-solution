<?php

namespace App\Http\Controllers\V1;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SaveDevTweetController extends Controller
{
    function index($id)
    {
        $save = User::find($id);
        $save2 = $save->saveddevtweet()->get();
        return response()->json(["dftSavedDevTweets" => $save2]);
    }
}
