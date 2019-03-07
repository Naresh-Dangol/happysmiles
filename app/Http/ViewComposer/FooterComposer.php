<?php
namespace App\Http\ViewComposer;
use Illuminate\Contracts\View\view;
use App\Models\Navigation;

class FooterComposer{
	public function compose(View $view){
		$view->with('usefullinks',Navigation::where('nav_category','Main')->where('parent_page_id',0)->where('page_status',1)->orderBy('position','ASC')->limit(4)->get());
		$view->with('courses',Navigation::where('nav_category','Main')->where('parent_page_id',3)->where('page_status',1)->orderBy('position','ASC')->limit(4)->get());
		$view->with('services',Navigation::where('nav_category','Main')->where('parent_page_id',7)->where('page_status',1)->orderBy('position','ASC')->limit(4)->get());
	}

	
}


?>