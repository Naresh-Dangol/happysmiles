<?php
namespace App\Http\ViewComposer;
use Illuminate\Contracts\View\view;
use App\Models\Navigation;

class FooterLinksComposer{
	public function compose(View $view){
		$view->with('footerlinks',Navigation::where('nav_category','main')->where('parent_page_id',0)->where('page_status',1)->orderBy('position','ASC')->limit(5)->get());

		$view->with('courses',listChild(11));
		$view->with('services',Navigation::where('nav_category','main')->where('parent_page_id',3)->where('page_status',1)->orderBy('position','ASC')->limit(5)->get());
	}
}


?>