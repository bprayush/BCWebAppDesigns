<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
    	'school_id',
    	'teacher_id',
    	'class_id',
    	'content_id',
    	'start_date',
    	'end_date',
    	'day',
    	'start_time',
    	'end_time'
    ];
}
