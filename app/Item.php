<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
   protected $fillable=['name','to_qty','to_price','sale_id','to_date','remark'];
    
}
