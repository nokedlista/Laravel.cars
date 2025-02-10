<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\MyService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('MyService', function () {
            return new MyService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
