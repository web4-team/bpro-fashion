<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
   protected $fillable=['name'];

     public function sales(){
		return $this->hasMany('App\Sale');
	}
    
}
