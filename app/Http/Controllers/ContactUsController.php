<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Session;

class ContactUsController extends Controller
{   
    function sendMessage(Request $req){
        $message=new message;

        $message->first_name=$req->fName;
        $message->last_name=$req->lName;
        $message->user_email=$req->email;
        $message->user_phone=$req->phone;
        $message->user_message=$req->msg;
        $message->save();
        
        Session::flash('MessageSent', 'Message sent successfully!'); 

        return redirect('contact');
    }
    
}
