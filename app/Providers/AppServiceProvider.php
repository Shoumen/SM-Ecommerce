<?php

namespace App\Providers;
use DB;

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
       $settings=DB::table('settings')->first();
       view()->share('setting',$settings);
    }
}
