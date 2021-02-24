<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbItem extends Model
{
   protected $fillable=['name'];

     public function sales(){
		return $this->hasMany('App\AbSale');
	}
    
}
