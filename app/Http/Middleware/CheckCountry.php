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

        // If no country parameter, proceed (shouldn't happen if middleware is applied to group)
        if (!$country) {
            return $next($request);
        }

        // Normalize to lowercase
        $lowerCountry = strtolower($country);

        // Check if valid country
        if (!in_array($lowerCountry, $allowedCountries)) {
            // Check if it's a known path (smart redirect)
            // e.g. /about-us -> /in/about-us
            if (in_array($lowerCountry, $knownPaths)) {
                 $segments = $request->segments();
                 // Prepend 'in'
                 array_unshift($segments, 'in');
                 return redirect()->to(implode('/', $segments));
            }

            // Otherwise, garbage -> redirect to /in
            // We strip the invalid country segment and replace with 'in' if it was treated as country
            // But for garbage like /sdfsdfsd, we just want to go to /in
            
            // Just for safety, let's look at the segments
             $segments = $request->segments();
            if (isset($segments[0]) && $segments[0] === $country) {
                // If it was /sdfsdfsd/foo, we might want to preserve foo? 
                // User said "misclicked or typed like any word sdfsdfsd... make it to default in".
                // So strict redirect to /in is safest for garbage.
                return redirect('/in');
            }

            return redirect('/in');
        }

        // Enforce lowercase
        if ($country !== $lowerCountry) {
            $segments = $request->segments();
            if (isset($segments[0]) && $segments[0] === $country) {
                $segments[0] = $lowerCountry;
                return redirect()->to(implode('/', $segments));
            }
        }

        return $next($request);
    }
}
