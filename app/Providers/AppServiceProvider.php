<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\Company\CompanyInterface;
use Illuminate\Pagination\Paginator;
use App\Repositories\Company\CompanyRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            CompanyInterface::class,
            CompanyRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
    }
}
