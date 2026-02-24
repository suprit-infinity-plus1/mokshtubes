<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckCountry
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $allowedCountries = [
            'se', 'no', 'ng', 'ae', 'us', 'sg', 'mv', 'sa', 'de', 'gb', 'ca', 'jo', 'pe', 'au', 'th', 'ru', 'fr', 'be', 'za', 'bg', 'tw', 'it', 'nl', 'in'
        ];

        // Known top-level paths that should be redirected to /in/{path} instead of just /in
        $knownPaths = [
            'contact-us', 'about-us', 'calculator', 'materials', 'blogs', 'whatsapp-intent', 'products', 'sendmail', 'lead-capture'
        ];

        $country = $request->route('country');

        // If no country parameter (root domain access), proceed
        if (!$country) {
            return $next($request);
        }

        // Normalize to lowercase
        $lowerCountry = strtolower($country);

        // Check if valid country
        if (!in_array($lowerCountry, $allowedCountries)) {
            // Check if it's a known path that somehow missed the root group
            // (e.g. if routes were restructured or for specific edge cases)
            if (in_array($lowerCountry, $knownPaths)) {
                 // If it was meant to be a root path, we should probably redirect to the root version
                 // But since we are already in the middleware of a matched route group, 
                 // we just want to strip the prefix and redirect to the correct path.
                 $segments = $request->segments();
                 array_shift($segments); // Remove the "invalid country" which is actually a path name
                 return redirect()->to('/' . implode('/', $segments));
            }

            // Otherwise, garbage -> redirect to home (root)
            return redirect('/');
        }

        // Enforce lowercase
        if ($country && $country !== $lowerCountry) {
            $segments = $request->segments();
            if (isset($segments[0]) && $segments[0] === $country) {
                $segments[0] = $lowerCountry;
                return redirect()->to(implode('/', $segments));
            }
        }

        // Normalize route parameters for controllers: 
        // Forget 'country' so it doesn't shift other parameters ($slug, $category, etc.)
        if ($request->route()->hasParameter('country')) {
            $request->route()->forgetParameter('country');
        }

        return $next($request);
    }
}
