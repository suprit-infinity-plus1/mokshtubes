<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
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

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Get URL segments, e.g. ['in', 'about-us']
        // $segments = request()->segments();

        // // If first segment exists, treat it as country
        // if (! empty($segments) && isset($segments[0])) {
        //     URL::defaults([
        //         'country' => $segments[0],
        //     ]);
        // }

        $request = request();

        // Ignore asset files (css, js, images, etc.)
        if (
            $request->is('*.css') ||
            $request->is('*.js') ||
            $request->is('*.map') ||
            $request->is('storage/*') ||
            $request->is('build/*')
        ) {
            return;
        }

        // Ignore admin routes
        if ($request->is('admin/*')) {
            return;
        }

        // Get first URL segment
        $country = $request->segment(1);

        $validCodes = ['se', 'no', 'ng', 'ae', 'us', 'sg', 'mv', 'sa', 'de', 'gb', 'ca', 'jo', 'pe', 'au', 'th', 'ru', 'fr', 'be', 'za', 'bg', 'tw', 'it', 'nl', 'in'];

        // If country exists, set it as default
        if ($country && in_array(strtolower($country), $validCodes)) {
            URL::defaults(['country' => $country]);
        } else {
            // Fallback for random routes / 404s
            URL::defaults(['country' => 'in']);
        }
    }
}
