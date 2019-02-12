<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lawyer;

class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lawyer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required',
            'confirm_password'=>'required',
            'lawfirm_name'=>'required',
            'experience'=>'required',
            'category'=>'required',
            'first_name'=>'required',
            'last_name'=>'required',
            'phone'=>'required',
            'licence_number'=>'required',
            'adress'=>'required'



        ]);
        $lawyer =new $lawyer([
            'email'=>$request->get('email'),
            'password'=>$request->get('password'),
            'confirm_password'=>$request->get('confirm_password'),
            'lawfirm_name'=>$request->get('lawfirm_name'),
            'experience'=>$request->get('experience'),
            'category'=>$request->get('category'),
            'first_name'=>$request->get('first_name'),
            'last_name'=>$request->get('last_name'),
            'phone'=>$request->get('phone'),
            'licence_number'=>$request->get('licence_number'),
            'adress'=>$request->get('adress')

        ]);

        $lawyer->save();
        return redirect()->route('lawyer.create')->with('success','Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
