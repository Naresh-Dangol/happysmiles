<?php
namespace App\Http\ViewComposer;
use Illuminate\Contracts\View\view;
use App\Models\Navigation;

class FooterComposer{
	public function compose(View $view){
		$view->with('footers',Navigation::where('parent_page_id',43)->where('nav_category','Others')->where('page_status',1)->get());
	}
}


?>