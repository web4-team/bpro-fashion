<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbExpense extends Model
{
        protected $fillable = [
        'ab_category_id',
        'description',
        'ab_income_id',
        'amount',
        'given',
        'date'
        
        
              
    ];

public function income()
  {
    return $this->belongsTo('App\AbIncome');
  }

  public function cate()
  {
    return $this->belongsTo('App\AbCategory','ab_category_id');
  }



}
