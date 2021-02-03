<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbCourse extends Model
{
    protected $fillable = [
        'ab_name',
        'ab_batch_id',
        'ab_type',
        'ab_fees',
        'ab_discount',
        'ab_amount',
        'ab_date',
        'ab_duration'
        
              
    ];
public function ab_batch()
  {
    return $this->belongsTo('App\AbBatch');
  }
}
