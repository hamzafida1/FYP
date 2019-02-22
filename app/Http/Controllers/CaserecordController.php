<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caserecord;

class CaserecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caserecords = Caserecord::latest()->paginate(5);
        return view('caserecord.index', compact('caserecords'))
                  ->with('i', (request()->input('page',1) -1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('caserecord.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
          'case_title' => 'required',
          'case_description' => 'required',
          'client_name' => 'required',
          'client_phone' => 'required',
          'opponent_name' => 'required',
          'court_name' => 'required',
          
          'status' => 'required',
          
        ]);
        Caserecord::create($request->all());
        return redirect()->route('caserecord.index')
                        ->with('success', 'New Case Record created successfully');
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
        $caserecord = Caserecord::find($id);
        return view('caserecord.edit', compact('caserecord'));
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
        $request->validate([
          'case_title' => 'required',
          'case_description' => 'required',
          'client_name' => 'required',
          'client_phone' => 'required',
          'opponent_name' => 'required',
          'court_name' => 'required',
          
          'status' => 'required',
          
        ]);
        $caserecord = Caserecord::find($id);
      $caserecord->case_title = $request->get('case_title');
      $caserecord->case_description = $request->get('case_description');
      $caserecord->client_name = $request->get('client_name');
      $caserecord->client_phone = $request->get('client_phone');
      $caserecord->opponent_name = $request->get('opponent_name');
      $caserecord->court_name = $request->get('court_name');
      $caserecord->status = $request->get('status');
      $caserecord->save();
      return redirect()->route('caserecord.index')
                      ->with('success', 'Record updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $caserecord = Caserecord::find($id);
        $caserecord->delete();
        return redirect()->route('caserecord.index')
                        ->with('success', 'Record deleted successfully');
    }
}
