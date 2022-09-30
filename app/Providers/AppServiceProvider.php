<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
      view()->composer('frontend.templates.app', function ($view) {
        $theme = \Cookie::get('theme');
        if ($theme != 'dark') {
          $theme = 'light-mode';
        }else{
          $theme = 'dark-mode';
        }

        $view->with('theme', $theme);
      });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
