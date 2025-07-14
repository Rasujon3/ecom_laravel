<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\PageController;

Route::get('/wishlist', [PageController::class, 'wishlist'])->name('wishlist');

Route::get('/shop-fullwidth-banner', [PageController::class, 'shopFullwidthBanner'])->name('shopFullwidthBanner');

Route::get('/shop-banner-sidebar', [PageController::class, 'shopBannerSidebar'])->name('shop-banner-sidebar');

Route::get('/product-details', [PageController::class, 'productDetails'])->name('product-details');

Route::get('/order', [PageController::class, 'order']);

Route::get('/my-account', [PageController::class, 'myAccount'])->name('my-account');

Route::get('/login', [PageController::class, 'login']);

Route::get('/faq', [PageController::class, 'faq'])->name('faq');

Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact-us');

Route::get('/checkout', [PageController::class, 'checkout']);

Route::get('/cart', [PageController::class, 'cart']);

Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');

Route::get('/search-products', [PageController::class, 'searchProducts'])->name('search.products');

Route::get('/', [PageController::class, 'index'])->name('home');
