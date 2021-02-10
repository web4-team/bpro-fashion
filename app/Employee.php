<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
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
        return $this->belongsTo('App\Department','dept_id');
    }

    /**
     * @return object
     */
    public function empDivision(){
        return $this->belongsTo('App\Division','division_id');
    }

    /**
     * @return object
     */
    public function empCountry(){
        return $this->belongsTo('App\Country','country_id');
    }

    /**
     * @return object
     */
    public function empState(){
        return $this->belongsTo('App\State','state_id');
    }

    /**
     * @return object
     */
    public function empCity(){
        return $this->belongsTo('App\City','city_id');
    }

    /**
     * @return object
     */
  

    /**
     * @return object
     */
    public function empGender(){
        return $this->belongsTo('App\Gender','gender_id');
    }

    public function payrolls(){
		return $this->hasMany('App\Payroll');
	}
}
