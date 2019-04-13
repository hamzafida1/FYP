<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Caserecord extends Model
{
    protected $fillable=['user_id','case_title','case_description','client_name','client_phone','opponent_name','court_name','status','value',];

    public function lawyer(){
    	return $this->belongsTo('App\User');
    }
}

