<?php
namespace App\Http\ViewComposer;
use Illuminate\Contracts\View\view;
use App\Models\Navigation;

class TopHeaderComposer{
	public function compose(View $view){
		$view->with('topheaders',listChild(40));
	}
}

?>