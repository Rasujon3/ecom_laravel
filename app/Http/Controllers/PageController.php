<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index');
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
