<?php

namespace App\Http\Controllers\V1;

use App\Subtopiclist;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RequestedTopicController extends Controller
{
    function index()
    {
        $requestTopic = Subtopiclist::with('requestedtocitem')->get();
        return response()->json(["dftRequestedTocItems" => $requestTopic]);
    }

}
