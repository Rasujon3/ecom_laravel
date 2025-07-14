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

Route::get('/wishlist', [PageController::class, 'wishlist']);

Route::get('/shop-banner-sidebar', [PageController::class, 'shopBannerSidebar']);

Route::get('/product-details', [PageController::class, 'productDetails']);

Route::get('/order', [PageController::class, 'order']);

Route::get('/my-account', [PageController::class, 'myAccount']);

Route::get('/login', [PageController::class, 'login']);

Route::get('/faq', [PageController::class, 'faq']);

Route::get('/contact-us', [PageController::class, 'contactUs']);

Route::get('/checkout', [PageController::class, 'checkout']);

Route::get('/cart', [PageController::class, 'cart']);

Route::get('/about-us', [PageController::class, 'aboutUs']);

Route::get('/', [PageController::class, 'index']);
