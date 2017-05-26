<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;

class ContactController extends Controller
{
    //
    public function create(){
        $confirm = 'Thank you. I will follow up with you soon!';
        
        $success = true;
    	return view('pages.contact', ['confirm' => $confirm, 'success' => $success]);

    }

    public function store(ContactFormRequest $request){

    	\Mail::send('emails.contact',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message){

        	$message->from('brianwardwell79@gmail.com');
        	$message->to('briwar10@outlook.com', 'Admin')->subject('Brian Wardwell\'s Laravel Feedback');
    	});

  		return \Redirect::route('contact')->with('message', 'Thanks for the message. I will be following up with you soon!');
    }
}
