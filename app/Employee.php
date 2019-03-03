<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model 
{

    protected $table = 'employees';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'mobile_number', 'hire_date', 'user_id');

    public function user()
    {
        return $this->belongsTo('App\Employee');
    }

    public function dayes()
    {
        return $this->belongsToMany('App\Day');
    }

}