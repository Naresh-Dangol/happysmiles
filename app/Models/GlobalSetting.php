<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GlobalSetting extends Model
{
    protected $fillable = [
    		'site_name',
    		'site_email',
    		'phone',
    		'website_full_address',
    		'page_title',
    		'page_keyword',
    		'page_description',
    		'favicon',
    		'site_logo',
    		'site_status'
    ];
}
