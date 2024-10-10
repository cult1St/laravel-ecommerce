<!DOCTYPE html>
<html lang="en">


<!-- Wealthy Gadgets/index-3.html  22 Nov 2019 09:55:42 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Wealthy Gadgets</title>
    <meta name="keywords" content="Test Ecommerce websites ">
    <meta name="description" content="Wealthy Gadgets ecommerce website ">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset("assets/images/icons/apple-touch-icon.png")}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset("assets/images/icons/favicon-32x32.png")}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset("assets/images/icons/favicon-16x16.png")}}">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="">
    <link rel="shortcut icon" href="{{asset("")}}">
    <meta name="apple-mobile-web-app-title" content="Wealthy Gadgets">
    <meta name="application-name" content="Wealthy Gadgets">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{asset("assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css")}}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset("assets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/plugins/owl-carousel/owl.carousel.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/plugins/magnific-popup/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/plugins/jquery.countdown.css")}}">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/skins/skin-demo-3.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/demos/demo-3.css")}}">
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-intro-clearance header-3">
            @if (!auth()->user())
                <x-loginnav>
                </x-loginnav>
            @endif

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>
                        
                        <a href="index.html" class="logo">
                            <img src="{{asset("assets/images/demos/demo-3/logo.png")}}" alt="Wealthy Gadgets Logo" width="105" height="25">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <div class="header-search header-search-extended header-search-visible d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <label for="q" class="sr-only">Search</label>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->
                    </div>

                    <div class="header-right">
                      
                        <div class="dropdown cart-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <div class="icon">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="cart-count">
                                        @if (!empty(session("cart")))
                                            {{count(session("cart"))}}
                                        @else
                                        0
                                        @endif
                                    </span>
                                </div>
                                <p>Cart</p>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-cart-products">
                             @if (session("message"))
                                 <div class="alert alert-danger">{{session("message")}}</div>
                             @endif      
      
     @if (isset($items))
      @php
      $total = 0;
  @endphp
      @foreach ($items as $item)
     
      <div class="product">
          <div class="product-cart-details">
              <h4 class="product-title">
                  <a href="product.html">{{$item->name}}</a>
              </h4>

              <span class="cart-product-info">
                  <span class="cart-product-qty">{{session("cart")[$item->id]}}</span>
                  x ${{$item->price}}
              </span>
          </div><!-- End .product-cart-details -->

          <figure class="product-image-container">
              <a href="product.html" class="product-image">
                  <img src="{{asset("productimages/$item->image")}}" alt="product">
              </a>
          </figure>
          <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
      </div><!-- End .product -->
      @php
      $total = $total + (session("cart")[$item->id] * $item->price);
  @endphp
      @endforeach
     
                                   
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>Total</span>

                                    <span class="cart-total-price">${{$total}}</span>
                                </div><!-- End .dropdown-cart-total -->
                                @endif
                                <div class="dropdown-cart-action">
                                    <a href="{{route("cart.view")}}" class="btn btn-primary">View Cart</a>
                                    <a href="{{route("cart.checkout")}}" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .cart-dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="header-left">
                        <div class="dropdown category-dropdown">
                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                                Browse Categories <i class="icon-angle-down"></i>
                            </a>

                            <div class="dropdown-menu">
                                <nav class="side-nav">
                                    <ul class="menu-vertical sf-arrows">
                                      @if (isset($category))
                                      @foreach ($category as $cat)
                                      <li class="item-lead"><a href="{{url("/categories/$cat->id")}}">{{$cat->name}}</a></li>
                                      @endforeach
                                      @endif
                                    </ul><!-- End .menu-vertical -->
                                </nav><!-- End .side-nav -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .category-dropdown -->
                    </div><!-- End .header-left -->

                    <div class="header-center">
                        <nav class="main-nav">
                            <ul class="menu sf-arrows">
                                <li class="megamenu-container active">
                                    <a href="/" class="">Home</a>
                                </li>
                                @if (Auth::user())
                                <li class="megamenu-container">
                                    <a href="/dashboard" class="">Dashboard</a>
                                </li>
                                @endif
                                <li>
                                    <a href="/about" class="">About</a>
                                </li>
                                <li>
                                    <a href="/contact" class="">Contact</a>
                                </li>
                                <li>
                                    <a href="/allcategories/" class="">Categories</a>
                                </li>
                                <li>
                                    <a href="#" class="">Pages</a>
                                </li>
                            </ul><!-- End .menu -->
                        </nav><!-- End .main-nav -->
                    </div><!-- End .header-center -->

                    <div class="header-right">
                        <i class="la la-lightbulb-o"></i><p>Clearance<span class="highlight">&nbsp;Up to 30% Off</span></p>
                    </div>
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->

