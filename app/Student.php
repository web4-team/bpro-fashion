<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['course_id','batch_id', 'accept_date', 'name', 'dob', 'age', 'phone', 'email', 'education', 'address', 'objective', 'bpro','note','first_paid','second_paid'];


    public function course()
    {
    	return $this->belongsTo('App\Course');


    }

    public function batch()
    {
    	return $this->belongsTo('App\Batch');

    }

}