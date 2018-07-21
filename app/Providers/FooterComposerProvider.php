<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FooterComposerProvider extends ServiceProvider
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
        $this->composerFooter();
    }

    public function composerFooter(){
        view()->composer('frontend.footer','App\Http\ViewComposer\FooterComposer');
    }
}
