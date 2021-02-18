<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['category_name'];

     public function expense(){
		return $this->hasMany('App\Expense');
	}
}
