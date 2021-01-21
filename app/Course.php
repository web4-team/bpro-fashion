<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
        protected $fillable = [
        'name',
        'batch_id',
        'type',
        'fees',
        'discount',
        'amount',
        'date',
        'duration'
        
              
    ];
public function batch()
  {
    return $this->belongsTo('App\Batch');
  }
}
