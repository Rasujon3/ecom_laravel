<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index()
    {
        $response = Http::get('https://prodhanltd.com/api/slide.php');

        // Check if API call is successful and contains data
        if ($response->successful() && $response['error'] == 0) {
            $slides = $response['report'];
        } else {
            $slides = []; // fallback to empty array
        }

        return view('index', compact('slides'));
    }

    public function wishlist()
    {
        return view('wishlist');
    }
    public function shopFullwidthBanner()
    {
        return view('shop-fullwidth-banner');
    }

    public function shopBannerSidebar()
    {
        return view('shop-banner-sidebar');
    }

    public function productDetails()
    {
        return view('product-details');
    }

    public function order()
    {
        return view('order');
    }

    public function myAccount()
    {
        return view('my-account');
    }

    public function login()
    {
        return view('login');
    }

    public function faq()
    {
        return view('faq');
    }

    public function contactUs()
    {
        return view('contact-us');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function cart()
    {
        return view('cart');
    }

    public function aboutUs()
    {
        return view('about-us');
    }
}
