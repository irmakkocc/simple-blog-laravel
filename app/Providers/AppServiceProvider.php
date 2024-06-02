<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Route;
use App\Models\Config;

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
        view()->share('config',Config::find(1));
        Route::aliasMiddleware('isAdmin', isAdmin::class);
    }
}
