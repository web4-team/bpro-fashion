<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
             protected $fillable = [
        'name'
      
    ];
  public function course()
  {
    return $this->belongsTo('App\Course');
  }

}

