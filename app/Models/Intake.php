<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intake extends Model
{
    protected $table = "intake";
    protected $fillable = [
        'destination_id',
        'intake',
    ];
    
    public function Destination(){
    	return $this->belongsTo('App\Models\Destination');
    }
}
