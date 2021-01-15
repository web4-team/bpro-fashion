<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['course_id', 'accept_date', 'name', 'dob', 'age', 'phone', 'email', 'education', 'address', 'objective', 'bpro','note'];

    // public function courses($value='')
    // {
    // 	return $this->belongsTo('App\Course')
    // 				->withTimestamps();
    // }
        public function setBproAttribute($value)
    {
        $this->attributes['bpro'] = json_encode($value);
    }

    // public function getBproAttribute($value)
    // {
    //     return $this->attributes['bpro'] = json_decode($value);
    // }

    public function course()
    {
      return $this->belongsTo('App\Course');
    }

    public function batch()
    {
      return $this->belongsTo('App\Batch');
    }
}
