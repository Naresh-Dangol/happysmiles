<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TopHeaderComposerProvider extends ServiceProvider
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
        $this->composerTopHeader();
    }

    public function composerTopHeader(){
        view()->composer('frontend.header','App\Http\ViewComposer\TopHeaderComposer');
    }
}
