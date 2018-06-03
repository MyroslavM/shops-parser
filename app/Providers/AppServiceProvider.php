<?php

namespace App\Providers;

use App\Services\pages\CountriesList;
use App\Services\pages\SearchResult;
use Illuminate\Support\ServiceProvider;
use App\Services\CurrencyService;
use Illuminate\Support\Facades\Schema;

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
        $this->app->singleton('countriesList', function () {
            return new CountriesList();
        });
        $this->app->singleton('searchResult', function () {
            return new SearchResult();
        });
        $this->app->singleton('CurrencyService', function () {
                return new CurrencyService();
        });
    }

}
