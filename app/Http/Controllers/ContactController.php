<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
    	$details = [
    		'name'=>$request->name,
    		'email'=>$request->email,
    		'subject'=>$request->subject,
    		'message'=>$request->message

    	];
    	Mail::to('itjobsmm@gmail.com')->send(new ContactMail($details));
    	return back()->with('message_sent','Your Message has been sent sucessfully!');

    }
}
