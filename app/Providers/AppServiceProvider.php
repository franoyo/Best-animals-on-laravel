<?php

namespace App\Providers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;
use App\Models\mascota;
use App\Observers\MascotaObserver;
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
        if($this->app->environment('production')) {
        \URL::forceScheme('https');
    }
        Validator::extend('custom_email', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^.+@.+\.[A-Za-z]{2,}$/i', $value);
        });

        Mascota::observe(MascotaObserver::class);
    }
}
