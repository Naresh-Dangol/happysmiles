<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Navigation extends Model
{
    protected $table = "navigations";
    protected $fillable = [
    	'nav_name',
    	'alias',
    	'caption',
        'nav_category',
    	'page_type',
    	'position',
    	'short_content',
    	'long_content',
    	'parent_page_id',
    	'icon_image',
    	'icon_image_caption',
    	'banner_image',
        'link',
        'attachment',
        'page_title',
        'page_keyword',
    	'page_description',
    	'page_status'
    ];

    public function navigationitems(){

        return $this->hasMany('App\Models\NavigationItems');
    }
}
