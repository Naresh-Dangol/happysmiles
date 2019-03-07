<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $table = "destinations";
    protected $fillable = [
    	'destination'
    ];
    
    public function Intake(){
    	return $this->hasMany('App\Models\Intake');
    }

    
}
