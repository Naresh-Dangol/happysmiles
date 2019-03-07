<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class GlobalSettingComposerProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
     public function register()
    {
         $this->composerGlobalSetting();
    }

    public function composerGlobalSetting(){
        view()->composer('frontend.layout.master','App\Http\ViewComposer\GlobalSettingComposer');
    }
}
