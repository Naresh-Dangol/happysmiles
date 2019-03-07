<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavigationItems extends Model
{
	protected $table = 'navigation_items';
    protected $fillable = [
    	'navigation_id','sort','name','content','file'
    ];
 
    public function navigation(){
		return $this->belongsTo('App\Models\Navigation');
	}
}
