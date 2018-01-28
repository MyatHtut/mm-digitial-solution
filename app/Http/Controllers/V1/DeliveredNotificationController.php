<?php

namespace App\Http\Controllers\V1;

use App\DeliveredNotification;
use Illuminate\Routing\Controller;
use Validator;
use App\helper\ResponseCodeTrait;
use Illuminate\Http\Request;

class DeliveredNotificationController extends Controller
{
    use ResponseCodeTrait;


    function index()
    {
        $notiData = DeliveredNotification::all();
        return response()->json(["dftDeliveredNotifications" => $notiData]);
    }

    function store(Request $request)
    {
        $input = $request->all();
        $message = "";
        $validator = $this->validatorNotification($input);
        if ($validator->fails()) {
            $message .= implode(",", $validator->messages()->all());
            return $this->respondErrorClient($message);
        }

        $deliverNoti = new DeliveredNotification();
        $deliverNoti->serverResponse = $request->input("serverResponse");
        $deliverNoti->deliveredTime = $request->input("deliveredTime");
        $deliverNoti->messageType = $request->input("messageType");
        $deliverNoti->msg = $request->input("msg");
        $deliverNoti->usersNotOpened = $request->input("usersNotOpened");
        $deliverNoti->usersOpened = $request->input("usersOpened");
        $deliverNoti->save();
        return $this->respondCreatedNodata("DeliverNotification Created");
    }

    private function validatorNotification($data)
    {
        return Validator::make($data, [
            'msg' => 'required',
        ]);
    }
}
