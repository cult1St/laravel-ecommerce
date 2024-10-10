<x-body :$items :$category>
    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Shopping Cart<span>Shop</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="cart">
                <div class="container">
                    <div class="row">
                        @if (session("cart"))
                            <div class="alert alert-danger">{{session("message")}}</div>
                        @endif
                        <div class="col-lg-9">
                            <table class="table table-cart table-mobile">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                @if (!empty(session("cart")))
                                <tbody>
                                    @php
                                        $total = 0;
                                    @endphp
                                  @foreach ($items as $item)
                                  <tr>
                                    <td class="product-col">
                                        <div class="product">
                                            <figure class="product-media">
                                                <a href="{{url("/product/$item->id")}}">
                                                    <img src="{{asset("productimages/$item->image")}}" alt="Product image">
                                                </a>
                                            </figure>

                                            <h3 class="product-title">
                                                <a href="{{url("/product/$item->id")}}">{{$item->name}}</a>
                                            </h3><!-- End .product-title -->
                                        </div><!-- End .product -->
                                    </td>
                                    <td class="price-col">${{$item->price}}</td>
                                    <td class="quantity-col">
                                        <div class="cart-product-quantity">
                                            <input disabled type="number" class="form-control" value="{{session("cart")[$item->id]}}" min="1" max="10" step="1" data-decimals="0" required>
                                        </div><!-- End .cart-product-quantity -->
                                    </td>
                                    <td class="total-col">${{$item->price * session("cart")[$item->id]}}</td>
                                    <td class="remove-col"><a href="{{url("/cart/remove/$item->id")}}" class="btn-remove"><i class="icon-close"></i></a></td>
                                </tr>
                                @php
                                $total = $total + ($item->price * session("cart")[$item->id]);
                            @endphp
                                  @endforeach
                                 
                                </tbody>
                                @else
                                <div class="alert alert-info"> Cart Empty</div>
                                @endif
                                
                            </table><!-- End .table table-wishlist -->

                            <div class="cart-bottom">
                               

                               
                                <form class="m-2" action="{{route("cart.empty")}}" method="post">
                                    
                                    @csrf<button type="submit" class="btn btn-dark"><span>Empty CART</span><i class="fa fa-bin"></i></button></form>
                               
                            </div><!-- End .cart-bottom -->
                        </div><!-- End .col-lg-9 -->
                        <aside class="col-lg-3">
                            <div class="summary summary-cart">
                                <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                                <table class="table table-summary">
                                    <tbody>
                                      
                                        <tr class="summary-total">
                                            <td>Total:</td>
                                            <td>${{isset($total) ? $total : 0}}</td>
                                        </tr><!-- End .summary-total -->
                                    </tbody>
                                </table><!-- End .table table-summary -->

                                <a href="{{route("cart.checkout")}}" class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>
                            </div><!-- End .summary -->

                            <a href="/allcategories/" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE SHOPPING</span><i class="icon-refresh"></i></a>
                        </aside><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .cart -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
</x-body>