<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessagesController extends Controller
{
    function showMessages(){
        $data=Message::all();
        return view('user-messages', ['messages'=>$data]);
    }
}
