<?php

namespace App\Providers;

use App\Models\About;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('/about', function ($view) {
            $siteAbout = About::first();
            return $view->with($siteAbout);
        });
    }
}
