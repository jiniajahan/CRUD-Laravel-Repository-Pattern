<?php

namespace App\Providers;

use EloquentPost;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use PostRepository;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PostRepository::class, EloquentPost::class);
    }
}
