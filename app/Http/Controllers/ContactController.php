<?php

namespace App\Http\Controllers;

use Mail;
use Session;
use Validator;
use App\Mail\ContactMail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function post(Request $request) {
    	$validator = Validator::make($request->all(), [
            'name' => 'required|min:2|max:100',
            'email' => 'required|email',
            'subject' => 'required|min:2',
            'comment' => 'required|min:3',
        ]);

        if ($validator->passes()) {
            try {
	            Mail::to('disabledbyfb@gmail.com')->send(new ContactMail($request));
	        	Session::flash('success', __('messages.contact_success'));
	        } catch (Exception $e) {
	            Session::flash('error', __('messages.contact_error'));
	        }

        	return response()->json([
	        	'status' => true
	        ]);
        } else {
    	    return response()->json([
                'errors' => $validator->getMessageBag()->toArray()
            ]);
        }
    }
}
