<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LoadNavbarCategories
{
    public function handle($request, Closure $next)
    {
        if (!Session::has('home_categories')) {
            $response = Http::asForm()->post('https://prodhanltd.com/api/home_page_category.php');

            if ($response->successful() && $response['error'] == 0) {
                Session::put('home_categories', $response['report']);
            } else {
                Session::put('home_categories', []); // fallback empty
            }
        }

        return $next($request);
    }
}
