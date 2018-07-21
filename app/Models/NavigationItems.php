<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavigationItems extends Model
{
	protected $table = 'navigation_items';

	public function navigation(){
		return $this->belongsTo('App\Models\Navigation');
	}
    protected $fillable = [
    	'nav_id','sort','name','content','file'
    ];
}
