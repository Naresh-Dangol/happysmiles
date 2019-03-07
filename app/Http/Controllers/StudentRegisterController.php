<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\StudentRegister;
use App\Mail\SampleDocument;
use App\Mail\DocumentToUser;
use App\Models\Destination;
use App\Models\Intake;
use App\Mail\SendMail;
use Mail;

class StudentRegisterController extends Controller
{
    public function register(Request $request){
    	$data = $request->all();

        $destinationDetails = Destination::where('id',$data['destination'])->first();
        $data['destination'] = $destinationDetails->destination;

        $intakeDetails = Intake::where('id',$data['intake'])->first();
        $data['intake'] = $intakeDetails->intake;

    	$email = "inquiry@easylink.edu.np";
    	Mail::to($data['email'])->send(new SendMail($data));
    	Mail::to($email)->send(new StudentRegister($data));
    	if($data){
    		return redirect()->back()->with('success',"Register Success!!");
    	}
    	return redirect()->back()->with('error',"Failed to Register");
    }
    
    public function sample_document_form(Request $request){
    	$data = $request->all();
    	$user_email = $request->input('email');
    	$title = $request->input('title');
    	$attachment = $request->input('attachment');
    	//dd($data);
    	$email = "inquiry@easylink.edu.np";
    	Mail::to($email)->send(new SampleDocument($data));
    	Mail::to($user_email)->send(new DocumentToUser($data));
    	if($data){
    		return redirect('/sample-document')->with('success','Submitted successfully!!');
    	}
    	return redirect()->with('error','Failed to Send');
    }
}
