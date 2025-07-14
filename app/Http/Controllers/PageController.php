<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index()
    {
        // Slider data
        $sliderResponse = Http::get('https://prodhanltd.com/api/slide.php');
        $slides = ($sliderResponse->successful() && $sliderResponse['error'] == 0) ? $sliderResponse['report'] : [];

        // Arrival Products data
        $arrivalProductResponse = Http::asForm()->post('https://prodhanltd.com/api/home_page.php');
        $arrivalProducts = ($arrivalProductResponse->successful() && $arrivalProductResponse['error'] == 0) ? $arrivalProductResponse['report'] : [];

        return view('index', compact('slides', 'arrivalProducts'));
    }

    public function wishlist()
    {
        return view('wishlist');
    }
    public function shopFullwidthBanner(Request $request)
    {
        $category = $request->query('category'); // get from URL

        $products = [];
        if ($category) {
            $response = Http::asForm()->post('https://prodhanltd.com/api/category_wise_prodict.php', [
                'category' => $category,
                'limit' => 100,
                'type' => 0,
            ]);

            if ($response->successful() && $response['error'] == 0) {
                $products = $response['report'];
            }
        }

        return view('shop-fullwidth-banner', compact('products', 'category'));
    }

    public function shopBannerSidebar()
    {
        return view('shop-banner-sidebar');
    }

    public function productDetails(Request $request)
    {
        $productId = $request->query('product_id'); // URL থেকে product_id

        $product = null;
        if ($productId) {
            $response = Http::get('https://prodhanltd.com/api/product_details2.php', [
                'product_id' => $productId
            ]);

            if ($response->successful() && $response['error'] == 0) {
                $product = $response->json();
            }
        }

        if (!$product || empty($product['title'])) {
            abort(404, 'Product not found');
        }

        return view('product-details', compact('product'));
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
