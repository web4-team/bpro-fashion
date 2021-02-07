<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
        protected $fillable = [
        'description',
        'income_id',
        'amount',
        'given',
        'date'
        
        
              
    ];
public function income()
  {
    return $this->belongsTo('App\Income');
  }
}
