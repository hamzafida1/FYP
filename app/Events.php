<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = [
        'schedule_name', 'case_date'
    ];

}
