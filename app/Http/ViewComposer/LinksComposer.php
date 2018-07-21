<?php
namespace App\Http\ViewComposer;
use Illuminate\Contracts\View\view;
use App\Models\Navigation;

class LinksComposer{
	public function compose(View $view){
		$view->with('links',Navigation::where('parent_page_id',13)->where('nav_category','Main')->where('page_status',1)->get());
	}
}


?>