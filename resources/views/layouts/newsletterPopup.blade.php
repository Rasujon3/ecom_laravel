<div class="newsletter-popup mfp-hide">
    <div class="newsletter-content">
        <h4 class="text-uppercase font-weight-normal ls-25">
            Get Up to<span class="text-primary">25% Off</span>
        </h4>
        <h2 class="ls-25">Sign up to {{ session('about_us.institute_name') ?? 'RIT Ecommerce' }}</h2>
        <p class="text-light ls-10">
            Join with {{ session('about_us.institute_name') ?? 'RIT Ecommerce' }} for getting special offers.
        </p>
        <form
            action="#"
            method="get"
            class="input-wrapper input-wrapper-inline input-wrapper-round"
        >
            <input
                type="email"
                class="form-control email font-size-md"
                name="email"
                id="email2"
                placeholder="Your email address"
                required=""
            />
            <button class="btn btn-dark" type="submit">SUBMIT</button>
        </form>
        <div class="form-checkbox d-flex align-items-center">
            <input
                type="checkbox"
                class="custom-checkbox"
                id="hide-newsletter-popup"
                name="hide-newsletter-popup"
                required=""
            />
            <label for="hide-newsletter-popup" class="font-size-sm text-light"
            >Don't show this popup again.</label
            >
        </div>
    </div>
</div>
