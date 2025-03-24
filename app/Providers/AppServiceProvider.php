<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
    // Trong app/Providers/AppServiceProvider.php
    public function boot()
    {
        Blade::directive('formatNumber', function ($expression) {
            return "<?php
            if ($expression >= 1000000) {
                echo round($expression / 1000000, 1) . 'M';
            } elseif ($expression >= 1000) {
                echo round($expression / 1000, 1) . 'K';
            } else {
                echo $expression;
            }
        ?>";
        });
    }
}
