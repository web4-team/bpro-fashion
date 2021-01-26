<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Payroll extends Model
{
   
	
	
	
	protected $fillable=['employee_id','date','commission','bonus','overtime','leave','late'];
	
	
	public function employee(){
		return $this->belongsTo('App\Employee');
	}
	

	
}
