<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Http;
use Illuminate\Contracts\Http\Kernel as HttpKernel;
use Illuminate\Support\ServiceProvider;
//use Fideloper\Proxy\TrustProxies;

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
        if (App::environment('local')) {
            URL::forceScheme('http');
            Http::withoutVerifying();

           // $this->app->make(HttpKernel::class)->prependMiddleware('web', TrustProxies::class);
        }
    }
}
