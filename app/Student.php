<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['course_id','batch_id', 'accept_date', 'name', 'dob', 'age', 'phone', 'email', 'education', 'address', 'objective', 'bpro','note'];

    public function course($value='')
    {
    	return $this->belongsTo('App\Course');

    }

    public function batch($value='')
    {
    	return $this->belongsTo('App\Batch');

    }

}
