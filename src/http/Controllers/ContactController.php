<?php

namespace ayazdev\Contact\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use ayazdev\Contact\Models\Contact;
use ayazdev\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
class ContactController extends Controller
{
    //
	
	public function index(){
		return view('contact::contact');
	}
	
	
	public function send(Request $request){
		
		$messages = [
            'required' => 'The :attribute field is required.'
        ];

        $validator = Validator::make(
            $request->all(), 

            [
                'name' => 'required|string',
                'email' => 'required|string',
                'message' => 'required|string'
            ],

            $messages
        );

		if ($validator->fails()) {    
            $response = $validator->messages();
        }else{
			Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message));
			Contact::create($request->all());
			$response['success'] = 'Email has been sent successfully';
		}
		/*return redirect(route('contact'));*/
		return response()->json($response, 200);
	}
}
