<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Auth;
use Validator;
use App\Events;
use Calendar;
class EventsController extends Controller
{
    public function index(){
    	$events=Events::all();

    	$event_list=[];
    	foreach ($events as $key => $event) {
    		$event_list[]=Calendar::event(
    			$event->schedule_name,
    			true,
    			new \DateTime($event->case_date),
    			new \DateTime($event->case_date.'+1 day')
    		);
    		# code...
    	}

    	$calendar_details=Calendar::addEvents($event_list);

    	return view('events',compact('calendar_details'));
    }

    public function addEvent(Request $request){
    	$request->validate(['schedule_name'=>'required',
    		'case_date'=>'required']);

    	/*$validator=Validator::make($request->all(),
    		['schedule_name'=>'required',
    		'case_date'=>'required']);
    	if($validator->falls()){
    		\Session::flash('warning','Please enter valid details');
    		return Redirect::to('/events')->withInput()->withErrors($validator);
    	}*/
    	$event= new Events;
    	$event->schedule_name=$request['schedule_name'];
    	$event->case_date=$request['case_date'];
    	$event->save();
/*
    	return redirect()->route('events')
                        ->with('success', 'New Case Record created successfully');*/

    	\Session::flash('success','New Schedule added Successfully');
    		return Redirect::to('/events');
    }
}
