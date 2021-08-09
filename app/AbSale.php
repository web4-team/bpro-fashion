<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbSale extends Model
{
   	protected $fillable=['ab_item_id','date','customer_name','stock_out','per_price','stock_in','supplier_name','in_total','choose','open_amount'];
	
	
	public function ab_item(){
		return $this->belongsTo('App\AbItem');
	}
}