<?php
namespace App\Providers;
use Illuminate\Support\ServiceProvider;

class SocialComposerProvider extends ServiceProvider
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
        $this->composerSocialIcons();
    }
    

    public function composerSocialIcons(){
        
        view()->composer('frontend.layout.master','App\Http\ViewComposer\SocialIconsComposer');
        view()->composer('frontend.contact','App\Http\ViewComposer\SocialIconsComposer');
    }
}
