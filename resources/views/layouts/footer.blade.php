<footer class="footer footer-dark appear-animate">
    <div class="container">
        <div class="footer-top">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="widget widget-about">
                        <a href="#" class="logo-footer">
                            <img
                                src="{{ session('about_us.institute_logo') ?  config('api.url') .session('about_us.institute_logo') : asset('assets/images/demos/demo3/footer-logo.png') }}"
                                alt="logo-footer"
                                width="145"
                                height="45"
                            />
                        </a>
                        <div class="widget-body">
                            <p class="widget-about-title">Got Question? Call us 24/7</p>
                            <a href="tel:18005707777" class="widget-about-call"
                            >{{ session('about_us.institute_phone') ?? '+1 800 57 07777' }}</a
                            >
                            <p class="widget-about-desc">
                                Register now to get updates on pronot get up icons &
                                coupons ster now toon.
                            </p>

                            <div class="social-icons social-icons-colored">
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
                                    class="social-icon social-instagram w-icon-instagram"
                                ></a>
                                <a
                                    href="#"
                                    class="social-icon social-youtube w-icon-youtube"
                                ></a>
                                <a
                                    href="#"
                                    class="social-icon social-pinterest w-icon-pinterest"
                                ></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h3 class="widget-title">Company</h3>
                        <ul class="widget-body">
                            <li><a href="{{ route('about-us') }}">About Us</a></li>
                            <li><a href="#">Team Member</a></li>
                            <li><a href="#">Career</a></li>
                            <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                            <li><a href="#">Affilate</a></li>
                            <li><a href="#">Order History</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">My Account</h4>
                        <ul class="widget-body">
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="{{ route('cart') }}">View Cart</a></li>

                            <li><a href="#">Help</a></li>
                            <li><a href="{{ route('wishlist') }}">My Wishlist</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="widget">
                        <h4 class="widget-title">Customer Service</h4>
                        <ul class="widget-body">
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Money-back guarantee!</a></li>
                            <li><a href="#">Product Returns</a></li>
                            <li><a href="#">Support Center</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Term and Conditions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer-left">
                <p class="copyright">
                    Copyright © 2025 {{ session('about_us.institute_name') ?? 'RIT Ecommerce' }}. All Rights Reserved.
                </p>
            </div>
            <div class="footer-right">
              <span class="payment-label mr-lg-8"
              >We're using safe payment for</span
              >
                <figure class="payment">
                    <img
                        src="{{ asset('assets/images/payment.png') }}"
                        alt="payment"
                        width="159"
                        height="25"
                    />
                </figure>
            </div>
        </div>
    </div>
</footer>
