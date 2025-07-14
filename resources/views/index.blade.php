@extends('layouts.app')

@section('content')
<div class="container">
          <div class="intro-wrapper mb-4">
            <div
              class="swiper-container swiper-theme nav-inner swiper-nav-md animation-slider"
              data-swiper-options="{
                        'autoplay': {
                            'delay': 8000,
                            'disableOnInteraction': false
                        }
                    }"
            >
              <div class="swiper-wrapper row cols-1 gutter-no">
                <div
                  class="swiper-slide banner banner-fixed intro-slide intro-slide1 br-sm"
                  style="
                    background-image: url(assets/images/demos/demo3/slides/slide-1.jpg);
                    background-color: #262729;
                  "
                >
                  <div class="banner-content y-50 x-50 w-100 text-center">
                    <h5
                      class="banner-subtitle text-primary font-weight-normal text-capitalize font-secondary ls-25 slide-animate"
                      data-animation-options="{'name': 'fadeInDownShorter', 'duration': '.8s'}"
                    >
                      Mega Sale
                    </h5>
                    <h3
                      class="banner-title text-white text-capitalize ls-25 lh-1 slide-animate"
                      data-animation-options="{'name': 'fadeInRightShorter', 'duration': '.5s', 'delay': '.5s'}"
                    >
                      2021 Men's Lifestyle
                    </h3>
                    <p
                      class="ls-25 slide-animate"
                      data-animation-options="{
                                        'name': 'fadeInLeftShorter', 'duration': '.5s', 'delay': '.5s'
                                    }"
                    >
                      Get Free Shipping on all orders over $99.00
                    </p>
                    <a
                      href="shop-banner-sidebar.html"
                      class="btn btn-white btn-outline btn-rounded btn-icon-right slide-animate"
                      data-animation-options="{'name': 'fadeInUpShorter', 'duration': '.5s', 'delay': '.5s'}"
                    >
                      Shop Now<i class="w-icon-long-arrow-right"></i>
                    </a>
                  </div>
                </div>
                <!-- End Of Intro Slide 1 -->
                <div
                  class="swiper-slide banner banner-fixed intro-slide intro-slide2 br-sm"
                  style="
                    background-image: url(assets/images/demos/demo3/slides/slide-2.jpg);
                    background-color: #dce0df;
                  "
                >
                  <div class="banner-content y-50">
                    <h5
                      class="banner-subtitle text-primary font-secondary font-weight-normal text-capitalize mb-0 lh-1 ls-25 slide-animate"
                      data-animation-options="{'name': 'fadeInDownShorter', 'duration': '.8s'}"
                    >
                      Best Seller
                    </h5>
                    <h3
                      class="banner-title text-capitalize lh-.8 slide-animate"
                      data-animation-options="{'name': 'fadeInDownShorter', 'duration': '.8s', 'delay': '.4s'}"
                    >
                      Kitchen Electronic
                    </h3>
                    <p
                      class="text-default font-weight-normal ls-25 slide-animate"
                      data-animation-options="{
                                        'name': 'fadeInDownShorter', 'duration': '.8s', 'delay': '.6s'
                                    }"
                    >
                      Get Free Shipping on all orders over
                      <strong class="text-primary">$99.00</strong>
                    </p>
                    <a
                      href="shop-banner-sidebar.html"
                      class="btn btn-white btn-rounded btn-icon-right slide-animate"
                      data-animation-options="{'name': 'fadeInDownShorter', 'duration': '.8s', 'delay': '.8s'}"
                      >Shop Now<i class="w-icon-long-arrow-right"></i
                    ></a>
                  </div>
                </div>
                <!-- End of Intro Slide 3 -->
                <div
                  class="swiper-slide banner banner-fixed intro-slide intro-slide3 br-sm"
                  style="
                    background-image: url(assets/images/demos/demo3/slides/slide-3.jpg);
                    background-color: #696a6e;
                  "
                >
                  <div class="banner-content y-50 text-right">
                    <div
                      class="slide-animate"
                      data-animation-options="{
                                        'name': 'fadeInUpShorter', 'duration': '.7s'
                                    }"
                    >
                      <h5
                        class="banner-subtitle text-primary font-secondary font-weight-normal ls-25 mb-0 lh-1"
                      >
                        New Arrivals
                      </h5>
                      <h3 class="banner-title text-white text-capitalize lh-1">
                        Sports Sneakers
                      </h3>
                      <p class="text-white ls-25">
                        Get Free Shipping on all orders over
                        <strong>$99.00</strong>
                      </p>
                      <a
                        href="shop-banner-sidebar.html"
                        class="btn btn-white btn-outline btn-rounded btn-icon-right"
                      >
                        Shop Now<i class="w-icon-long-arrow-right"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
              <button class="swiper-button-next"></button>
              <button class="swiper-button-prev"></button>
            </div>
          </div>
          <!-- End of Intro Wrapper -->
          <div
            class="swiper-container swiper-theme intro-banner appear-animate"
            data-swiper-options="{
                    'spaceBetween': 20,
                    'slidesPerView': 1,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2,
                            'spaceBetween': 15
                        },
                        '992': {
                            'slidesPerView': 3
                        }
                    }
                }"
          >
            <div class="swiper-wrapper row cols-lg-3 cols-sm-2 cols-1">
              <div class="swiper-slide">
                <figure class="banner banner-fixed br-sm">
                  <img
                    src="assets/images/demos/demo3/categories/1.jpg"
                    alt="Category Banner"
                    width="400"
                    height="200"
                    style="background-color: #3c3c3c"
                  />
                  <div class="banner-content y-50">
                    <h5
                      class="banner-subtitle text-primary text-uppercase font-weight-bold ls-25"
                    >
                      Top Products
                    </h5>
                    <h3 class="banner-title text-white font-weight-bold">
                      Tranding NIKE<br />Sneaker
                    </h3>
                    <a
                      href="shop-banner-sidebar.html"
                      class="btn btn-white btn-link btn-underline btn-icon-right"
                    >
                      Shop Now<i class="w-icon-long-arrow-right"></i>
                    </a>
                  </div>
                </figure>
              </div>

              <div class="swiper-slide">
                <figure class="banner banner-fixed br-sm">
                  <img
                    src="assets/images/demos/demo3/categories/2.jpg"
                    alt="Category Banner"
                    width="400"
                    height="200"
                    style="background-color: #e1e1e1"
                  />
                  <div class="banner-content y-50">
                    <h5
                      class="banner-subtitle text-primary text-uppercase font-weight-bold ls-25"
                    >
                      New Arrivals
                    </h5>
                    <h3 class="banner-title ls-25">
                      Vegan Friendly<br />Makeup
                    </h3>
                    <a
                      href="shop-banner-sidebar.html"
                      class="btn btn-dark btn-link btn-underline btn-icon-right"
                    >
                      Shop Now<i class="w-icon-long-arrow-right"></i>
                    </a>
                  </div>
                </figure>
              </div>

              <div class="swiper-slide">
                <figure class="banner banner-fixed br-sm">
                  <img
                    src="assets/images/demos/demo3/categories/3.jpg"
                    alt="Category Banner"
                    width="400"
                    height="200"
                    style="background-color: #57585d"
                  />
                  <div class="banner-content y-50">
                    <h5
                      class="banner-subtitle text-primary text-uppercase font-weight-bold ls-25"
                    >
                      Best Seller
                    </h5>
                    <h3 class="banner-title text-white font-weight-bold ls-15">
                      Fashion Apple<br />Accessories
                    </h3>
                    <a
                      href="shop-banner-sidebar.html"
                      class="btn btn-white btn-link btn-underline btn-icon-right"
                    >
                      Shop Now<i class="w-icon-long-arrow-right"></i>
                    </a>
                  </div>
                </figure>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>

          <div
            class="swiper-container swiper-theme icon-box-wrapper appear-animate br-sm mt-6 mb-10"
            data-swiper-options="{
                    'slidesPerView': 1,
                    'breakpoints': {
                        '576': {
                            'slidesPerView': 2
                        },
                        '768': {
                            'slidesPerView': 3
                        },
                        '992': {
                            'slidesPerView': 3
                        },
                        '1200': {
                            'slidesPerView': 4
                        }
                    }
                }"
          >
            <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-1">
              <div class="swiper-slide icon-box icon-box-side text-dark">
                <span class="icon-box-icon icon-shipping">
                  <i class="w-icon-truck"></i>
                </span>
                <div class="icon-box-content">
                  <h4 class="icon-box-title mb-1 ls-normal">
                    Free Shipping & Returns
                  </h4>
                  <p class="text-default">For all orders over $99</p>
                </div>
              </div>
              <div class="swiper-slide icon-box icon-box-side text-dark">
                <span class="icon-box-icon icon-payment">
                  <i class="w-icon-bag"></i>
                </span>
                <div class="icon-box-content">
                  <h4 class="icon-box-title mb-1 ls-normal">Secure Payment</h4>
                  <p class="text-default">We ensure secure payment</p>
                </div>
              </div>
              <div
                class="swiper-slide icon-box icon-box-side text-dark icon-box-money"
              >
                <span class="icon-box-icon icon-money">
                  <i class="w-icon-money"></i>
                </span>
                <div class="icon-box-content">
                  <h4 class="icon-box-title mb-1 ls-normal">
                    Money Back Guarantee
                  </h4>
                  <p class="text-default">Any back within 30 days</p>
                </div>
              </div>
              <div
                class="swiper-slide icon-box icon-box-side text-dark icon-box-chat"
              >
                <span class="icon-box-icon icon-chat">
                  <i class="w-icon-chat"></i>
                </span>
                <div class="icon-box-content">
                  <h4 class="icon-box-title mb-1 ls-normal">
                    Customer Support
                  </h4>
                  <p class="text-default">Call or email us 24/7</p>
                </div>
              </div>
            </div>
          </div>
          <!-- End of Iocn Box Wrapper -->

          <h2 class="title text-left pt-1 mb-5 appear-animate">
            Most Popular Brand
          </h2>
          <div class="swiper">
            <div
              class="swiper-container category-wrapper swiper-theme appear-animate"
              data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 2,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 3
                            },
                            '768': {
                                'slidesPerView': 4
                            },
                            '992': {
                                'slidesPerView': 5
                            },
                            '1200': {
                                'slidesPerView': 6
                            }
                        }
                    }"
            >
              <div
                class="swiper-wrapper row cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2"
              >
                <div class="swiper-slide category category-ellipse">
                  <figure class="category-media">
                    <a href="shop-banner-sidebar.html">
                      <img
                        src="assets/images/demos/demo3/categories/4.jpg"
                        alt="Categroy"
                        width="190"
                        height="190"
                        style="background-color: #5c92c0"
                      />
                    </a>
                  </figure>
                  <div class="category-content">
                    <h4 class="category-name">
                      <a href="shop-banner-sidebar.html">Adidas</a>
                    </h4>
                  </div>
                </div>
                <div class="swiper-slide category category-ellipse">
                  <figure class="category-media">
                    <a href="shop-banner-sidebar.html">
                      <img
                        src="assets/images/demos/demo3/categories/5.jpg"
                        alt="Categroy"
                        width="190"
                        height="190"
                        style="background-color: #9bc4ca"
                      />
                    </a>
                  </figure>
                  <div class="category-content">
                    <h4 class="category-name">
                      <a href="shop-banner-sidebar.html">Nike</a>
                    </h4>
                  </div>
                </div>
                <div class="swiper-slide category category-ellipse">
                  <figure class="category-media">
                    <a href="shop-banner-sidebar.html">
                      <img
                        src="assets/images/demos/demo3/categories/6.jpg"
                        alt="Categroy"
                        width="190"
                        height="190"
                        style="background-color: #48555b"
                      />
                    </a>
                  </figure>
                  <div class="category-content">
                    <h4 class="category-name">
                      <a href="shop-banner-sidebar.html">Samsung</a>
                    </h4>
                  </div>
                </div>
                <div class="swiper-slide category category-ellipse">
                  <figure class="category-media">
                    <a href="shop-banner-sidebar.html">
                      <img
                        src="assets/images/demos/demo3/categories/7.jpg"
                        alt="Categroy"
                        width="190"
                        height="190"
                        style="background-color: #d4e5ef"
                      />
                    </a>
                  </figure>
                  <div class="category-content">
                    <h4 class="category-name">
                      <a href="shop-banner-sidebar.html">Xbox</a>
                    </h4>
                  </div>
                </div>
                <div class="swiper-slide category category-ellipse">
                  <figure class="category-media">
                    <a href="shop-banner-sidebar.html">
                      <img
                        src="assets/images/demos/demo3/categories/8.jpg"
                        alt="Categroy"
                        width="190"
                        height="190"
                        style="background-color: #6a7881"
                      />
                    </a>
                  </figure>
                  <div class="category-content">
                    <h4 class="category-name">
                      <a href="shop-banner-sidebar.html">Xiaomi</a>
                    </h4>
                  </div>
                </div>
                <div class="swiper-slide category category-ellipse">
                  <figure class="category-media">
                    <a href="shop-banner-sidebar.html">
                      <img
                        src="assets/images/demos/demo3/categories/9.jpg"
                        alt="Categroy"
                        width="190"
                        height="190"
                        style="background-color: #e4e4e4"
                      />
                    </a>
                  </figure>
                  <div class="category-content">
                    <h4 class="category-name">
                      <a href="shop-banner-sidebar.html">Apple</a>
                    </h4>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <!-- End of Category Wrapper -->

          <div class="row deals-wrapper appear-animate mb-7">
            <div class="col-lg-9 mb-4">
              <div class="single-product h-100 br-sm">
                <h4
                  class="title-sm title-underline font-weight-bolder ls-normal"
                >
                  Deals Hot Of The Day
                </h4>
                <div class="swiper">
                  <div
                    class="swiper-container swiper-theme nav-top swiper-nav-lg"
                    data-swiper-options="{
                                    'spaceBetween': 20,
                                    'slidesPerView': 1
                                }"
                  >
                    <div class="swiper-wrapper row cols-1 gutter-no">
                      <div class="swiper-slide">
                        <div class="product product-single row">
                          <div class="col-md-6">
                            <div
                              class="product-gallery product-gallery-vertical mb-0"
                            >
                              <div
                                class="swiper-container product-single-swiper swiper-theme nav-inner"
                              >
                                <div
                                  class="swiper-wrapper row cols-1 gutter-no"
                                >
                                  <div class="swiper-slide">
                                    <figure class="product-image">
                                      <img
                                        src="assets/images/demos/demo3/products/1-1-600x675.jpg"
                                        data-zoom-image="assets/images/demos/demo3/products/1-1-800x900.jpg"
                                        alt="Product Image"
                                        width="800"
                                        height="900"
                                      />
                                    </figure>
                                  </div>
                                  <div class="swiper-slide">
                                    <figure class="product-image">
                                      <img
                                        src="assets/images/demos/demo3/products/1-2-600x675.jpg"
                                        data-zoom-image="assets/images/demos/demo3/products/1-2-800x900.jpg"
                                        alt="Product Image"
                                        width="800"
                                        height="900"
                                      />
                                    </figure>
                                  </div>
                                  <div class="swiper-slide">
                                    <figure class="product-image">
                                      <img
                                        src="assets/images/demos/demo3/products/1-3-600x675.jpg"
                                        data-zoom-image="assets/images/demos/demo3/products/1-3-800x900.jpg"
                                        alt="Product Image"
                                        width="800"
                                        height="900"
                                      />
                                    </figure>
                                  </div>
                                  <div class="swiper-slide">
                                    <figure class="product-image">
                                      <img
                                        src="assets/images/demos/demo3/products/1-4-600x675.jpg"
                                        data-zoom-image="assets/images/demos/demo3/products/1-4-800x900.jpg"
                                        alt="Product Image"
                                        width="800"
                                        height="900"
                                      />
                                    </figure>
                                  </div>
                                </div>
                                <button class="swiper-button-next"></button>
                                <button class="swiper-button-prev"></button>
                              </div>
                              <div
                                class="product-thumbs-wrap swiper-container"
                                data-swiper-options="{
                                                            'breakpoints': {
                                                                '992': {
                                                                    'direction': 'vertical',
                                                                    'slidesPerView': 'auto'
                                                                }
                                                            }
                                                        }"
                              >
                                <div
                                  class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm"
                                >
                                  <div class="swiper-slide product-thumb">
                                    <img
                                      src="assets/images/demos/demo3/products/1-1-600x675.jpg"
                                      alt="Product thumb"
                                      width="60"
                                      height="68"
                                    />
                                  </div>
                                  <div class="swiper-slide product-thumb">
                                    <img
                                      src="assets/images/demos/demo3/products/1-2-600x675.jpg"
                                      alt="Product thumb"
                                      width="60"
                                      height="68"
                                    />
                                  </div>
                                  <div class="swiper-slide product-thumb">
                                    <img
                                      src="assets/images/demos/demo3/products/1-3-600x675.jpg"
                                      alt="Product thumb"
                                      width="60"
                                      height="68"
                                    />
                                  </div>
                                  <div class="swiper-slide product-thumb">
                                    <img
                                      src="assets/images/demos/demo3/products/1-4-600x675.jpg"
                                      alt="Product thumb"
                                      width="60"
                                      height="68"
                                    />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="product-details scrollable">
                              <h2 class="product-title mb-1">
                                <a href="product-details.php"
                                  >Red Cap Sound Marker</a
                                >
                              </h2>

                              <hr class="product-divider" />

                              <div class="product-price">
                                <ins class="new-price ls-50"
                                  >$135.35 - $224.67</ins
                                >
                              </div>

                              <div
                                class="product-countdown-container flex-wrap"
                              >
                                <label class="mr-2 text-default"
                                  >Offer Ends In:</label
                                >
                                <div
                                  class="product-countdown countdown-compact"
                                  data-until="2022, 12, 31"
                                  data-compact="true"
                                >
                                  629 days, 11: 59: 52
                                </div>
                              </div>

                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 80%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a href="#" class="rating-reviews"
                                  >(3 Reviews)</a
                                >
                              </div>

                              <div
                                class="product-form product-variation-form product-size-swatch mb-3"
                              >
                                <label class="mb-1">Size:</label>
                                <div
                                  class="flex-wrap d-flex align-items-center product-variations"
                                >
                                  <a href="#" class="size">Extra Large</a>
                                  <a href="#" class="size">Large</a>
                                  <a href="#" class="size">Medium</a>
                                  <a href="#" class="size">Small</a>
                                </div>
                                <a href="#" class="product-variation-clean"
                                  >Clean All</a
                                >
                              </div>

                              <div class="product-variation-price">
                                <span></span>
                              </div>

                              <div class="product-form pt-4">
                                <div class="product-qty-form mb-2 mr-2">
                                  <div class="input-group">
                                    <input
                                      class="quantity form-control"
                                      type="number"
                                      min="1"
                                      max="10000000"
                                    />
                                    <button
                                      class="quantity-plus w-icon-plus"
                                    ></button>
                                    <button
                                      class="quantity-minus w-icon-minus"
                                    ></button>
                                  </div>
                                </div>
                                <button class="btn btn-primary btn-cart">
                                  <i class="w-icon-cart"></i>
                                  <span>Add to Cart</span>
                                </button>
                              </div>

                              <div class="social-links-wrapper mt-1">
                                <div class="social-links">
                                  <div
                                    class="social-icons social-no-color border-thin"
                                  >
                                    <a
                                      href="#"
                                      class="social-icon social-facebook w-icon-facebook"
                                    ></a>
                                    <a
                                      href="#"
                                      class="social-icon social-twitter w-icon-twitter"
                                    ></a>
                                    <a
                                      href="#"
                                      class="social-icon social-pinterest fab fa-pinterest-p"
                                    ></a>
                                    <a
                                      href="#"
                                      class="social-icon social-whatsapp fab fa-whatsapp"
                                    ></a>
                                    <a
                                      href="#"
                                      class="social-icon social-youtube fab fa-linkedin-in"
                                    ></a>
                                  </div>
                                </div>
                                <span class="divider d-xs-show"></span>
                                <div class="product-link-wrapper d-flex">
                                  <a
                                    href="#"
                                    class="btn-product-icon btn-wishlist w-icon-heart"
                                    ><span></span
                                  ></a>
                                  <a
                                    href="#"
                                    class="btn-product-icon btn-compare btn-icon-left w-icon-compare"
                                    ><span></span
                                  ></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End of Product Single -->
                      <div class="swiper-slide">
                        <div class="product product-single row">
                          <div class="col-md-6">
                            <div
                              class="product-gallery product-gallery-vertical mb-0"
                            >
                              <div
                                class="swiper-container product-single-swiper swiper-theme nav-inner"
                              >
                                <div
                                  class="swiper-wrapper row cols-1 gutter-no"
                                >
                                  <div class="swiper-slide">
                                    <figure class="product-image">
                                      <img
                                        src="assets/images/demos/demo3/products/2-1-600x675.jpg"
                                        data-zoom-image="assets/images/demos/demo3/products/2-1-800x900.jpg"
                                        alt="Product Image"
                                        width="800"
                                        height="900"
                                      />
                                    </figure>
                                  </div>
                                  <div class="swiper-slide">
                                    <figure class="product-image">
                                      <img
                                        src="assets/images/demos/demo3/products/2-2-600x675.jpg"
                                        data-zoom-image="assets/images/demos/demo3/products/2-2-800x900.jpg"
                                        alt="Product Image"
                                        width="800"
                                        height="900"
                                      />
                                    </figure>
                                  </div>
                                  <div class="swiper-slide">
                                    <figure class="product-image">
                                      <img
                                        src="assets/images/demos/demo3/products/2-3-600x675.jpg"
                                        data-zoom-image="assets/images/demos/demo3/products/2-3-800x900.jpg"
                                        alt="Product Image"
                                        width="800"
                                        height="900"
                                      />
                                    </figure>
                                  </div>
                                  <div class="swiper-slide">
                                    <figure class="product-image">
                                      <img
                                        src="assets/images/demos/demo3/products/2-4-600x675.jpg"
                                        data-zoom-image="assets/images/demos/demo3/products/2-4-800x900.jpg"
                                        alt="Product Image"
                                        width="800"
                                        height="900"
                                      />
                                    </figure>
                                  </div>
                                </div>
                                <button class="swiper-button-next"></button>
                                <button class="swiper-button-prev"></button>
                              </div>
                              <div
                                class="product-thumbs-wrap swiper-container"
                                data-swiper-options="{
                                                            'breakpoints': {
                                                                '992': {
                                                                    'direction': 'vertical',
                                                                    'slidesPerView': 'auto'
                                                                }
                                                            }
                                                        }"
                              >
                                <div
                                  class="product-thumbs swiper-wrapper row cols-lg-1 cols-4 gutter-sm"
                                >
                                  <div class="swiper-slide product-thumb">
                                    <img
                                      src="assets/images/demos/demo3/products/2-1-600x675.jpg"
                                      alt="Product thumb"
                                      width="60"
                                      height="68"
                                    />
                                  </div>
                                  <div class="swiper-slide product-thumb">
                                    <img
                                      src="assets/images/demos/demo3/products/2-2-600x675.jpg"
                                      alt="Product thumb"
                                      width="60"
                                      height="68"
                                    />
                                  </div>
                                  <div class="swiper-slide product-thumb">
                                    <img
                                      src="assets/images/demos/demo3/products/2-3-600x675.jpg"
                                      alt="Product thumb"
                                      width="60"
                                      height="68"
                                    />
                                  </div>
                                  <div class="swiper-slide product-thumb">
                                    <img
                                      src="assets/images/demos/demo3/products/2-4-600x675.jpg"
                                      alt="Product thumb"
                                      width="60"
                                      height="68"
                                    />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="product-details scrollable">
                              <h2 class="product-title mb-1">
                                <a href="product-details.php"
                                  >Mini Wireless Earphone</a
                                >
                              </h2>

                              <hr class="product-divider" />

                              <div class="product-price">
                                <ins class="new-price ls-50">$26.00</ins>
                              </div>

                              <div
                                class="product-countdown-container flex-wrap"
                              >
                                <label class="mr-2 text-default"
                                  >Offer Ends In:</label
                                >
                                <div
                                  class="product-countdown countdown-compact"
                                  data-until="2022, 12, 31"
                                  data-compact="true"
                                >
                                  629 days, 11: 59: 52
                                </div>
                              </div>

                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 80%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                                <a
                                  href="#product-tab-reviews"
                                  class="rating-reviews"
                                  >(3 Reviews)</a
                                >
                              </div>

                              <div
                                class="product-form product-variation-form product-size-swatch mb-3"
                              >
                                <label class="mb-1">Size:</label>
                                <div
                                  class="flex-wrap d-flex align-items-center product-variations"
                                >
                                  <a href="#" class="size">Extra Large</a>
                                  <a href="#" class="size">Large</a>
                                  <a href="#" class="size">Medium</a>
                                  <a href="#" class="size">Small</a>
                                </div>
                                <a href="#" class="product-variation-clean"
                                  >Clean All</a
                                >
                              </div>

                              <div class="product-variation-price">
                                <span></span>
                              </div>

                              <div class="product-form pt-4">
                                <div class="product-qty-form mb-2 mr-2">
                                  <div class="input-group">
                                    <input
                                      class="quantity form-control"
                                      type="number"
                                      min="1"
                                      max="10000000"
                                    />
                                    <button
                                      class="quantity-plus la la-plus"
                                    ></button>
                                    <button
                                      class="quantity-minus w-icon-minus"
                                    ></button>
                                  </div>
                                </div>
                                <button class="btn btn-primary btn-cart">
                                  <i class="w-icon-cart"></i>
                                  <span>Add to Cart</span>
                                </button>
                              </div>

                              <div class="social-links-wrapper mt-1">
                                <div class="social-links">
                                  <div
                                    class="social-icons social-no-color border-thin"
                                  >
                                    <a
                                      href="#"
                                      class="social-icon social-facebook w-icon-facebook"
                                    ></a>
                                    <a
                                      href="#"
                                      class="social-icon social-twitter w-icon-twitter"
                                    ></a>
                                    <a
                                      href="#"
                                      class="social-icon social-pinterest fab fa-pinterest-p"
                                    ></a>
                                    <a
                                      href="#"
                                      class="social-icon social-whatsapp fab fa-whatsapp"
                                    ></a>
                                    <a
                                      href="#"
                                      class="social-icon social-youtube fab fa-linkedin-in"
                                    ></a>
                                  </div>
                                </div>
                                <span class="divider d-xs-show"></span>
                                <div class="product-link-wrapper d-flex">
                                  <a
                                    href="#"
                                    class="btn-product-icon btn-wishlist w-icon-heart"
                                    ><span></span
                                  ></a>
                                  <a
                                    href="#"
                                    class="btn-product-icon btn-compare btn-icon-left w-icon-compare"
                                    ><span></span
                                  ></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- End of Product Single -->
                    </div>
                    <button class="swiper-button-next"></button>
                    <button class="swiper-button-prev"></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 mb-4">
              <div
                class="widget widget-products widget-products-bordered h-100"
              >
                <div class="widget-body br-sm h-100">
                  <h4
                    class="title-sm title-underline font-weight-bolder ls-normal mb-2"
                  >
                    Top 20 Best Seller
                  </h4>
                  <div class="swiper">
                    <div
                      class="swiper-container swiper-theme nav-top"
                      data-swiper-options="{
                                        'slidesPerView': 1,
                                        'spaceBetween': 20,
                                        'breakpoints': {
                                            '576': {
                                                'slidesPerView': 2
                                            },
                                            '768': {
                                                'slidesPerView': 3
                                            },
                                            '992': {
                                                'slidesPerView': 1
                                            }
                                        }
                                    }"
                    >
                      <div class="swiper-wrapper row cols-lg-1 cols-md-3">
                        <div class="swiper-slide product-widget-wrap">
                          <div class="product product-widget bb-no">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/1-1.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php"
                                  >Fashionable Leather Satchel</a
                                >
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 80%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$25.68</ins>
                              </div>
                            </div>
                          </div>
                          <div class="product product-widget bb-no">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/1-2.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php"
                                  >Mini Wireless Earphone</a
                                >
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 80%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$29.99 - $49.00</ins>
                              </div>
                            </div>
                          </div>
                          <div class="product product-widget">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/1-3.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php"
                                  >Women's Comforter</a
                                >
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 60%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$24.00</ins>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide product-widget-wrap">
                          <div class="product product-widget bb-no">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/1-4.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php"
                                  >Apple Fashion IPhone</a
                                >
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 100%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$123.00</ins>
                              </div>
                            </div>
                          </div>
                          <div class="product product-widget bb-no">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/1-5.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php">T-Shirt</a>
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 100%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$80.00</ins
                                ><del class="old-price">$100.00</del>
                              </div>
                            </div>
                          </div>
                          <div class="product product-widget">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/1-6.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php">Tea Cup</a>
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 100%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$18.00</ins>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide product-widget-wrap">
                          <div class="product product-widget bb-no">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/1-7.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php"
                                  >Soft Sound Marker</a
                                >
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 100%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$39.00</ins>
                              </div>
                            </div>
                          </div>
                          <div class="product product-widget bb-no">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/1-8.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php">Smart Watch</a>
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 100%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$230.95</ins
                                ><del class="old-price">$253.50</del>
                              </div>
                            </div>
                          </div>
                          <div class="product product-widget">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/1-9.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php"
                                  >Rotate Crusher</a
                                >
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 60%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$65.00</ins
                                ><del class="old-price">$70.00</del>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="swiper-button-next"></button>
                      <button class="swiper-button-prev"></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End of Deals Wrapper -->



          <h2 class="title text-left appear-animate mb-5">
            Clothing &amp; Appreal
          </h2>
          <div class="row banner-product-wrapper appear-animate mb-10">
            <div class="col-lg-9 mb-4 mb-lg-0">
              <div class="banner banner-fixed br-sm appear-animate">
                <figure>
                  <img
                    src="assets/images/demos/demo3/banners/2.jpg"
                    alt="banner"
                    width="925"
                    height="298"
                    style="background-color: #ecede8"
                  />
                </figure>
                <div class="banner-content y-50">
                  <h5
                    class="banner-subtitle text-primary font-weight-bold text-uppercase ls-25"
                  >
                    Season Lifestyle
                  </h5>
                  <h3
                    class="banner-title font-weight-bold text-uppercase ls-25"
                  >
                    Wonderful Long Weekend<br /><strong class="text-capitalize"
                      >Women's Style</strong
                    >
                  </h3>
                  <a
                    href="shop-banner-sidebar.html"
                    class="btn btn-dark btn-outline btn-rounded"
                    >Shop Now</a
                  >
                </div>
              </div>
              <div
                class="swiper-container swiper-theme mt-4"
                data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 4
                                }
                            }
                        }"
              >
                <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-2">
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/2-1-1.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                          <img
                            src="assets/images/demos/demo3/products/2-1-2.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php"
                            >Leather Stripe Watch</a
                          >
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$125.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/2-2.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php"
                            >Cavin Fashion Suede Handbag</a
                          >
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$26.43</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/2-3-1.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                          <img
                            src="assets/images/demos/demo3/products/2-3-2.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php"
                            >Multi Function Watch</a
                          >
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$110.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/2-4.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Men's Suede Belt</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$26.49</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div
                class="widget widget-products widget-products-bordered h-100"
              >
                <div class="widget-body br-sm pb-2 h-100">
                  <h4
                    class="title-sm title-underline font-weight-bolder ls-normal mb-2"
                  >
                    Recommend
                  </h4>
                  <div class="swiper">
                    <div
                      class="swiper-container swiper-theme nav-top"
                      data-swiper-options="{
                                        'slidesPerView': 1,
                                        'spaceBetween': 20,
                                        'breakpoints': {
                                            '576': {
                                                'slidesPerView': 2
                                            },
                                            '992': {
                                                'slidesPerView': 1
                                            }
                                        }
                                    }"
                    >
                      <div class="swiper-wrapper row cols-lg-1 cols-md-3">
                        <div class="swiper-slide product-widget-wrap">
                          <div class="product product-widget bb-no">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/3-1.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php">T-Shirt</a>
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 80%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$20.00</ins>
                              </div>
                            </div>
                          </div>
                          <div class="product product-widget bb-no">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/3-2.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php"
                                  >Best Pedestrian Bag</a
                                >
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 80%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$35.88</ins>
                              </div>
                            </div>
                          </div>
                          <div class="product product-widget bb-no">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/3-3.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php"
                                  >Fashionable Original Coat</a
                                >
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 60%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$89.00</ins>
                              </div>
                            </div>
                          </div>
                          <div class="product product-widget">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/3-4.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php">Classic Hat</a>
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 60%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$23.00</ins>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide product-widget-wrap">
                          <div class="product product-widget bb-no">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/3-5.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php">Smart Watch</a>
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 100%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$230.95</ins>
                              </div>
                            </div>
                          </div>
                          <div class="product product-widget bb-no">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/3-6.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php"
                                  >Women's Comforter</a
                                >
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 100%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$24.00</ins>
                              </div>
                            </div>
                          </div>
                          <div class="product product-widget bb-no">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/3-7.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php"
                                  >Fashionable Leather Satchel</a
                                >
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 100%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$25.68</ins>
                              </div>
                            </div>
                          </div>
                          <div class="product product-widget">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/3-8.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php">Gold Watch</a>
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 100%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$189.90</ins>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="swiper-button-next"></button>
                      <button class="swiper-button-prev"></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Banner Product Wrapper -->

          <div class="row category-accessories appear-animate mb-7">
            <div class="col-md-6 mb-4">
              <figure class="banner banner-fixed br-sm">
                <img
                  src="assets/images/demos/demo3/categories/10.jpg"
                  alt="Category Banner"
                  width="610"
                  height="200"
                  style="background-color: #52575b"
                />
                <div class="banner-content y-50">
                  <h5
                    class="banner-subtitle font-weight-bold text-primary text-uppercase ls-25"
                  >
                    Top Selling
                  </h5>
                  <h3
                    class="banner-title text-white text-capitalize font-weight-bold"
                  >
                    XBox Gaming<br />Accessories
                  </h3>
                  <a
                    href="shop-banner-sidebar.html"
                    class="btn btn-white btn-link btn-underline btn-icon-right"
                  >
                    Shop Now<i class="w-icon-long-arrow-right"></i>
                  </a>
                </div>
              </figure>
            </div>
            <div class="col-md-6 mb-4">
              <figure class="banner banner-fixed br-sm">
                <img
                  src="assets/images/demos/demo3/categories/11.jpg"
                  alt="Category Banner"
                  width="610"
                  height="200"
                  style="background-color: #f0f0f0"
                />
                <div class="banner-content y-50">
                  <h5
                    class="banner-subtitle font-weight-bold text-primary text-uppercase ls-25"
                  >
                    Season Sale
                  </h5>
                  <h3 class="banner-title text-capitalize ls-15">
                    Fashion Figure<br />Skate Sale
                  </h3>
                  <a
                    href="shop-banner-sidebar.html"
                    class="btn btn-dark btn-link btn-underline btn-icon-right"
                  >
                    Shop Now<i class="w-icon-long-arrow-right"></i>
                  </a>
                </div>
              </figure>
            </div>
          </div>
          <!-- End of Category Accessories -->

          <h2 class="title text-left appear-animate mb-5">Consumer Electric</h2>
          <div class="row banner-product-wrapper appear-animate mb-7">
            <div class="col-lg-9 mb-4 mb-lg-0">
              <div class="banner banner-fixed br-sm appear-animate">
                <figure>
                  <img
                    src="assets/images/demos/demo3/banners/3.jpg"
                    alt="banner"
                    width="925"
                    height="298"
                    style="background-color: #56575c"
                  />
                </figure>
                <div class="banner-content y-50">
                  <h5
                    class="banner-subtitle text-primary font-weight-bold text-uppercase ls-25"
                  >
                    Office Electronics
                  </h5>
                  <h3
                    class="banner-title font-weight-bold text-uppercase text-white ls-25"
                  >
                    Wonderful Long Weekend<br /><strong class="text-capitalize"
                      >Apple Drones</strong
                    >
                  </h3>
                  <a
                    href="shop-banner-sidebar.html"
                    class="btn btn-white btn-outline btn-rounded"
                    >Shop Now</a
                  >
                </div>
              </div>
              <div
                class="swiper-container swiper-theme mt-4"
                data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 4
                                }
                            }
                        }"
              >
                <div class="swiper-wrapper row cols-md-4 cols-sm-3 cols-2">
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/4-1.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Drone</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$632.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/4-2-1.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                          <img
                            src="assets/images/demos/demo3/products/4-2-2.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Official Camera</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$230.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/4-3.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Phone Charge</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$16.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/4-4.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Smart Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$230.95</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                </div>
              </div>
            </div>
            <div class="col-lg-3">
              <div
                class="widget widget-products widget-products-bordered h-100"
              >
                <div class="widget-body br-sm pb-2 h-100">
                  <h4
                    class="title-sm title-underline font-weight-bolder ls-normal mb-2"
                  >
                    Popular
                  </h4>
                  <div class="swiper">
                    <div
                      class="swiper-container swiper-theme nav-top"
                      data-swiper-options="{
                                        'slidesPerView': 1,
                                        'spaceBetween': 20,
                                        'breakpoints': {
                                            '576': {
                                                'slidesPerView': 2
                                            },
                                            '992': {
                                                'slidesPerView': 1
                                            }
                                        }
                                    }"
                    >
                      <div class="swiper-wrapper row cols-lg-1 cols-md-3">
                        <div class="swiper-slide product-widget-wrap">
                          <div class="product product-widget bb-no">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/3-5.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php">Smart Watch</a>
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 80%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$230.95</ins>
                              </div>
                            </div>
                          </div>
                          <div class="product product-widget bb-no">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/3-6.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php"
                                  >Women's Comforter</a
                                >
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 80%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$24.00</ins>
                              </div>
                            </div>
                          </div>
                          <div class="product product-widget bb-no">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/3-7.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php"
                                  >Fashionable Leather Satchel</a
                                >
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 60%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$25.68</ins>
                              </div>
                            </div>
                          </div>
                          <div class="product product-widget">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/3-8.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php">Gold Watch</a>
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width': '60%
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$189.90</ins>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide product-widget-wrap">
                          <div class="product product-widget bb-no">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/3-1.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php">T-Shirt</a>
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 100%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$20.00</ins>
                              </div>
                            </div>
                          </div>
                          <div class="product product-widget bb-no">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/3-2.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php"
                                  >Best Pedestrian Bag</a
                                >
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 100%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$35.88</ins>
                              </div>
                            </div>
                          </div>
                          <div class="product product-widget bb-no">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/3-3.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php"
                                  >Fashionable Original Coat</a
                                >
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 100%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$89.00</ins>
                              </div>
                            </div>
                          </div>
                          <div class="product product-widget">
                            <figure class="product-media">
                              <a href="product-details.php">
                                <img
                                  src="assets/images/demos/demo3/products/3-4.jpg"
                                  alt="Product"
                                  width="105"
                                  height="118"
                                />
                              </a>
                            </figure>
                            <div class="product-details">
                              <h4 class="product-name">
                                <a href="product-details.php">Classic Hat</a>
                              </h4>
                              <div class="ratings-container">
                                <div class="ratings-full">
                                  <span
                                    class="ratings"
                                    style="width: 100%"
                                  ></span>
                                  <span class="tooltiptext tooltip-top"></span>
                                </div>
                              </div>
                              <div class="product-price">
                                <ins class="new-price">$23.00</ins>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button class="swiper-button-next"></button>
                      <button class="swiper-button-prev"></button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End of Banner Product Wrapper -->

          <h2 class="title text-left mb-5 appear-animate">
            Our Most Popular Categories
          </h2>
          <div class="tab tab-nav-center tab-nav-boxed appear-animate">
            <ul class="nav nav-tabs text-uppercase" role="tablist">
              <li class="nav-item">
                <a href="#tab-1" class="nav-link active">New Arrivals</a>
              </li>
              <li class="nav-item">
                <a href="#tab-2" class="nav-link">Best Seller</a>
              </li>
              <li class="nav-item">
                <a href="#tab-3" class="nav-link">Most Popular</a>
              </li>
              <li class="nav-item">
                <a href="#tab-4" class="nav-link">Featured</a>
              </li>
            </ul>
          </div>
          <div class="tab-content appear-animate">
            <div class="tab-pane active" id="tab-1">
              <div
                class="swiper-container swiper-theme"
                data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 5
                                },
                                '992': {
                                    'slidesPerView': 6
                                }
                            }
                        }"
              >
                <div class="swiper-wrapper row cols-lg-6 cols-md-5 cols-sm-3 cols-2">
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-1-1.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                          <img
                            src="assets/images/demos/demo3/products/5-1-2.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Men's Black Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$130.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-2.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Women's Black Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$119.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-3.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Gold Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$189.90</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-4.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Women's Brown Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$150.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-5.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Men's Black Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$130.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-6.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Women's Black Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$119.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                </div>
              </div>
            </div>
            <!-- End of Tab Pane -->
            <div class="tab-pane" id="tab-2">
              <div
                class="swiper-container swiper-theme"
                data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 5
                                },
                                '992': {
                                    'slidesPerView': 6
                                }
                            }
                        }"
              >
                <div class="swiper-wrapper row cols-lg-6 cols-md-5 cols-sm-3 cols-2">
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-3.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Gold Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$189.90</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-4.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Women's Brown Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$150.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-1-1.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                          <img
                            src="assets/images/demos/demo3/products/5-1-2.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Men's Black Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$130.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-2.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Women's Black Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$119.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-5.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Men's Black Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$130.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-6.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Women's Black Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$119.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                </div>
              </div>
            </div>
            <!-- End of Tab Pane -->
            <div class="tab-pane" id="tab-3">
              <div
                class="swiper-container swiper-theme"
                data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 5
                                },
                                '992': {
                                    'slidesPerView': 6
                                }
                            }
                        }"
              >
                <div class="swiper-wrapper row cols-lg-6 cols-md-5 cols-sm-3 cols-2">
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-5.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Men's Black Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$130.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-6.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Women's Black Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$119.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-1-1.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                          <img
                            src="assets/images/demos/demo3/products/5-1-2.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Men's Black Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$130.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-2.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Women's Black Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$119.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-3.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Gold Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$189.90</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-4.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Women's Brown Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$150.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                </div>
              </div>
            </div>
            <!-- End of Tab Pane -->
            <div class="tab-pane" id="tab-4">
              <div
                class="swiper-container swiper-theme"
                data-swiper-options="{
                            'spaceBetween': 20,
                            'slidesPerView': 2,
                            'breakpoints': {
                                '576': {
                                    'slidesPerView': 3
                                },
                                '768': {
                                    'slidesPerView': 5
                                },
                                '992': {
                                    'slidesPerView': 6
                                }
                            }
                        }"
              >
                <div class="swiper-wrapper row cols-lg-6 cols-md-5 cols-sm-3 cols-2">
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-2.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Women's Black Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$119.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-3.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Gold Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$189.90</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-4.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Women's Brown Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$150.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-1-1.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                          <img
                            src="assets/images/demos/demo3/products/5-1-2.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Men's Black Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$130.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-6.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Women's Black Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$119.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                  <div class="swiper-slide product-wrap">
                    <div class="product product-simple text-center">
                      <figure class="product-media">
                        <a href="product-details.php">
                          <img
                            src="assets/images/demos/demo3/products/5-5.jpg"
                            alt="Product"
                            width="330"
                            height="338"
                          />
                        </a>
                        <div class="product-action-vertical">
                          <a
                            href="#"
                            class="btn-product-icon btn-wishlist w-icon-heart"
                            title="Add to wishlist"
                          ></a>
                          <a
                            href="#"
                            class="btn-product-icon btn-compare w-icon-compare"
                            title="Add to Compare"
                          ></a>
                        </div>
                        <div class="product-action">
                          <a
                            href="#"
                            class="btn-product btn-quickview"
                            title="Quick View"
                            >Quick View</a
                          >
                        </div>
                      </figure>
                      <div class="product-details">
                        <h4 class="product-name">
                          <a href="product-details.php">Men's Black Watch</a>
                        </h4>
                        <div class="ratings-container">
                          <div class="ratings-full">
                            <span class="ratings" style="width: 100%"></span>
                            <span class="tooltiptext tooltip-top"></span>
                          </div>
                          <a href="product-details.php" class="rating-reviews"
                            >(3 reviews)</a
                          >
                        </div>
                        <div class="product-pa-wrapper">
                          <div class="product-price">
                            <ins class="new-price">$130.00</ins>
                          </div>
                          <div class="product-action">
                            <a
                              href="#"
                              class="btn-cart btn-product btn btn-icon-right btn-link btn-underline"
                              >Add To Cart</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Product Wrap -->
                </div>
              </div>
            </div>
            <!-- End of Tab Pane -->
          </div>
          <!-- End of Tab Content -->

          <div class="post-wrapper appear-animate mb-10 pb-2">
            <h2 class="title text-left">From Our Blog</h2>
            <div
              class="swiper-container swiper-theme post-slider"
              data-swiper-options="{
                        'spaceBetween': 20,
                        'slidesPerView': 1,
                        'breakpoints': {
                            '576': {
                                'slidesPerView': 2
                            },
                            '992': {
                                'slidesPerView': 3
                            }
                        }
                    }"
            >
              <div class="swiper-wrapper row cols-lg-3 cols-sm-2 cols-1">
                <div class="swiper-slide post text-center">
                  <figure class="post-media br-sm">
                    <a href="post-single.html">
                      <img
                        src="assets/images/demos/demo3/blog/1.jpg"
                        alt="Post"
                        width="400"
                        height="240"
                        style="background-color: #c8c9cb"
                      />
                    </a>
                    <div class="post-calendar">
                      <span class="post-day">05</span>
                      <span class="post-month">MAR</span>
                    </div>
                  </figure>
                  <div class="post-details">
                    <h4 class="post-title">
                      <a href="post-single.html"
                        >We are celebrating the 2021 new season</a
                      >
                    </h4>
                    <div class="post-meta">
                      by <a href="#" class="post-author">Admin</a>
                      <a href="#" class="post-comment"
                        ><i class="w-icon-comments"></i>0 Comments</a
                      >
                    </div>
                    <a
                      href="post-single.html"
                      class="btn btn-link btn-dark btn-underline"
                      >Read More<i class="w-icon-long-arrow-right"></i
                    ></a>
                  </div>
                </div>
                <div class="swiper-slide post text-center">
                  <figure class="post-media br-sm">
                    <a href="post-single.html">
                      <img
                        src="assets/images/demos/demo3/blog/2.jpg"
                        alt="Post"
                        width="400"
                        height="240"
                        style="background-color: #e5e5e5"
                      />
                    </a>
                    <div class="post-calendar">
                      <span class="post-day">06</span>
                      <span class="post-month">MAR</span>
                    </div>
                  </figure>
                  <div class="post-details">
                    <h4 class="post-title">
                      <a href="post-single.html"
                        >The most important trends of the season</a
                      >
                    </h4>
                    <div class="post-meta">
                      by <a href="#" class="post-author">Admin</a>
                      <a href="#" class="post-comment"
                        ><i class="w-icon-comments"></i>0 Comments</a
                      >
                    </div>
                    <a
                      href="post-single.html"
                      class="btn btn-link btn-dark btn-underline"
                      >Read More<i class="w-icon-long-arrow-right"></i
                    ></a>
                  </div>
                </div>
                <div class="swiper-slide post text-center">
                  <figure class="post-media br-sm">
                    <a href="post-single.html">
                      <img
                        src="assets/images/demos/demo3/blog/3.jpg"
                        alt="Post"
                        width="400"
                        height="240"
                        style="background-color: #e5e5e5"
                      />
                    </a>
                    <div class="post-calendar">
                      <span class="post-day">08</span>
                      <span class="post-month">MAR</span>
                    </div>
                  </figure>
                  <div class="post-details">
                    <h4 class="post-title">
                      <a href="post-single.html"
                        >The best ways to create a fashion style</a
                      >
                    </h4>
                    <div class="post-meta">
                      by <a href="#" class="post-author">Admin</a>
                      <a href="#" class="post-comment"
                        ><i class="w-icon-comments"></i>0 Comments</a
                      >
                    </div>
                    <a
                      href="post-single.html"
                      class="btn btn-link btn-dark btn-underline"
                      >Read More<i class="w-icon-long-arrow-right"></i
                    ></a>
                  </div>
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
        <!--End of Catainer -->
      </div>
      <!-- End of Main -->
@endsection
