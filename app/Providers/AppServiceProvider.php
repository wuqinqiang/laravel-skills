<?php

namespace App\Providers;

use App\Http\Mixin\StrMixin;
use App\Http\Server\PostCard;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

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
        $this->app->singleton("postcard", function ($app) {
            return new PostCard('hangzhou', 'hello');
        });

        Str::macro('partNumber', function ($part) {
            return "Ab" . '-' . substr($part, 0, 5);
        });

        Str::mixin(new StrMixin(), false);
    }
}
