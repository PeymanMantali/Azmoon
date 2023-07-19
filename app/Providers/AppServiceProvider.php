<?php

namespace App\Providers;

use App\Repositories\Contracts\Eloquent\EloquentBaseRepository;
use App\Repositories\Contracts\UserRepositoryInterface;
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

    public function boot()
    {
        $this->app->bind(UserRepositoryInterface::class, EloquentBaseRepository::class);
    }
}
