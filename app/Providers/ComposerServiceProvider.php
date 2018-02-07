<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Using class based composers...
        View::composer(
            '*', 'App\Http\ViewComposers\QuestionsComposer'
        );

        View::composer(
            '*', 'App\Http\ViewComposers\VideoComposer'
        );

        View::composer(
            '*', 'App\Http\ViewComposers\AktualComposer'
        );

        // Using Closure based composers...
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
