<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modules\Observers\CRUDObservers;
use App\Models\Employ;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Employ::observe(CRUDObservers::class);
    }
}
