<?php

namespace App\Http\Controllers;

use App\subscribers;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function viewSubscribers(){
        $subscribers = subscribers::get();
        $subscribers = json_decode(json_encode($subscribers));

        //return $subscribers;
        return view('admin.viewSubscribers')->with(compact('subscribers'));

    }
}
