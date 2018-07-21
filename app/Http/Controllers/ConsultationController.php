<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class ConsultationController extends Controller
{
    public function consult(Request $request){
    	$data = $request->all();
    	Mail::to($data->email)->send(new SendMail($data));
    	if($data){
    		return redirect()->back()->with('success',"Thank You!!");
    	}
    	return redirect()->back()->with('error',"Contact creation failed");
    }
}
