@extends('layouts.app')

@section('content')
<main class="main">
        <!-- Start of Page Header -->
        <div class="page-header">
          <div class="container">
            <h1 class="page-title mb-0">About Us</h1>
          </div>
        </div>
        <!-- End of Page Header -->

        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav mb-10 pb-8">
          <div class="container">
            <ul class="breadcrumb">
              <li><a href="{{ route('home') }}">Home</a></li>
              <li>About Us</li>
            </ul>
          </div>
        </nav>
        <!-- End of Breadcrumb -->

        <!-- Start of Page Content -->
        <div class="page-content">
          <div class="container">
            <section class="introduce mb-10 pb-10">
              <h2 class="title title-center">
                We’re Devoted Marketing<br />Consultants Helping Your Business
                Grow
              </h2>
              <p class="mx-auto text-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor labore et dolore magna aliqua. Venenatis tellu
                metus
              </p>
              <figure class="br-lg">
                <img
{{--                  src="assets/images/pages/about_us/1.jpg"--}}
                  src="{{ asset('assets/images/pages/about_us/1.jpg') }}"
                  alt="Banner"
                  width="1240"
                  height="540"
                  style="background-color: #d0c1ae"
                />
              </figure>
            </section>

            <section class="customer-service mb-7">
              <div class="row align-items-center">
                <div class="col-md-6 pr-lg-8 mb-8">
                  <h2 class="title text-left">
                    We Provide Continuous &amp; Kind Service for Customers
                  </h2>
                  <div class="accordion accordion-simple accordion-plus">
                    <div class="card border-no">
                      <div class="card-header">
                        <a href="#collapse3-1" class="collapse"
                          >Customer Service</a
                        >
                      </div>
                      <div class="card-body expanded" id="collapse3-1">
                        <p class="mb-0">
                          Lorem ipsum dolor sit eiusamet, consectetur adipiscing
                          elit, sed do eius mod tempor incididunt ut labore et
                          dolore magna aliqua. Venenatis tell us in metus
                          vulputate eu scelerisque felis. Vel pretium vulp.
                        </p>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <a href="#collapse3-2" class="expand"
                          >Online Consultation</a
                        >
                      </div>
                      <div class="card-body collapsed" id="collapse3-2">
                        <p class="mb-0">
                          Lorem ipsum dolor sit eiusamet, consectetur adipiscing
                          elit, sed do eius mod tempor incididunt ut labore et
                          dolore magna aliqua. Venenatis tell us in metus
                          vulputate eu scelerisque felis. Vel pretium vulp.
                        </p>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header">
                        <a href="#collapse3-3" class="expand"
                          >Sales Management</a
                        >
                      </div>
                      <div class="card-body collapsed" id="collapse3-3">
                        <p class="mb-0">
                          Lorem ipsum dolor sit eiusamet, consectetur adipiscing
                          elit, sed do eius mod tempor incididunt ut labore et
                          dolore magna aliqua. Venenatis tell us in metus
                          vulputate eu scelerisque felis. Vel pretium vulp.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-8">
                  <figure class="br-lg">
                    <img
{{--                      src="assets/images/pages/about_us/2.jpg"--}}
                      src="{{ asset('assets/images/pages/about_us/2.jpg') }}"
                      alt="Banner"
                      width="610"
                      height="500"
                      style="background-color: #cececc"
                    />
                  </figure>
                </div>
              </div>
            </section>

            <section class="count-section mb-10 pb-5">
              <div
                class="swiper-container swiper-theme"
                data-swiper-options="{
                            'slidesPerView': 1,
                            'breakpoints': {
                                '768': {
                                    'slidesPerView': 2
                                },
                                '992': {
                                    'slidesPerView': 3
                                }
                            }
                        }"
              >
                <div class="swiper-wrapper row cols-lg-3 cols-md-2 cols-1">
                  <div class="swiper-slide counter-wrap">
                    <div class="counter text-center">
                      <span class="count-to" data-to="15">0</span>
                      <span>M+</span>
                      <h4 class="title title-center">Products For Sale</h4>
                      <p>
                        Diam maecenas ultricies mi eget mauris<br />
                        Nibh tellus molestie nunc non
                      </p>
                    </div>
                  </div>
                  <div class="swiper-slide counter-wrap">
                    <div class="counter text-center">
                      <span>$</span>
                      <span class="count-to" data-to="25">0</span>
                      <span>B+</span>
                      <h4 class="title title-center">Community Earnings</h4>
                      <p>
                        Diam maecenas ultricies mi eget mauris<br />
                        Nibh tellus molestie nunc non
                      </p>
                    </div>
                  </div>
                  <div class="swiper-slide counter-wrap">
                    <div class="counter text-center">
                      <span class="count-to" data-to="100">0</span>
                      <span>M+</span>
                      <h4 class="title title-center">Growing Buyers</h4>
                      <p>
                        Diam maecenas ultricies mi eget mauris<br />
                        Nibh tellus molestie nunc non
                      </p>
                    </div>
                  </div>
                </div>
                <div class="swiper-pagination"></div>
              </div>
            </section>
          </div>

          <section class="boost-section pt-10 pb-10">
            <div class="container mt-10 mb-9">
              <div class="row align-items-center mb-10">
                <div class="col-md-6 mb-8">
                  <figure class="br-lg">
                    <img
{{--                      src="assets/images/pages/about_us/3.jpg"--}}
                      src="{{ asset('assets/images/pages/about_us/3.jpg') }}"
                      alt="Banner"
                      width="610"
                      height="450"
                      style="background-color: #9e9da2"
                    />
                  </figure>
                </div>
                <div class="col-md-6 pl-lg-8 mb-8">
                  <h4 class="title text-left">
                    We Boost Our Clients’ Bottom Line by Optimizing Their Growth
                    Potential
                  </h4>
                  <p class="mb-6">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna
                    aliqua. Venenatis tellus in. metus vulputate eu scelerisque
                    felis. Vel pretium lectus qua . Arpis massa. Nunc id cursus
                    metus ididunt ut labore metus vulputate episcing.
                  </p>
                  <a href="#" class="btn btn-dark btn-rounded"
                    >Visit Our Store</a
                  >
                </div>
              </div>
            </div>
          </section>
        </div>
      </main>
@endsection
