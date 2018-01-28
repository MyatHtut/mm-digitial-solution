<?php

namespace App\Http\Controllers\V1;

use App\Topic;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TopicController extends Controller
{
    function index()
    {

        $app = Topic::with(['paragraphlist.codesample', 'style', 'subtopic.subtopicList', 'topicheader'])->get();

        return response()->json(["dftTopics" => $app]);
    }

}
