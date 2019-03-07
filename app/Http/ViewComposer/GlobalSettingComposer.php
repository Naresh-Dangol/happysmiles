<?php
namespace App\Http\ViewComposer;
use Illuminate\Contracts\View\view;
use App\Models\GlobalSetting;

class GlobalSettingComposer{
	public function compose(View $view){
		$view->with('globalsettings',GlobalSetting::find(1));
	}
}


?>