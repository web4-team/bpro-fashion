<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
   protected $fillable=['date','name','price','quantity','customer','paid', 'due_date','remark'];
    
}
