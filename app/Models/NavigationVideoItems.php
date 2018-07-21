<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NavigationVideoItems extends Model
{
    protected $fillable = [
    	'nav_id','sort','name','vlink','content'
    ];
}
