@extends('layouts.app')

@section('content')
<main class="main wishlist-page">
        <!-- Start of Page Header -->
        <div class="page-header">
          <div class="container">
            <h1 class="page-title mb-0">Wishlist</h1>
          </div>
        </div>
        <!-- End of Page Header -->

        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav mb-10">
          <div class="container">
            <ul class="breadcrumb">
              <li><a href="{{ route('home') }}">Home</a></li>
              <li>Wishlist</li>
            </ul>
          </div>
        </nav>
        <!-- End of Breadcrumb -->

        <!-- Start of PageContent -->
        <div class="page-content">
          <div class="container">
            <h3 class="wishlist-title">My wishlist</h3>
            <table class="shop-table wishlist-table">
              <thead>
                <tr>
                  <th class="product-name"><span>Product</span></th>
                  <th></th>
                  <th class="product-price"><span>Price</span></th>
{{--                  <th class="product-stock-status">--}}
{{--                    <span>Stock Status</span>--}}
{{--                  </th>--}}
                  <th class="wishlist-action">Actions</th>
                </tr>
              </thead>
                @forelse($wishlist as $item)
                    <tr>
                        <td class="product-thumbnail">
                            <div class="p-relative">
                                <a href="{{ route('product-details', ['product_id' => $item['id']]) }}">
                                    <figure>
                                        <img
                                            src="{{ $item['image'] }}"
                                            alt="{{ $item['title'] }}"
                                            width="300"
                                            height="338"
                                        />
                                    </figure>
                                </a>
                                <button class="btn btn-close remove-wishlist" data-id="{{ $item['id'] }}">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </td>
                        <td class="product-name">
                            <a href="{{ route('product-details', ['product_id' => $item['id']]) }}">
                                {{ $item['title'] }}
                            </a>
                        </td>
                        <td class="product-price">
                            <ins class="new-price">৳ {{ $item['price'] }}</ins>
                        </td>
                        <td class="product-stock-status">
{{--                    <span class="wishlist-in-stock">--}}
{{--                        {{ (isset($item['stock']) && $item['stock'] == 1) ? 'In Stock' : 'Out of Stock' }}--}}
{{--                    </span>--}}
                        </td>
                        <td class="wishlist-action">
                            <div class="d-lg-flex">
                                <a href="#" class="btn btn-quickview btn-outline btn-default btn-rounded btn-sm mb-2 mb-lg-0">
                                    Quick View
                                </a>
                                <a href="#" class="btn btn-dark btn-rounded btn-sm ml-lg-2 btn-cart">
                                    Add to cart
                                </a>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Your wishlist is empty.</td>
                    </tr>
                @endforelse
            </table>
            <div class="social-links">
              <label>Share On:</label>
              <div class="social-icons social-no-color border-thin">
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
                  class="social-icon social-pinterest w-icon-pinterest"
                ></a>
                <a
                  href="#"
                  class="social-icon social-email far fa-envelope"
                ></a>
                <a
                  href="#"
                  class="social-icon social-whatsapp fab fa-whatsapp"
                ></a>
              </div>
            </div>
          </div>
        </div>
        <!-- End of PageContent -->
      </main>
@endsection

<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

<script>
    $(document).on('click', '.remove-wishlist', function (e) {
        e.preventDefault();

        const productId = $(this).data('id');
        const row = $('#wishlist-row-' + productId);

        if (!productId) return alert('Invalid product.');

        $.ajax({
            url: '/wishlist/remove/' + productId,
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}'
            },
            success: function (response) {
                if (response.status === 'success') {
                    alert('Item removed from wishlist.');
                    window.location.reload();
                    row.fadeOut(300, function () {
                        $(this).remove();

                        // Optional: Show a message if table becomes empty
                        if ($('.wishlist-table tbody tr').length === 0) {
                            $('.wishlist-table tbody').html('<tr><td colspan="5" class="text-center">Your wishlist is empty.</td></tr>');
                        }
                    });
                } else {
                    alert(response.message);
                }
            },
            error: function () {
                alert('Failed to remove product from wishlist. Please try again.');
            }
        });
    });
</script>

