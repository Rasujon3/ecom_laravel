<div id="menu-bar" class="dropdown category-dropdown" data-visible="true">
    <a href="#" class="text-white category-toggle" role="button"
       data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
       data-display="static" title="Browse Categories">
        <i class="w-icon-category"></i>
        <span>Browse Categories</span>
    </a>

    <div class="dropdown-box">
        <ul class="menu vertical-menu category-menu">
            @foreach($categories as $cat)
                <li>
                    <a href="{{ route('shopFullwidthBanner', ['category' => ($cat['Category'])]) }}">
                        <img src="https://prodhanltd.com/{{ $cat['Image'] }}" alt="{{ $cat['Category'] }}" width="20" class="mr-2" style="object-fit: contain;">
                        {{ $cat['Category'] }}
                    </a>
                </li>
            @endforeach

            <li>
                <a href="{{ route('shopFullwidthBanner') }}" class="font-weight-bold text-uppercase ls-25">
                    View All Categories <i class="w-icon-angle-right"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
