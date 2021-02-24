<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AbEmployee extends Model
{
    /**
     * @return object
     */
    public function empDepartment(){
        /**
         *  return department which belongs to an employee.
         *  first parameter is the model and second is a
         *  foreign key.
         */
        return $this->belongsTo('App\AbDepartment','dept_id');
    }

    /**
     * @return object
     */
    public function empDivision(){
        return $this->belongsTo('App\AbDivision','division_id');
    }

    /**
     * @return object
     */
    public function empCountry(){
        return $this->belongsTo('App\AbCountry','country_id');
    }

    /**
     * @return object
     */
    public function empState(){
        return $this->belongsTo('App\AbState','state_id');
    }

    /**
     * @return object
     */
    public function empCity(){
        return $this->belongsTo('App\AbCity','city_id');
    }

    /**
     * @return object
     */
  

    /**
     * @return object
     */
    public function empGender(){
        return $this->belongsTo('App\AbGender','gender_id');
    }

    public function payrolls(){
		return $this->hasMany('App\AbPayroll');
	}
}