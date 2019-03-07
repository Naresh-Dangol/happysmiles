<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FooterLinksComposerProvider extends ServiceProvider
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
        $this->composerFooterLinks();
    }

    public function composerFooterLinks(){
        view()->composer('frontend.footer','App\Http\ViewComposer\FooterLinksComposer');
    }
}
