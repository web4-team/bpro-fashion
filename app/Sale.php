<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
   	protected $fillable=['item_id','date','customer_name','stock_out','per_price'];
	
	
	public function item(){
		return $this->belongsTo('App\Item');
	}
}