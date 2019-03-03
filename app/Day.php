<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model 
{

    protected $table = 'dayes';
    public $timestamps = true;
    protected $fillable = array('day');

    public function employees()
    {
        return $this->belongsToMany('App\Employee');
    }

}