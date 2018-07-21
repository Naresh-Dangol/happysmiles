<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LinksComposerProvider extends ServiceProvider
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
        $this->composerLinks();
    }

    public function composerLinks(){
        view()->composer('frontend.footer','App\Http\ViewComposer\LinksComposer');
    }
}
