<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

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

        // Featured Products data
        $featuredProductResponse = Http::asForm()->post('https://prodhanltd.com/api/home_page_special.php');
        $featuredProducts = ($featuredProductResponse->successful() && $featuredProductResponse['error'] == 0) ? $featuredProductResponse['report'] : [];

        return view('index', compact('slides', 'arrivalProducts', 'featuredProducts'));
    }

    public function wishlist()
    {
        $wishlist = session()->get('wishlist', []);
        return view('wishlist', compact('wishlist'));
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

    public function shopBannerSidebar(Request $request)
    {
        $selectedCategory = $request->input('category', 'Umbrellas'); // default category

        // Fetch category list from session (set earlier in middleware)
        $categories = Session::get('home_categories', []);

        // Fetch products from API
        $productResponse = Http::asForm()->post('https://prodhanltd.com/api/category_wise_prodict.php', [
            'category' => $selectedCategory,
            'limit' => 100,
            'type' => 0
        ]);

        $products = ($productResponse->successful() && $productResponse['error'] == 0)
            ? $productResponse['report']
            : [];

        return view('shop-banner-sidebar', compact('categories', 'products', 'selectedCategory'));
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

    public function searchProducts(Request $request)
    {
        $searchTerm = $request->input('search');

        if (!$searchTerm) {
            return redirect()->back()->with('error', 'Please enter a search term.');
        }

        $response = Http::asForm()->post('https://prodhanltd.com/api/product_search.php', [
            'search' => $searchTerm,
        ]);

        $searchResults = [];
        $totalFound = 0;
        if ($response->successful() && $response['error'] == 0) {
            $searchResults = $response['search_result'];
            $totalFound = $response['search_found'];
        }
        return view('search-product', compact('searchResults', 'searchTerm', 'totalFound'));
    }
}
