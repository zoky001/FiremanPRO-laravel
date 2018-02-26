<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        //
        if ($this->app->environment('production')) {

          //  echo "<br> <br> <h1>ENV: </h1>" + env('APP_ENV');
          //  echo "<br> <br> <h1>ENV: </h1>" + "production";
            URL::forceScheme('https');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}
