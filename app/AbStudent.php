<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbStudent extends Model
{
    protected $fillable=['ab_course_id','ab_batch_id', 'ab_accept_date', 'ab_name', 'ab_dob', 'ab_age', 'ab_phone', 'ab_email', 'ab_education', 'ab_address', 'ab_objective', 'ab_bpro','ab_note','ab_first_paid','ab_second_paid'];


    public function ab_course()
    {
    	return $this->belongsTo('App\AbCourse');


    }

    public function ab_batch()
    {
    	return $this->belongsTo('App\AbBatch');

    }
}
