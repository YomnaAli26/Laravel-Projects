<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Pusher\Pusher;


class MessageController extends Controller
{
    // get all Messages
    public function getMessage($user_id)
    {
        $my_id = Auth::id();

        // Make read all unread message sent
        Message::where(['from' => $user_id, 'to' => $my_id])->update(['is_read' => 1]);

        // Get all message from selected user
        $messages = Message::where(function ($query) use ($user_id, $my_id) {
            $query->where('from', $user_id)->where('to', $my_id);
        })->oRwhere(function ($query) use ($user_id, $my_id) {
            $query->where('from', $my_id)->where('to', $user_id);
        })->get();

        return view('notifications.index', ['notifications' => $messages]);
    }

    // send new message
    public function sendMessage(Request $request)
    {
        $from = Auth::id();
        $to = $request->receiver_id;
        $message = $request->message;

        $data = new Message();
        $data->from = $from;
        $data->to = $to;
        $data->message = $message;
        $data->is_read = 0; // message will be unread when sending message
        $data->save();

        return $this->sendRequest($from, $message, $to);
    }
    public function sendRequest($from, $message, $to){
        $users = DB::select("SELECT * FROM notifications WHERE notifications.to = " . Auth::id() . " ");
        if(isset($users)){
            foreach ($users as $p) {
                $Data = $p->to;
            }}
        $options = array(
            'cluster' => env('PUSHER_APP_CLUSTER'),
            'encrypted' => true
        );
        $pusher = new Pusher(
            env('PUSHER_APP_KEY'),
            env('PUSHER_APP_SECRET'),
            env('PUSHER_APP_ID'),
            $options
        );
        // notification
        $data = ['from' => $from, 'to' => $to];
        $notify = 'notify-channel';
        $pusher->trigger($notify, 'App\\Events\\Notify', $data);
    }
}
