<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbBatch extends Model
{
    protected $fillable = [
        'ab_name'
      
    ];
  public function ab_course()
  {
    return $this->belongsTo('App\AbCourse');
  }



}
