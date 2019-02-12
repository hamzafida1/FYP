<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    //
    public function signup(){
        return view("signup");
    }
     public function store(Request $request){
     	$request->Session->put('first_name',$request->input('first_name'));
     	return view('welcome')->with('first_name',$request->Session()->get('first_name'));
     	
    }
}
