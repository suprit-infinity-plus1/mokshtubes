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
            'se',
            'no',
            'ng',
            'ae',
            'us',
            'sg',
            'mv',
            'sa',
            'de',
            'gb',
            'ca',
            'jo',
            'pe',
            'au',
            'th',
            'ru',
            'fr',
            'be',
            'za',
            'bg',
            'tw',
            'it',
            'nl',
            'in'
        ];

        // Known top-level paths that should be redirected to /in/{path} instead of just /in
        $knownPaths = [
            'contact-us',
            'about-us',
            'calculator',
            'materials',
            'blogs',
            'whatsapp-intent',
            'products',
            'sendmail',
            'lead-capture'
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
            if (in_array($lowerCountry, $knownPaths)) {
                $segments = $request->segments();
                array_shift($segments);
                return redirect()->to('/' . implode('/', $segments));
            }
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

        // Do NOT forget the 'country' parameter because controllers like `titaniumGrade($country, $slug)` require it!
        // Laravel handles extra parameters gracefully via reflection by name.

        return $next($request);
    }
}
