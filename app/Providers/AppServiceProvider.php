<?php

namespace App\Providers;

use Anhskohbo\NoCaptcha\Facades\NoCaptcha;
use App\Repositories\CategoryRepository;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
use App\Repositories\Interfaces\L3CategoryRepositoryInterface;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use App\Repositories\L3ContentRepository;
use App\Repositories\Interfaces\L3ContentRepositoryInterface;
use App\Repositories\Interfaces\MenuBlogRepositoryInterface;
use App\Repositories\Interfaces\ServicesRepositoryInterface;
use App\Repositories\Interfaces\UploadServiceInterface;
use App\Repositories\L3CategoryRepository;
use App\Repositories\MenuBlogRepository;
use App\Repositories\ServicesRepository;
use App\Services\ImageService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
   public function register(): void
{
    $this->app->bind(L3CategoryRepositoryInterface::class,L3CategoryRepository::class);
    $this->app->bind(L3ContentRepositoryInterface::class,L3ContentRepository::class);
    $this->app->bind(CategoryRepositoryInterface::class,CategoryRepository::class);
    $this->app->bind(ServicesRepositoryInterface::class,ServicesRepository::class);
    $this->app->bind(MenuBlogRepositoryInterface::class,MenuBlogRepository::class);
      // Bind the upload service interface to its implementation category Repository
    $this->app->bind(UploadServiceInterface::class,ImageService::class);  // comman for image upload ,delete service
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
