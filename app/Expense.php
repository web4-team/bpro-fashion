<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
        protected $fillable = [
        'category_id',
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

  public function cate()
  {
    return $this->belongsTo('App\Category','category_id');
  }



}