<main class="main">
    <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        <div class="container">
            <h1 class="page-title">Checkout<span>Shop</span></h1>
        </div><!-- End .container -->
    </div><!-- End .page-header -->
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="checkout">
            <div class="container">
               @if (session("message"))
                   <div class="alert alert-danger">{{session("message")}}</div>
               @endif
                <form action="{{route("cart.checkout.payments")}}" method="POST">
                    <div class="row">
                        @csrf
                        <div class="col-lg-9">
                            <h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
                                <div class="form-input">
                                    <textarea name="address" class="form-control no-round" id="address" placeholder="Enter Your Address"></textarea>
                                    @error('address')
                                        <p class="text-danger">{{$message}}</p>
                                    @enderror
                                </div>
                               <div class="col-6">
                                <div class="form-input">
                                    <select name="state" class="form-control" id="state">
                                        <option value="">Select a state</option>
                                        @foreach ($states as $state)
                                            <option value="{{$state->id}}">{{$state->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('state')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                </div>
                               </div>
                               <div class="col-6">
                                <div class="form-input " id="lgaa" style="display: none">
                                    <select name="lga" class="form-control" id="lgas">
                                        <option value="">Select a Local Government</option>
                                    </select>
                                    @error('lga')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                <div id="mess" class="alert alert-danger">Undefined state</div>
                                </div>
                               </div>
                        </div><!-- End .col-lg-9 -->
                        <aside class="col-lg-3">
                            <div class="summary">
                                <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                                <table class="table table-summary">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            $total = 0;
                                        @endphp
                                        @foreach ($items as $item)
                                        <tr>
                                            <td><a href="{{url("/product/$item->id")}}">{{$item->name}}</a></td>
                                            <td>${{$item->price}}</td>
                                            @php
                                                $total = $total + (session("cart")[$item->id] * $item->price);
                                            @endphp
                                        </tr>
                                        @endforeach
                                       

                                        <tr class="summary-total">
                                            <td>Total:</td>
                                            <td>${{isset($total) ? $total : 0}}</td>
                                        </tr><!-- End .summary-total -->
                                    </tbody>
                                </table><!-- End .table table-summary -->

                            

                                <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                    <span class="btn-text">Place Order</span>
                                    <span class="btn-hover-text">Proceed to Checkout</span>
                                </button>
                            </div><!-- End .summary -->
                        </aside><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </form>
            </div><!-- End .container -->
        </div><!-- End .checkout -->
    </div><!-- End .page-content -->
</main><!-- End .main -->

<footer class="footer">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="widget widget-about">
                        <img src="{{asset("assets/images/demos/demo-3/logo-footer.png")}}" class="footer-logo" alt="Footer Logo" width="105" height="25">
                        <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. </p>

                        <div class="widget-call">
                            <i class="icon-phone"></i>
                            Got Question? Call us 12/5
                            <a href="tel:+2349078177518">+2349078177518</a>         
                        </div><!-- End .widget-call -->
                    </div><!-- End .widget about-widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">Useful Links</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="about.html">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">Customer Service</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Money-back guarantee!</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Terms and conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">My Account</h4><!-- End .widget-title -->

                        <ul class="widget-list">
                            <li><a href="#">Sign In</a></li>
                            <li><a href="cart.html">View Cart</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">Track My Order</a></li>
                            <li><a href="#">Help</a></li>
                        </ul><!-- End .widget-list -->
                    </div><!-- End .widget -->
                </div><!-- End .col-sm-6 col-lg-3 -->
            </div><!-- End .row -->
        </div><!-- End .container -->
    </div><!-- End .footer-middle -->

    <div class="footer-bottom">
        <div class="container">
            <p class="footer-copyright">Copyright © {{date("Y")}} Wealthy Gadgets. All Rights Reserved.</p><!-- End .footer-copyright -->
            <figure class="footer-payments">
                <img src="assets/images/payments.png" alt="Payment methods" width="272" height="20">
            </figure><!-- End .footer-payments -->
        </div><!-- End .container -->
    </div><!-- End .footer-bottom -->
</footer><!-- End .footer -->
</div><!-- End .page-wrapper -->
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

<div class="mobile-menu-container">
<div class="mobile-menu-wrapper">
    <span class="mobile-menu-close"><i class="icon-close"></i></span>
    
    <form action="#" method="get" class="mobile-search">
        <label for="mobile-search" class="sr-only">Search</label>
        <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
        <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
    </form>

    <ul class="nav nav-pills-mobile nav-border-anim" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
        </li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li class="active">
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="category.html">Shop</a>
                      
                    </li>
                    <li>
                        <a href="product.html" class="sf-with-ul">Product</a>
              
                    </li>
                    <li>
                        <a href="#">Pages</a>
                     
                    </li>
                    <li>
                        <a href="blog.html">Blog</a>

                      
                    </li>
                    <li>
                        <a href="elements-list.html">Elements</a>
                  
                    </li>
                </ul>
            </nav><!-- End .mobile-nav -->
        </div><!-- .End .tab-pane -->
        <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
            <nav class="mobile-cats-nav">
                <ul class="mobile-cats-menu">
                    <li><a class="mobile-cats-lead" href="#">Daily offers</a></li>
                </ul><!-- End .mobile-cats-menu -->
            </nav><!-- End .mobile-cats-nav -->
        </div><!-- .End .tab-pane -->
    </div><!-- End .tab-content -->

    <div class="social-icons">
        <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
        <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
        <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
        <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
    </div><!-- End .social-icons -->
</div><!-- End .mobile-menu-wrapper -->
</div><!-- End .mobile-menu-container -->




<!-- Plugins JS File -->
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("assets/js/jquery.hoverIntent.min.js")}}"></script>
<script src="{{asset("assets/js/jquery.waypoints.min.js")}}"></script>
<script src="{{asset("assets/js/superfish.min.js")}}"></script>
<script src="{{asset("assets/js/owl.carousel.min.js")}}"></script>
<script src="{{asset("assets/js/bootstrap-input-spinner.js")}}"></script>
<script src="{{asset("assets/js/jquery.plugin.min.js")}}"></script>
<script src="{{asset("assets/js/jquery.magnific-popup.min.js")}}"></script>
<script src="{{asset("assets/js/jquery.countdown.min.js")}}"></script>
<!-- Main JS File -->
<script src="{{asset("assets/js/main.js")}}"></script>
<script src="{{asset("assets/js/demos/demo-3.js")}}"></script>
<script>
    $(function(){
        $("#state").change(function(){
            let val = $("#state").val();
            if(val == ""){
                $("#lgas").empty()
                $("#lgas").hide()
                     $("#mess").show();
               
                 }else{
            $.ajax({
                url: '{{route("server.lga")}}',
                method: "get",
                data: val,
                dataType: "json",
                success: function(res){
                    $("#lgas").show()
                    $("#lgaa").show();
                    $("#lgas").empty()
                    $("#mess").hide();
                        res.forEach((v, i) => {
                        
                        $("#lgas").append(`<option value="${v.id}">${v.name}</option>`);
                       
                    });
                   
                 
                }
            })
        }
        })
    
    })
</script>


</body>


<!-- Wealthy Gadgets/index-3.html  22 Nov 2019 09:55:58 GMT -->
</html>