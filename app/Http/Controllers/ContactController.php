<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use App\Mail\AdminMail;
use Mail;

class ContactController extends Controller
{
    public function contact(){
    	return view('frontend.contact');
    }

    public function send(Request $request)
    {
    	$data = $request->all();
    	$data = Enquiry::create($data);
    	$email = "inquiry@easylink.edu.np";
    	
    	Mail::to($email)->send(new AdminMail($data));
    	if($data){
    		return redirect()->back()->with('success',"Thank You!!");
    	}
    	return redirect()->back()->with('error',"Contact creation failed");
    }
}
