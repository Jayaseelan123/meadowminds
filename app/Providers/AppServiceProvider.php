<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);

        try {
            if (Schema::hasTable('settings')) {
                $settings = \App\Models\Setting::all()->pluck('value', 'key')->toArray();
                view()->share('site_settings', $settings);
                view()->share('seo_settings', [
                    'meta_title' => $settings['meta_title'] ?? null,
                    'meta_description' => $settings['meta_description'] ?? null,
                    'meta_keywords' => $settings['meta_keywords'] ?? null,
                ]);
            }
            if (Schema::hasTable('services')) {
                $navServices = \App\Models\Service::where('status', true)->orderBy('order', 'asc')->get();
                view()->share('nav_services', $navServices);
            }
        } catch (\Exception $e) {
            // Avoid failing when running migrations or CLI commands
        }
    }
}
