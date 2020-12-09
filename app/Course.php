<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
        protected $fillable = [
        'name',
        'batch',
        'fees',
        'discount',
        'date',
        'duration'
              
    ];
}
