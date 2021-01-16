<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
        protected $fillable = [
        'name',
        
        'type',
        'fees',
        'discount',
        'amount',
        'date',
        'duration'
        
              
    ];
public function batch()
  {
    return $this->hasMany('App\Batch');
  }
}