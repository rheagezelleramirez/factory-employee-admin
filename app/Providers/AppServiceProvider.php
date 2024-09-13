<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Observers\ModelEventObserver;
use App\Models\Factory;
use App\Models\Employee;

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
        $observer = new ModelEventObserver();

        Factory::observe($observer);
        Employee::observe($observer);
    }
}
