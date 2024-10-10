<x-body :$items :$category>

    <main class="main">
        <div class="intro-section pt-3 pb-3 mb-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="intro-slider-container slider-container-ratio mb-2 mb-lg-0">
                            <div class="intro-slider owl-carousel owl-simple owl-dark owl-nav-inside" data-toggle="owl" data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "responsive": {
                                        "768": {
                                            "nav": true,
                                            "dots": false
                                        }
                                    }
                                }'>
                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="assets/images/demos/demo-3/slider/slide-1-480w.jpg">
                                            <img src="assets/images/demos/demo-3/slider/slide-1.jpg" alt="Image Desc">
                                        </picture>
                                    </figure><!-- End .slide-image -->

                                    <div class="intro-content">
                                        <h3 class="intro-subtitle text-primary">Daily Deals</h3><!-- End .h3 intro-subtitle -->
                                        <h1 class="intro-title">
                                            AirPods <br>Earphones
                                        </h1><!-- End .intro-title -->

                                        <div class="intro-price">
                                            <sup>Today:</sup>
                                            <span class="text-primary">
                                                $247<sup>.99</sup>
                                            </span>
                                        </div><!-- End .intro-price -->

                                        <a href="category.html" class="btn btn-primary btn-round">
                                            <span>Click Here</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </a>
                                    </div><!-- End .intro-content -->
                                </div><!-- End .intro-slide -->

                                <div class="intro-slide">
                                    <figure class="slide-image">
                                        <picture>
                                            <source media="(max-width: 480px)" srcset="assets/images/demos/demo-3/slider/slide-2-480w.jpg">
                                            <img src="assets/images/demos/demo-3/slider/slide-2.jpg" alt="Image Desc">
                                        </picture>
                                    </figure><!-- End .slide-image -->

                                    <div class="intro-content">
                                        <h3 class="intro-subtitle text-primary">Deals and Promotions</h3><!-- End .h3 intro-subtitle -->
                                        <h1 class="intro-title">
                                            Echo Dot <br>3rd Gen
                                        </h1><!-- End .intro-title -->

                                        <div class="intro-price">
                                            <sup class="intro-old-price">$49,99</sup>
                                            <span class="text-primary">
                                                $29<sup>.99</sup>
                                            </span>
                                        </div><!-- End .intro-price -->

                                        <a href="category.html" class="btn btn-primary btn-round">
                                            <span>Click Here</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </a>
                                    </div><!-- End .intro-content -->
                                </div><!-- End .intro-slide -->
                            </div><!-- End .intro-slider owl-carousel owl-simple -->
                            
                            <span class="slider-loader"></span><!-- End .slider-loader -->
                        </div><!-- End .intro-slider-container -->
                    </div><!-- End .col-lg-8 -->

                    <div class="col-lg-4">
                        <div class="intro-banners">
                            <div class="banner mb-lg-1 mb-xl-2">
                                <a href="#">
                                    <img src="assets/images/demos/demo-3/banners/banner-1.jpg" alt="Banner">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle d-lg-none d-xl-block"><a href="#">Top Product</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title"><a href="#">Edifier <br>Stereo Bluetooth</a></h3><!-- End .banner-title -->
                                    <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->

                            <div class="banner mb-lg-1 mb-xl-2">
                                <a href="#">
                                    <img src="assets/images/demos/demo-3/banners/banner-2.jpg" alt="Banner">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle d-lg-none d-xl-block"><a href="#">Clearance</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title"><a href="#">GoPro - Fusion 360 <span>Save $70</span></a></h3><!-- End .banner-title -->
                                    <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->

                            <div class="banner mb-0">
                                <a href="#">
                                    <img src="assets/images/demos/demo-3/banners/banner-3.jpg" alt="Banner">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle d-lg-none d-xl-block"><a href="#">Featured</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title"><a href="#">Apple Watch 4 <span>Our Hottest Deals</span></a></h3><!-- End .banner-title -->
                                    <a href="#" class="banner-link">Shop Now<i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .intro-banners -->
                    </div><!-- End .col-lg-4 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .intro-section -->

        <div class="container featured">
            <ul class="nav nav-pills nav-border-anim nav-big justify-content-center mb-3" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="products-featured-link" data-toggle="tab" href="#products-featured-tab" role="tab" aria-controls="products-featured-tab" aria-selected="true">Featured</a>
                </li>
            </ul>

            <div class="tab-content tab-content-carousel">
                <div class="tab-pane p-0 fade show active" id="products-featured-tab" role="tabpanel" aria-labelledby="products-featured-link">
                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "nav": true, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "600": {
                                    "items":2
                                },
                                "992": {
                                    "items":3
                                },
                                "1200": {
                                    "items":4
                                }
                            }
                        }'>
                    @if (isset($products))
                    @foreach ($products as $p)
                    <div class="product product-2">
                      <figure class="product-media">
                          <a href="{{url("/product/$p->id")}}">
                              <img src="{{asset("productimages/$p->image")}}" alt="Product image" class="product-image">
                          </a>

                       

                          <div class="product-action product-action-dark">
                              <form action="{{route("add.cart.click")}}" method="post">
                                  @csrf
                                  <input type="hidden" name="prodId" value="{{$p->id}}">
                                  <input type="hidden" name="val" value="1">
                                  <button type="submit" class="btn btn-product btn-cart text-warning" title="Add to cart"><span>add to cart</span></button>
                               </form>
                              <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                          </div><!-- End .product-action -->
                      </figure><!-- End .product-media -->

                      <div class="product-body">
                          <div class="product-cat">
                              <a href="#">{{$p->category->name}}</a>
                          </div><!-- End .product-cat -->
                          <h3 class="product-title"><a href="{{url("/product/$p->id")}}">{{$p->name}}</a></h3><!-- End .product-title -->
                          <div class="product-price">
                              N {{$p->price}}
                          </div><!-- End .product-price -->
                          <div class="ratings-container">
                              <div class="ratings">
                                  <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                              </div><!-- End .ratings -->
                              <span class="ratings-text">( {{count($p->reviews)}} Reviews )</span>
                          </div><!-- End .rating-container -->
                      </div><!-- End .product-body -->
                  </div><!-- End .product -->
                    @endforeach
                    @endif
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
               
            </div><!-- End .tab-content -->
        </div><!-- End .container -->

        <div class="mb-7 mb-lg-11"></div><!-- End .mb-7 -->

        <div class="container">
            <div class="cta cta-border cta-border-image mb-5 mb-lg-7" style="background-image: url(assets/images/demos/demo-3/bg-1.jpg);">
                <div class="cta-border-wrapper bg-white">
                    <div class="row justify-content-center">
                        <div class="col-md-11 col-xl-11">
                            <div class="cta-content">
                                <div class="cta-heading">
                                    <h3 class="cta-title text-right"><span class="text-primary">New Deals</span> <br>Start Daily at 12pm e.t.</h3><!-- End .cta-title -->
                                </div><!-- End .cta-heading -->
                                
                                <div class="cta-text">
                                    <p>Get <span class="text-dark font-weight-normal">FREE SHIPPING* & 5% rewards</span> on <br>every order with Wealthy Gadgets Theme rewards program</p>
                                </div><!-- End .cta-text -->
                                <a href="#" class="btn btn-primary btn-round"><span>Add to Cart for $50.00/yr</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .cta-content -->
                        </div><!-- End .col-xl-7 -->
                    </div><!-- End .row -->
                </div><!-- End .bg-white -->
            </div><!-- End .cta -->
        </div><!-- End .container -->

        <div class="bg-light deal-container pt-7 pb-7 mb-5">
            <div class="container">
                <div class="heading text-center mb-4">
                    <h2 class="title">Deals & Outlet</h2><!-- End .title -->
                    <p class="title-desc">Today’s deal and more</p><!-- End .title-desc -->
                </div><!-- End .heading -->

                <div class="row">
                    <div class="col-lg-6 deal-col">
                        <div class="deal" style="background-image: url('assets/images/demos/demo-3/deal/bg-1.jpg');">
                            <div class="deal-top">
                                <h2>Deal of the Day.</h2>
                                <h4>Limited quantities. </h4>
                            </div><!-- End .deal-top -->

                            <div class="deal-content">
                                <h3 class="product-title"><a href="{{url("/allcategories")}}">Home Smart Speaker with  Google Assistant</a></h3><!-- End .product-title -->

                                <div class="product-price">
                                    <span class="new-price">$129.00</span>
                                    <span class="old-price">Was $150.99</span>
                                </div><!-- End .product-price -->

                                <a href="{{url("/allcategories")}}" class="btn btn-link"><span>Shop Now</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .deal-content -->

                            <div class="deal-bottom">
                                <div class="deal-countdown" data-until="+10h"></div><!-- End .deal-countdown -->
                            </div><!-- End .deal-bottom -->
                        </div><!-- End .deal -->
                    </div><!-- End .col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="products">
                            <div class="row">
                                <div class="col-6">
                                    <div class="product product-2">
                                        <figure class="product-media">
                                            <span class="product-label label-circle label-top">Top</span>
                                            <span class="product-label label-circle label-sale">Sale</span>
                                            <a href="{{url("/allcategories")}}">
                                                <img src="assets/images/demos/demo-3/products/product-5.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action -->

                                            <div class="product-action product-action-dark">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Digital Cameras</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="{{url("/allcategories")}}">Canon - EOS 5D Mark IV DSLR  Camera</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">$3,599.99</span>
                                                <span class="old-price">Was $3,999.99</span>
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 5 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 -->
                                
                                <div class="col-6">
                                    <div class="product product-2">
                                        <figure class="product-media">
                                            <span class="product-label label-circle label-sale">Sale</span>
                                            <a href="{{url("/allcategories")}}">
                                                <img src="assets/images/demos/demo-3/products/product-6.jpg" alt="Product image" class="product-image">
                                            </a>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            </div><!-- End .product-action -->

                                            <div class="product-action product-action-dark">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                            </div><!-- End .product-action -->
                                        </figure><!-- End .product-media -->

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#">Computers & Tablets</a>
                                            </div><!-- End .product-cat -->
                                            <h3 class="product-title"><a href="{{url("/allcategories")}}">Apple - Smart Keyboard Folio  for 11-inch iPad Pro</a></h3><!-- End .product-title -->
                                            <div class="product-price">
                                                <span class="new-price">$179.00</span>
                                                <span class="old-price">Was $200.99</span>
                                            </div><!-- End .product-price -->
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                            </div><!-- End .rating-container -->
                                        </div><!-- End .product-body -->
                                    </div><!-- End .product -->
                                </div><!-- End .col-sm-6 -->
                            </div><!-- End .row -->
                        </div><!-- End .products -->
                    </div><!-- End .col-lg-6 -->
                </div><!-- End .row -->

                <div class="more-container text-center mt-3 mb-0">
                    <a href="#" class="btn btn-outline-dark-2 btn-round btn-more"><span>Shop more Outlet deals</span><i class="icon-long-arrow-right"></i></a>
                </div><!-- End .more-container -->
            </div><!-- End .container -->
        </div><!-- End .deal-container -->
        
        <div class="container">
            <div class="owl-carousel mt-5 mb-5 owl-simple" data-toggle="owl" 
                    data-owl-options='{
                        "nav": false, 
                        "dots": false,
                        "margin": 30,
                        "loop": false,
                        "responsive": {
                            "0": {
                                "items":2
                            },
                            "420": {
                                "items":3
                            },
                            "600": {
                                "items":4
                            },
                            "900": {
                                "items":5
                            },
                            "1024": {
                                "items":6
                            }
                        }
                    }'>
                    <a href="#" class="brand">
                        <img src="assets/images/brands/1.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/2.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/3.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/4.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/5.png" alt="Brand Name">
                    </a>

                    <a href="#" class="brand">
                        <img src="assets/images/brands/6.png" alt="Brand Name">
                    </a>
                </div><!-- End .owl-carousel -->
        </div><!-- End .container -->

        <div class="container">
            <hr class="mt-3 mb-6">
        </div><!-- End .container -->

        <div class="container trending">
            <div class="heading heading-flex mb-3">
                <div class="heading-left">
                    <h2 class="title">Categories</h2><!-- End .title -->
                </div><!-- End .heading-left -->

               <div class="heading-right">
                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="trending-all-link" data-toggle="tab" href="#trending-all-tab" role="tab" aria-controls="trending-all-tab" aria-selected="true">All</a>
                        </li>
                       
                    </ul>
               </div><!-- End .heading-right -->
            </div><!-- End .heading -->

            <div class="row">
                <div class="col-xl-5col d-none d-xl-block">
                    <div class="banner">
                        <a href="#">
                            <img src="assets/images/demos/demo-3/banners/banner-4.jpg" alt="banner">
                        </a>
                    </div><!-- End .banner -->
                </div><!-- End .col-xl-5col -->

                <div class="col-xl-4-5col">
                    <div class="tab-content tab-content-carousel just-action-icons-sm">
                        <div class="tab-pane p-0 fade show active" id="trending-all-tab" role="tabpanel" aria-labelledby="trending-all-link">
                            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                data-owl-options='{
                                    "nav": true, 
                                    "dots": false,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        }
                                    }
                                }'>
                              @foreach ($category as $p)
                              <div class="product product-2">
                                <figure class="product-media">
                                    
                                    <a href="/categories/{{$p->id}}">
                                        <img src="{{asset("ecommerce_images/$p->image")}}" alt="Product image" class="product-image">
                                    </a>

                                    
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                  
                                    <h3 class="product-title"><a href="/categories/{{$p->id}}">{{$p->name}}</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        
                                    </div><!-- End .product-price -->
                                    <div class="ratings-container">
                                       
                                        <span class="ratings-text">( {{count($p->products)}} Products )</span>
                                    </div><!-- End .rating-container -->
                                    <div class="text-dark">
                                        <p>{{$p->desc}}</p>
                                    </div>
                                 
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                              @endforeach
                            </div><!-- End .owl-carousel -->
                        </div><!-- .End .tab-pane -->
                    </div><!-- End .tab-content -->
                </div><!-- End .col-xl-4-5col -->
               
            </div><!-- End .row -->
        </div><!-- End .container -->

        <div class="container">
            <hr class="mt-5 mb-6">
        </div><!-- End .container -->

        <div class="container top">
            <div class="heading heading-flex mb-3">
                <div class="heading-left">
                    <h2 class="title">Top Selling Products By Categories</h2><!-- End .title -->
                </div><!-- End .heading-left -->

               <div class="heading-right">
                    <ul class="nav nav-pills nav-border-anim justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="top-all-link" data-toggle="tab" href="#top-all-tab" role="tab" aria-controls="top-all-tab" aria-selected="true">All</a>
                        </li>
                        @foreach ($category as $cat)
                        <li class="nav-item">
                            <a class="nav-link" id="top-{{$cat->name}}-link" data-toggle="tab" href="#top-{{$cat->name}}-tab" role="tab" aria-controls="top-{{$cat->name}}-tab" aria-selected="false">{{$cat->name}}</a>
                        </li>
                        @endforeach
                    </ul>
               </div><!-- End .heading-right -->
            </div><!-- End .heading -->

            <div class="tab-content tab-content-carousel just-action-icons-sm">
                <div class="tab-pane p-0 fade show active" id="top-all-tab" role="tabpanel" aria-labelledby="top-all-link">
                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "nav": true, 
                            "dots": false,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":5
                                }
                            }
                        }'>
                        @foreach ($products as $p)
                        <div class="product product-2">
                          <figure class="product-media">
                              <a href="{{url("/product/$p->id")}}">
                                  <img src="{{asset("productimages/$p->image")}}" alt="Product image" class="product-image">
                              </a>
  
                             
  
                              <div class="product-action product-action-dark">
                                 <form action="{{route("add.cart.click")}}" method="post">
                                    @csrf
                                    <input type="hidden" name="prodId" value="{{$p->id}}">
                                    <input type="hidden" name="val" value="1">
                                    <button type="submit" class="btn btn-product btn-cart text-warning" title="Add to cart"><span>add to cart</span></button>
                                 </form>
                                  <a href="product/{{$p->id}}" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                              </div><!-- End .product-action -->
                          </figure><!-- End .product-media -->
  
                          <div class="product-body">
                              <div class="product-cat">
                                  <a href="#">{{$p->category->name}}</a>
                              </div><!-- End .product-cat -->
                              <h3 class="product-title"><a href="{{url("/product/$p->id")}}">{{$p->name}}</a></h3><!-- End .product-title -->
                              <div class="product-price">
                                  N {{$p->price}}
                              </div><!-- End .product-price -->
                              <div class="ratings-container">
                                  <div class="ratings">
                                      <div class="ratings-val" style="width: 60%;"></div><!-- End .ratings-val -->
                                  </div><!-- End .ratings -->
                                  <span class="ratings-text">( {{count($p->reviews)}} Reviews )</span>
                              </div><!-- End .rating-container -->
                          </div><!-- End .product-body -->
                      </div><!-- End .product -->
                        @endforeach
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
                @foreach ($category as $cat)
                <div class="tab-pane p-0 fade " id="top-{{$cat->name}}-tab" role="tabpanel" aria-labelledby="top-{{$cat->name}}-link">
                    <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                        data-owl-options='{
                            "nav": true, 
                            "dots": false,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":5
                                }
                            }
                        }'>
                        @foreach ($cat->products as $p)
                       @if ($p->status == "available")
                       <div class="product product-2">
                        <figure class="product-media">
                            <span class="product-label label-circle label-top">Top</span>
                            <a href="{{url("/product/$p->id")}}">
                                <img src="{{asset("productimages/$p->image")}}" alt="Product image" class="product-image">
                            </a>

                          

                            <div class="product-action product-action-dark">
                              <form action="{{route("add.cart.click")}}" method="post">
                                  @csrf
                                  <input type="hidden" name="prodId" value="{{$p->id}}">
                                  <input type="hidden" name="val" value="1">
                                  <button type="submit" class="btn btn-product btn-cart text-warning" title="Add to cart"><span>add to cart</span></button>
                               </form>
                                <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                            </div><!-- End .product-action -->
                        </figure><!-- End .product-media -->

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">{{$p->category->name}}</a>
                            </div><!-- End .product-cat -->
                            <h3 class="product-title"><a href="{{url("/product/$p->id")}}">{{$p->name}}</a></h3><!-- End .product-title -->
                            <div class="product-price">
                                ${{$p->price}}
                            </div><!-- End .product-price -->
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <span class="ratings-text">( {{count($p->reviews)}} Reviews )</span>
                            </div><!-- End .rating-container -->

                         
                        </div><!-- End .product-body -->
                    </div><!-- End .product -->
                       @endif
                        @endforeach
                    </div><!-- End .owl-carousel -->
                </div><!-- .End .tab-pane -->
                @endforeach
            </div><!-- End .tab-content -->
        </div><!-- End .container -->

        <div class="container">
            <hr class="mt-5 mb-0">
        </div><!-- End .container -->

        <div class="icon-boxes-container mt-2 mb-2 bg-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon text-dark">
                                <i class="icon-rocket"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Free Shipping</h3><!-- End .icon-box-title -->
                                <p>Orders $50 or more</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon text-dark">
                                <i class="icon-rotate-left"></i>
                            </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Free Returns</h3><!-- End .icon-box-title -->
                                <p>Within 30 days</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon text-dark">
                                <i class="icon-info-circle"></i>
                            </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Get 20% Off 1 Item</h3><!-- End .icon-box-title -->
                                <p>when you sign up</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->

                    <div class="col-sm-6 col-lg-3">
                        <div class="icon-box icon-box-side">
                            <span class="icon-box-icon text-dark">
                                <i class="icon-life-ring"></i>
                            </span>

                            <div class="icon-box-content">
                                <h3 class="icon-box-title">We Support</h3><!-- End .icon-box-title -->
                                <p>24/7 amazing services</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-sm-6 col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .icon-boxes-container -->

        <div class="container">
            <div class="cta cta-separator cta-border-image cta-half mb-0" style="background-image: url(assets/images/demos/demo-3/bg-2.jpg);">
                <div class="cta-border-wrapper bg-white">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="cta-wrapper cta-text text-center">
                                <h3 class="cta-title">Shop Social</h3><!-- End .cta-title -->
                                <p class="cta-desc">Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p><!-- End .cta-desc -->
                        
                                <div class="social-icons social-icons-colored justify-content-center">
                                    <a href="#" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                                    <a href="#" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                </div><!-- End .soial-icons -->
                            </div><!-- End .cta-wrapper -->
                        </div><!-- End .col-lg-6 -->

                        <div class="col-lg-6">
                            <div class="cta-wrapper text-center">
                                <h3 class="cta-title">Get the Latest Deals</h3><!-- End .cta-title -->
                                <p class="cta-desc">and <br>receive <span class="text-primary">$20 coupon</span> for first shopping</p><!-- End .cta-desc -->
                        
                                <form action="#">
                                    <div class="input-group">
                                        <input type="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary btn-rounded" type="submit"><i class="icon-long-arrow-right"></i></button>
                                        </div><!-- .End .input-group-append -->
                                    </div><!-- .End .input-group -->
                                </form>
                            </div><!-- End .cta-wrapper -->
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .row -->
                </div><!-- End .bg-white -->
            </div><!-- End .cta -->
        </div><!-- End .container -->
    </main><!-- End .main -->

</x-body>