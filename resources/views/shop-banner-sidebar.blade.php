@extends('layouts.app')

@section('content')
<main class="main">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
          <div class="container">
            <ul class="breadcrumb bb-no">
              <li><a href="{{ route('home') }}">Home</a></li>
              <li>Shop</li>
            </ul>
          </div>
        </nav>
        <!-- End of Breadcrumb -->

        <!-- Start of Page Content -->
        <div class="page-content">
          <div class="container">
            <!-- Start of Shop Content -->
            <div class="shop-content row gutter-lg mb-10">
              <!-- Start of Sidebar, Shop Sidebar -->
              @include('shop.aside')
              <!-- End of Shop Sidebar -->

              <!-- Start of Shop Main Content -->
              <div class="main-content">
                  @include('shop.nav')
                  <div class="product-wrapper row cols-md-3 cols-sm-2 cols-2">
                      @forelse($products as $product)
                          <div class="product-wrap">
                              <div class="product text-center">
                                  <figure class="product-media">
                                      <a href="{{ route('product-details', ['product_id' => $product['Id']]) }}">
                                          <img src="https://prodhanltd.com/{{ $product['Image'] }}"
                                               alt="{{ $product['Title'] }}"
                                               width="300"
                                               height="338" />
                                      </a>
                                      <div class="product-action-horizontal">
                                          <a href="#" class="btn-product-icon btn-cart w-icon-cart" title="Add to cart"></a>
                                          <a href="#" class="btn-product-icon btn-wishlist w-icon-heart" title="Wishlist"></a>
                                          <a href="#" class="btn-product-icon btn-compare w-icon-compare" title="Compare"></a>
                                          <a href="#" class="btn-product-icon btn-quickview w-icon-search" title="Quick View"></a>
                                      </div>
                                  </figure>
                                  <div class="product-details">
                                      <div class="product-cat">
                                          <a href="#">{{ $selectedCategory }}</a>
                                      </div>
                                      <h3 class="product-name">
                                          <a href="{{ route('product-details', ['product_id' => $product['Id']]) }}">
                                              {{ Str::limit($product['Title'], 40) }}
                                          </a>
                                      </h3>
                                      <div class="ratings-container">
                                          <div class="ratings-full">
                                              <span class="ratings" style="width: 100%"></span>
                                          </div>
                                      </div>
                                      <div class="product-pa-wrapper">
                                          <div class="product-price">
                                              ৳{{ $product['Price'] }}
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      @empty
                          <p class="text-danger">No products found for {{ $selectedCategory }}</p>
                      @endforelse
                  </div>

                  @include('shop.paginate')
              </div>
              <!-- End of Shop Main Content -->
            </div>
            <!-- End of Shop Content -->
          </div>
        </div>
        <!-- End of Page Content -->
      </main>
@endsection
