<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DayEmployee extends Model 
{

    protected $table = 'day_employee';
    public $timestamps = true;
    protected $fillable = array('employee_id', 'day_id', 'working_hours', 'status');

}