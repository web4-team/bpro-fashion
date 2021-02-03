<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable=['category','description','amount','date','remark'];

    public function expense(){
		return $this->hasMany('App\Expense');
	}
}
