<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\status;

class StatusController extends Controller
{
    public function show()
 {
    $statuses = status::all();
    return view ('caserecord.create', compact('statuses'));
 }
}
