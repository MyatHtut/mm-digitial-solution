<?php

namespace App\Http\Controllers\v1;

use App\DeliveredNotification;
use App\helper\ResponseCodeTrait;
use App\Padcapp;
use App\Saveddevtweet;
use App\Subtopic;
use App\Subtopiclist;
use App\Topic;
use App\Us;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class PADCAppController extends Controller
{
    use ResponseCodeTrait;

    function index()
    {
        $app = Padcapp::with('voterlist')->get();
        return response()->json(["padcapps" => $app]);
    }


}
