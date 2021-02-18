<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
                 protected $fillable = [
        'category'
      
    ];

    public function expense()
  {
    return $this->hasMany('App\Expense');
  }

}
