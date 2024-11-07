<?php

namespace App\Providers;

use Faker\Factory;
use Faker\Generator;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider implements DeferrableProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(Generator::class, function (){
            $faker = Factory::create();
            $faker->addProvider(new FakerImageProvider($faker));
            return $faker;
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        RateLimiter::for('auth', function (Request $request){
            return Limit::perMinute(20)->by($request->ip());
        });

        Paginator::useBootstrapFive();
    }

    public function provides(): array
    {
        return [FakerImageProvider::class];
    }
}
