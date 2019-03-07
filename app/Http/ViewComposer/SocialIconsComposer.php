<?php
namespace App\Http\ViewComposer;
use Illuminate\Contracts\View\view;
use App\Models\Navigation;

class SocialIconsComposer{

	public function compose(View $view){
		$view->with('socials', Navigation::where('nav_category','SNS')->where('page_status',1)->get());
	}
}
?>

