<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['course_id', 'accept_date', 'name', 'dob', 'age', 'phone', 'email', 'education', 'address', 'objective', 'bpro'];

    public function courses($value='')
    {
    	return $this->belongsTo('App\Course')
    				->withTimestamps();
    }
}
