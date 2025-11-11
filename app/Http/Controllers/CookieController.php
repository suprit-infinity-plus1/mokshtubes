<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CookieController extends Controller
{
    public function accept(Request $request)
    {
        $response = response()->json(['status' => 'accepted']);
        return $response->cookie('cookie_consent', 'accepted', 60 * 24 * 30); // store for 30 days
    }

    public function reject(Request $request)
    {
        $response = response()->json(['status' => 'rejected']);
        return $response->cookie('cookie_consent', 'rejected', 60 * 24 * 30);
    }
}
