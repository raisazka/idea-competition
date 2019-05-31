<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUs;
class ViewController extends Controller
{
    public function SendMessage(Request $request){
        $message = new ContactUs;
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->viewed = 1;
        $message->save();
        return redirect('/')->with('Message','Message have been Sent');
    }
}
