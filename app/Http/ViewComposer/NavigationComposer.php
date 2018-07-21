<?php
namespace App\Http\ViewComposer;
use Illuminate\Contracts\View\view;
use App\Models\Navigation;

class NavigationComposer{
	public function compose(View $view){
		$view->with('navigations', Navigation::where('nav_category','main')->where('page_status','1')->get());
	}
}