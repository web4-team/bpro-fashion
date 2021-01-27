<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $fillable=['income_id','category','description','amount','date'];

    public function income(){
		return $this->belongsTo('App\Income');
	}
}
