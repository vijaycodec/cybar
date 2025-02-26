<?php

namespace App\Providers;

use Anhskohbo\NoCaptcha\Facades\NoCaptcha;
use App\Repositories\Interfaces\L3CategoryRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Repositories\L3ContentRepository;
use App\Repositories\Interfaces\L3ContentRepositoryInterface;
use App\Repositories\L3CategoryRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
   public function register(): void
{
    $this->app->bind(
        L3CategoryRepositoryInterface::class,
        L3CategoryRepository::class
    );

    $this->app->bind(
        L3ContentRepositoryInterface::class,
        L3ContentRepository::class
    );
}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('captcha', function ($attribute, $value, $parameters, $validator) {
            return NoCaptcha::verifyResponse($value);
        });
    }
}
