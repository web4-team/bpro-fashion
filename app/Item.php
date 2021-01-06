<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
   protected $fillable=['name','price','stock_in','stock_out'];
    
}
