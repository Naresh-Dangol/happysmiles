<?php
namespace App\Http\ViewComposer;
use Illuminate\Contracts\View\view;
use App\Models\Navigation;

class TopHeaderComposer{
	public function compose(View $view){
		$view->with('topheaders',Navigation::where('parent_page_id',35)->where('nav_category','Others')->get());
	}
}

?>