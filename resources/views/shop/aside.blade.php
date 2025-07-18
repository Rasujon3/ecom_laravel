<aside
    class="sidebar shop-sidebar sticky-sidebar-wrapper sidebar-fixed"
>
    <!-- Start of Sidebar Overlay -->
    <div class="sidebar-overlay"></div>
    <a class="sidebar-close" href="#"><i class="close-icon"></i></a>

    <!-- Start of Sidebar Content -->
    <div class="sidebar-content scrollable">
        <!-- Start of Sticky Sidebar -->
        <div class="sticky-sidebar">
            <div class="filter-actions">
                <label>Filter :</label>
                <a href="#" class="btn btn-dark btn-link filter-clean"
                >Clean All</a
                >
            </div>
            <!-- Start of Collapsible widget -->
            <div class="widget widget-collapsible">
                <h3 class="widget-title">
                    <label>All Categories</label>
                </h3>
                <ul class="widget-body filter-items search-ul">
                    @foreach($categories as $cat)
                        <li>
                            <a
                                href="{{ route('shopFullwidthBanner', ['category' => ($cat['Category'])]) }}"
                                class="{{ $selectedCategory == $cat['Category'] ? 'text-primary font-weight-bold' : '' }}">
                            >
                                {{ $cat['Category'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <!-- End of Collapsible Widget -->

            <!-- Start of Collapsible Widget -->
            <div class="widget widget-collapsible">
                <h3 class="widget-title"><label>Price</label></h3>
                <div class="widget-body">
                    <ul class="filter-items search-ul">
                        <li><a href="#">$0.00 - $100.00</a></li>
                        <li><a href="#">$100.00 - $200.00</a></li>
                        <li><a href="#">$200.00 - $300.00</a></li>
                        <li><a href="#">$300.00 - $500.00</a></li>
                        <li><a href="#">$500.00+</a></li>
                    </ul>
                    <form class="price-range">
                        <input
                            type="number"
                            name="min_price"
                            class="min_price text-center"
                            placeholder="$min"
                        /><span class="delimiter">-</span
                        ><input
                            type="number"
                            name="max_price"
                            class="max_price text-center"
                            placeholder="$max"
                        /><a href="#" class="btn btn-primary btn-rounded"
                        >Go</a
                        >
                    </form>
                </div>
            </div>
            <!-- End of Collapsible Widget -->

            <!-- Start of Collapsible Widget -->
            <div class="widget widget-collapsible">
                <h3 class="widget-title"><label>Size</label></h3>
                <ul class="widget-body filter-items item-check mt-1">
                    <li><a href="#">Extra Large</a></li>
                    <li><a href="#">Large</a></li>
                    <li><a href="#">Medium</a></li>
                    <li><a href="#">Small</a></li>
                </ul>
            </div>
            <!-- End of Collapsible Widget -->

            <!-- Start of Collapsible Widget -->
            <div class="widget widget-collapsible">
                <h3 class="widget-title"><label>Brand</label></h3>
                <ul class="widget-body filter-items item-check mt-1">
                    <li><a href="#">Elegant Auto Group</a></li>
                    <li><a href="#">Green Grass</a></li>
                    <li><a href="#">Node Js</a></li>
                    <li><a href="#">NS8</a></li>
                    <li><a href="#">Red</a></li>
                    <li><a href="#">Skysuite Tech</a></li>
                    <li><a href="#">Sterling</a></li>
                </ul>
            </div>
            <!-- End of Collapsible Widget -->

            <!-- Start of Collapsible Widget -->
            <div class="widget widget-collapsible">
                <h3 class="widget-title"><label>Color</label></h3>
                <ul class="widget-body filter-items item-check mt-1">
                    <li><a href="#">Black</a></li>
                    <li><a href="#">Blue</a></li>
                    <li><a href="#">Brown</a></li>
                    <li><a href="#">Green</a></li>
                    <li><a href="#">Grey</a></li>
                    <li><a href="#">Orange</a></li>
                    <li><a href="#">Yellow</a></li>
                </ul>
            </div>
            <!-- End of Collapsible Widget -->
        </div>
        <!-- End of Sidebar Content -->
    </div>
    <!-- End of Sidebar Content -->
</aside>
