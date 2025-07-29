<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Register custom services, helpers, or singletons here if needed
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Fix for MySQL older versions (limits index key length)
        Schema::defaultStringLength(191);

        // Use Tailwind for pagination styling (recommended for Breeze)
        Paginator::useTailwind();
    }
}
