<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
   protected $fillable=['item_date','name','quantity','total','retail_price','remark'];

     public function sales(){
		return $this->hasMany('App\Sale');
	}
    
}
