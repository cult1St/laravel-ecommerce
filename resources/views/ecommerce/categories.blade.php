<x-body :$items >
    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">List<span>Shop</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-2">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Categories</a></li>
                    <li class="breadcrumb-item active" aria-current="page">List</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="products mb-3">
                          
                                @foreach ($categories as $cat)
                                    @foreach ($cat->products as $p)
                                   @if ($p->status == "available")
                                   <div class="product product-list">
                                    <div class="row">
                                        <div class="col-6 col-lg-3">
                                            <figure class="product-media">
                                                <span class="product-label label-new">New</span>
                                                <a href="/product/{{$p->id}}">
                                                    <img src="{{asset("productimages/$p->image")}}" alt="Product image" class="product-image">
                                                </a>
                                            </figure><!-- End .product-media -->
                                        </div><!-- End .col-sm-6 col-lg-3 -->
    
                                        <div class="col-6 col-lg-3 order-lg-last">
                                            <div class="product-list-action">
                                                <div class="product-price">
                                                    ${{$p->price}}
                                                </div><!-- End .product-price -->
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                                    </div><!-- End .ratings -->
                                                    <span class="ratings-text">( {{count($p->reviews)}} Reviews )</span>
                                                </div><!-- End .rating-container -->
    
                                                <div class="product-action">
                                                    <a href="popup/quickView.html" class="btn-product btn-quickview" title="Quick view"><span>quick view</span></a>
                                                    <a href="#" class="btn-product btn-compare" title="Compare"><span>compare</span></a>
                                                </div><!-- End .product-action -->
    
                                                <form action="{{route("add.cart.click")}}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="prodId" value="{{$p->id}}">
                                                    <input type="hidden" name="val" value="1">
                                                    <button type="submit" class="btn btn-product btn-cart text-warning" title="Add to cart"><span>add to cart</span></button>
                                                 </form>
                                            </div><!-- End .product-list-action -->
                                        </div><!-- End .col-sm-6 col-lg-3 -->
    
                                        <div class="col-lg-6">
                                            <div class="product-body product-action-inner">
                                                <a href="#" class="btn-product btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <div class="product-cat">
                                                    <a href="{{url("categories/".$p->category->id)}}">{{$p->category->name}}</a>
                                                </div><!-- End .product-cat -->
                                                <h3 class="product-title"><a href="/product/{{$p->id}}">{{$p->name}}</a></h3><!-- End .product-title -->
    
                                                <div class="product-content">
                                                    <p>{{substr($p->description, 0, 100)}}...<a href="/product/{{$p->id}}">Read More</a></p>
                                                </div><!-- End .product-content -->
                                                
                                            
                                            </div><!-- End .product-body -->
                                        </div><!-- End .col-lg-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .product -->
                                   @endif
                                    @endforeach
                                @endforeach
                        

                           

                        </div><!-- End .products -->
                    </div><!-- End .col-lg-9 -->
                    <aside class="col-lg-3 order-lg-first">
                        <div class="sidebar sidebar-shop">
                            <div class="widget widget-clean">
                                <label>Filters:</label>
                                <a href="#" class="sidebar-filter-clear">Clean All</a>
                            </div><!-- End .widget widget-clean -->

                            <div class="widget widget-collapsible">
                                <h3 class="widget-title">
                                    <a data-toggle="collapse" href="#widget-1" role="button" aria-expanded="true" aria-controls="widget-1">
                                        Category
                                    </a>
                                </h3><!-- End .widget-title -->

                                <div class="collapse show" id="widget-1">
                                    <div class="widget-body">
                                        <div class="filter-items filter-items-count">
                                            <div class="filter-item">
                                                <div class="custom-control custom-checkbox">
                                                    <a class="nav-link" id="cat-1">Dresses</a>
                                                </div><!-- End .custom-checkbox -->
                                                <span class="item-count">3</span>
                                            </div><!-- End .filter-item -->
                                           
                                        </div><!-- End .filter-items -->
                                    </div><!-- End .widget-body -->
                                </div><!-- End .collapse -->
                            </div><!-- End .widget -->
                        </div><!-- End .sidebar sidebar-shop -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
</x-body>