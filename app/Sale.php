<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
   	protected $fillable=['item_id','date','customer_name','stock_out','per_price','stock_in','supplier_name','in_total','choose'];
	
	
	public function item(){
		return $this->belongsTo('App\Item');
	}
}