<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class NavigationComposerProvider extends ServiceProvider
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
        $this->composerNavigation();
    }

    public function composerNavigation(){
        view()->composer('frontend.layout.master','App\Http\ViewComposer\NavigationComposer');
    }
}
