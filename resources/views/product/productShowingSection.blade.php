{{--<div class="swiper-wrapper row cols-1 gutter-no">--}}
{{--    <div class="swiper-slide">--}}
{{--        <figure class="product-image">--}}
{{--            <img--}}
{{--                src="{{ asset('assets/images/products/default/1-800x900.jpg') }}"--}}
{{--                data-zoom-image="{{ asset('assets/images/products/default/1-800x900.jpg') }}"--}}
{{--                alt="Electronics Black Wrist Watch"--}}
{{--                width="800"--}}
{{--                height="900"--}}
{{--            />--}}
{{--        </figure>--}}
{{--    </div>--}}
{{--    <div class="swiper-slide">--}}
{{--        <figure class="product-image">--}}
{{--            <img--}}
{{--                src="{{ asset('assets/images/products/default/2-800x900.jpg') }}"--}}
{{--                data-zoom-image="{{ asset('assets/images/products/default/2-800x900.jpg') }}"--}}
{{--                alt="Electronics Black Wrist Watch"--}}
{{--                width="488"--}}
{{--                height="549"--}}
{{--            />--}}
{{--        </figure>--}}
{{--    </div>--}}
{{--    <div class="swiper-slide">--}}
{{--        <figure class="product-image">--}}
{{--            <img--}}
{{--                src="{{ asset('assets/images/products/default/3-800x900.jpg') }}"--}}
{{--                data-zoom-image="{{ asset('assets/images/products/default/3-800x900.jpg') }}"--}}
{{--                alt="Electronics Black Wrist Watch"--}}
{{--                width="800"--}}
{{--                height="900"--}}
{{--            />--}}
{{--        </figure>--}}
{{--    </div>--}}
{{--    <div class="swiper-slide">--}}
{{--        <figure class="product-image">--}}
{{--            <img--}}
{{--                src="{{ asset('assets/images/products/default/4-800x900.jpg') }}"--}}
{{--                data-zoom-image="{{ asset('assets/images/products/default/4-800x900.jpg') }}"--}}
{{--                alt="Electronics Black Wrist Watch"--}}
{{--                width="800"--}}
{{--                height="900"--}}
{{--            />--}}
{{--        </figure>--}}
{{--    </div>--}}
{{--    <div class="swiper-slide">--}}
{{--        <figure class="product-image">--}}
{{--            <img--}}
{{--                src="{{ asset('assets/images/products/default/5-800x900.jpg') }}"--}}
{{--                data-zoom-image="{{ asset('assets/images/products/default/5-800x900.jpg') }}"--}}
{{--                alt="Electronics Black Wrist Watch"--}}
{{--                width="800"--}}
{{--                height="900"--}}
{{--            />--}}
{{--        </figure>--}}
{{--    </div>--}}
{{--    <div class="swiper-slide">--}}
{{--        <figure class="product-image">--}}
{{--            <img--}}
{{--                src="{{ asset('assets/images/products/default/6-800x900.jpg') }}"--}}
{{--                data-zoom-image="{{ asset('assets/images/products/default/6-800x900.jpg') }}"--}}
{{--                alt="Electronics Black Wrist Watch"--}}
{{--                width="800"--}}
{{--                height="900"--}}
{{--            />--}}
{{--        </figure>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="swiper-wrapper row cols-1 gutter-no">
    <div class="swiper-slide">
        <figure class="product-image">
            <img
                src="https://prodhanltd.com/{{ $product['image'] }}"
                data-zoom-image="https://prodhanltd.com/{{ $product['image'] }}"
                alt="{{ $product['title'] }}"
                width="800"
                height="900"
            />
        </figure>
    </div>
</div>

