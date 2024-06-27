<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Paginator::useBootstrap();
        view()->composer('errors::404', function ($view) {
            $view->with(array(
                'name' => 'Page not found',
                'id' => 'page_not_found',
                'sub_text' => '',
                'title' => 'Page not found',
                'heading_color' => '',
                'meta_keywords' => 'Page not found',
                'meta_description' => 'Page not found',
                'slug' => 'Homepage',
                'content_heading' => 'Page not found',
                'body_class' => 'page_not_found',

            ));
        });
    }
}
