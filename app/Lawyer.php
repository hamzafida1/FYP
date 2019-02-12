<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    protected $fillable=['email','password','confirm_password','lawfirm_name','experience','category','first_name','last_name','phone','licence_number','adress'];
}
