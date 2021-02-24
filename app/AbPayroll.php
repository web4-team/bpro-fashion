<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class AbPayroll extends Model
{
   
	
	
	
	protected $fillable=['ab_employee_id','date','salary','commission','bonus','overtime','leave','late'];
	
	
	public function employee(){
		return $this->belongsTo('App\AbEmployee','ab_employee_id');
	}
	

	
}
