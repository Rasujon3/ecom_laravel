<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <p class="welcome-msg">
                    Welcome to RIT ecommerce
                </p>
            </div>
            <div class="header-right">
                <!-- End of DropDown Menu -->

                <!-- End of Dropdown Menu -->

                <a href="{{ route('contact-us') }}" class="d-lg-show">Contact Us</a>
                <a href="{{ route('my-account') }}" class="d-lg-show">My Account</a>
                <a href="assets/ajax/login.html" class="d-lg-show login sign-in"
                ><i class="w-icon-account"></i>Sign In</a
                >
                <span class="delimiter d-lg-show">/</span>
                <a
                    href="assets/ajax/login.html"
                    class="ml-0 d-lg-show login register"
                >Register</a
                >
            </div>
        </div>
    </div>
    <!-- End of Header Top -->

    <div class="header-middle">
        <div class="container">
            <div class="header-left mr-md-4">
                <a
                    href="#"
                    class="mobile-menu-toggle w-icon-hamburger"
                    aria-label="menu-toggle"
                >
                </a>
                <a href="{{ route('home') }}" class="logo ml-lg-0">
                    <img
                        src="{{ asset('assets/images/demos/demo3/header-logo.png') }}"
                        alt="logo"
                        width="144"
                        height="45"
                    />
                </a>
                <form
                    method="get"
                    action="#"
                    class="header-search hs-expanded hs-round d-none d-md-flex input-wrapper"
                >
                    <div class="select-box">
                        <select id="category" name="category" class="pb-0">
                            <option value="">All Categories</option>
                            <option value="4">Fashion</option>
                            <option value="5">Furniture</option>
                            <option value="6">Shoes</option>
                            <option value="7">Sports</option>
                            <option value="8">Games</option>
                            <option value="9">Computers</option>
                            <option value="10">Electronics</option>
                            <option value="11">Kitchen</option>
                            <option value="12">Clothing</option>
                        </select>
                    </div>
                    <input
                        type="text"
                        class="form-control"
                        name="search"
                        id="search"
                        placeholder="Search in..."
                        required
                    />
                    <button class="btn btn-search" type="submit">
                        <i class="w-icon-search"></i>
                    </button>
                </form>
            </div>
            <div class="header-right ml-4">
                <div class="header-call d-xs-show d-lg-flex align-items-center">
                    <a href="tel:#" class="w-icon-call"></a>
                    <div class="call-info d-lg-show">
                        <h4
                            class="chat font-weight-normal font-size-md text-normal ls-normal text-light mb-0"
                        >
                            <a
                                href="https://portotheme.com/cdn-cgi/l/email-protection#aa89"
                                class="text-capitalize"
                            >Call Us Now</a
                            >
                            :
                        </h4>
                        <a href="tel:#" class="phone-number font-weight-bolder ls-50"
                        >01500000000</a
                        >
                    </div>
                </div>
                <a
                    class="wishlist label-down link d-xs-show"
                    href="{{ route('wishlist') }}"
                >
                    <i class="w-icon-heart"></i>
                    <span class="wishlist-label d-lg-show">Wishlist</span>
                </a>

                <div class="dropdown cart-dropdown cart-offcanvas mr-0 mr-lg-2">
                    <div class="cart-overlay"></div>
                    <a href="#" class="cart-toggle label-down link">
                        <i class="w-icon-cart">
                            <span class="cart-count">2</span>
                        </i>
                        <span class="cart-label">Cart</span>
                    </a>
                    <div class="dropdown-box">
                        <div class="cart-header">
                            <span>Shopping Cart</span>
                            <a href="#" class="btn-close"
                            >Close<i class="w-icon-long-arrow-right"></i
                                ></a>
                        </div>

                        <div class="products">
                            <div class="product product-cart">
                                <div class="product-detail">
                                    <a href="product-default.html" class="product-name"
                                    >Beige knitted elas<br />tic runner shoes</a
                                    >
                                    <div class="price-box">
                                        <span class="product-quantity">1</span>
                                        <span class="product-price">$25.68</span>
                                    </div>
                                </div>
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img
                                            src="{{ asset('assets/images/cart/product-1.jpg') }}"
                                            alt="product"
                                            height="84"
                                            width="94"
                                        />
                                    </a>
                                </figure>
                                <button
                                    class="btn btn-link btn-close"
                                    aria-label="button"
                                >
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>

                            <div class="product product-cart">
                                <div class="product-detail">
                                    <a href="product-default.html" class="product-name"
                                    >Blue utility pina<br />fore denim dress</a
                                    >
                                    <div class="price-box">
                                        <span class="product-quantity">1</span>
                                        <span class="product-price">$32.99</span>
                                    </div>
                                </div>
                                <figure class="product-media">
                                    <a href="product-default.html">
                                        <img
                                            src="{{ asset('assets/images/cart/product-2.jpg') }}"
                                            alt="product"
                                            width="84"
                                            height="94"
                                        />
                                    </a>
                                </figure>
                                <button
                                    class="btn btn-link btn-close"
                                    aria-label="button"
                                >
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                        <div class="cart-total">
                            <label>Subtotal:</label>
                            <span class="price">$58.67</span>
                        </div>

                        <div class="cart-action">
                            <a
                                href="cart.php"
                                class="btn btn-dark btn-outline btn-rounded"
                            >View Cart</a
                            >
                            <a href="checkout.php" class="btn btn-primary btn-rounded"
                            >Checkout</a
                            >
                        </div>
                    </div>
                    <!-- End of Dropdown Box -->
                </div>
            </div>
        </div>
    </div>
    <!-- End of Header Middle -->

    <div
        class="header-bottom sticky-content fix-top sticky-header has-dropdown"
    >
        <div class="container">
            <div class="inner-wrap">
                <div class="header-left">
                    <div
                        id="menu-bar"
                        class=" dropdown category-dropdown "
                        data-visible="true"
                    >
                        <a
                            href="#"
                            class="text-white category-toggle"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="true"
                            data-display="static"
                            title="Browse Categories"
                        >
                            <i class="w-icon-category"></i>
                            <span>Browse Categories</span>
                        </a>

                        <div class="dropdown-box">
                            <ul class="menu vertical-menu category-menu">
                                <li>
                                    <a href="{{ route('shopFullwidthBanner') }}">
                                        <i class="w-icon-tshirt2"></i>Fashion
                                    </a>
                                    <ul class="megamenu">
                                        <li>
                                            <h4 class="menu-title">Women</h4>
                                            <hr class="divider" />
                                            <ul>
                                                <li>
                                                    <a href="{{ route('shopFullwidthBanner') }}"
                                                    >New Arrivals</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="{{ route('shopFullwidthBanner') }}"
                                                    >Best Sellers</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="{{ route('shopFullwidthBanner') }}"
                                                    >Trending</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="{{ route('shopFullwidthBanner') }}"
                                                    >Clothing</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="{{ route('shopFullwidthBanner') }}">Shoes</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('shopFullwidthBanner') }}">Bags</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('shopFullwidthBanner') }}"
                                                    >Accessories</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="{{ route('shopFullwidthBanner') }}"
                                                    >Jewlery & Watches</a
                                                    >
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <h4 class="menu-title">Men</h4>
                                            <hr class="divider" />
                                            <ul>
                                                <li>
                                                    <a href="{{ route('shopFullwidthBanner') }}"
                                                    >New Arrivals</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="{{ route('shopFullwidthBanner') }}"
                                                    >Best Sellers</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="{{ route('shopFullwidthBanner') }}"
                                                    >Trending</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="{{ route('shopFullwidthBanner') }}"
                                                    >Clothing</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="{{ route('shopFullwidthBanner') }}">Shoes</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('shopFullwidthBanner') }}">Bags</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('shopFullwidthBanner') }}"
                                                    >Accessories</a
                                                    >
                                                </li>
                                                <li>
                                                    <a href="{{ route('shopFullwidthBanner') }}"
                                                    >Jewlery & Watches</a
                                                    >
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="banner-fixed menu-banner menu-banner2">
                                                <figure>
                                                    <img
                                                        src="{{ asset('assets/images/menu/banner-2.jpg') }}"
                                                        alt="Menu Banner"
                                                        width="235"
                                                        height="347"
                                                    />
                                                </figure>
                                                <div class="banner-content">
                                                    <div class="banner-price-info mb-1 ls-normal">
                                                        Get up to
                                                        <strong class="text-primary text-uppercase"
                                                        >20%Off</strong
                                                        >
                                                    </div>
                                                    <h3 class="banner-title ls-normal">
                                                        Hot Sales
                                                    </h3>
                                                    <a
                                                        href="shop-banner-sidebar.php"
                                                        class="btn btn-dark btn-sm btn-link btn-slide-right btn-icon-right"
                                                    >
                                                        Shop Now<i
                                                            class="w-icon-long-arrow-right"
                                                        ></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('shopFullwidthBanner') }}">
                                        <i class="w-icon-home"></i>Home & Garden
                                    </a>

                                </li>
                                <li>
                                    <a href="{{ route('shopFullwidthBanner') }}">
                                        <i class="w-icon-electronics"></i>Electronics
                                    </a>

                                </li>
                                <li>
                                    <a href="{{ route('shopFullwidthBanner') }}">
                                        <i class="w-icon-furniture"></i>Furniture
                                    </a>

                                </li>
                                <li>
                                    <a href="{{ route('shopFullwidthBanner') }}">
                                        <i class="w-icon-heartbeat"></i>Healthy & Beauty
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('shopFullwidthBanner') }}">
                                        <i class="w-icon-gift"></i>Gift Ideas
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('shopFullwidthBanner') }}">
                                        <i class="w-icon-gamepad"></i>Toy & Games
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('shopFullwidthBanner') }}">
                                        <i class="w-icon-ice-cream"></i>Cooking
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('shopFullwidthBanner') }}">
                                        <i class="w-icon-ios"></i>Smart Phones
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('shopFullwidthBanner') }}">
                                        <i class="w-icon-camera"></i>Cameras & Photo
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('shopFullwidthBanner') }}">
                                        <i class="w-icon-ruby"></i>Accessories
                                    </a>
                                </li>
                                <li>
                                    <a
                                        href="shop-banner-sidebar.php"
                                        class="font-weight-bold text-uppercase ls-25"
                                    >
                                        View All Categories<i class="w-icon-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <nav class="main-nav">
                        <ul class=" menu active-underline">
                            <li class="active ">
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('shop-banner-sidebar') }}">Shop</a>
                            </li>
                            <li>
                                <a href="{{ route('about-us') }}">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('contact-us') }}">Contact Us</a>
                            </li>
                            <li>
                                <a href="{{ route('faq') }}">FAQ's</a>
                            </li>

                            <li>
                                <a href="{{ route('my-account') }}">My Account</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
