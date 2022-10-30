<?php

namespace App\Providers;

use App\View\Composers\ForntendComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //dd('problem');
        View::composer('components.forntend.partials.header', ForntendComposer::class);
        
        View::composer('components.forntend.partials.headerindex', ForntendComposer::class);
        View::composer('components.forntend.partials.headertop', ForntendComposer::class);

    }
}
