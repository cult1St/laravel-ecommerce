<x-body :$items>
    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">My Account<span>Shop</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Account</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="dashboard">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-4 col-lg-3">
                            <ul class="nav nav-dashboard flex-column mb-3 mb-md-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab-dashboard-link" data-toggle="tab" href="#tab-dashboard" role="tab" aria-controls="tab-dashboard" aria-selected="true">Dashboard</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="tab-orders-link" data-toggle="tab" href="#tab-orders" role="tab" aria-controls="tab-orders" aria-selected="false">Orders</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="tab-cred-link" data-toggle="tab" href="#tab-cred" role="tab" aria-controls="tab-cred" aria-selected="false">Edit Credentials</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route("cart.view")}}">Cart</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route("cart.checkout")}}">Checkout</a>
                                </li>
                                <li class="nav-item">
                                    <form action="{{route("logout")}}" method="post">
                                        @csrf
                                        <button type="submit" class="btn" >Sign Out</button>
                                    </form>
                                    
                                </li>
                            </ul>
                        </aside><!-- End .col-lg-3 -->

                        <div class="col-md-8 col-lg-9">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tab-dashboard" role="tabpanel" aria-labelledby="tab-dashboard-link">
                                    <p>Hello <span class="font-weight-normal text-dark">{{Auth::user()->name}}</span> 
                                    <br>
                                    From your account dashboard you can  <a class="text-warning" href="#tab-cred" class="tab-trigger-link">edit your password and account details</a>.</p>
                                </div><!-- .End .tab-pane -->
                                <div class="tab-pane fade" id="tab-cred" role="tabpanel" aria-labelledby="tab-cred-link">
                                    <x-app-layout>
                                        <div class="py-12">
                                            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                                            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                                                <div class="max-w-xl">
                                                    @include('profile.partials.update-profile-information-form')
                                                </div>
                                            </div>
                                
                                            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                                                <div class="max-w-xl">
                                                    @include('profile.partials.update-password-form')
                                                </div>
                                            </div>
                                
                                            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                                                <div class="max-w-xl">
                                                    @include('profile.partials.delete-user-form')
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </x-app-layout>
                                  
                                </div><!-- .End .tab-pane -->

                                <div class="tab-pane fade" id="tab-orders" role="tabpanel" aria-labelledby="tab-orders-link">
                                    <div class="card table-responsive">
                                       <div class="card-header">
                                        <h2 class="text-warning"> <i class="fa fa-shop"></i>Your orders</h2>
                                       </div>
                                       <div class="card-body">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Address</th>
                                                    <th>State</th>
                                                    <th>LGA</th>
                                                    <th>Date and Time ordered</th>
                                                    <th>Status</th>
                                                    <th>Products</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $order)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{$order->address}}</td>
                                                        <td>{{$order->state->name}}</td>
                                                        <td>{{$order->lga->name}}</td>
                                                        <td>{{$order->created_at}}</td>
                                                        <td>{{$order->status}}</td>
                                                        <td>
                                                            <div class="row">
                                                               @foreach ($order->product as $p)
                                                               <div class="col-md-3">
                                                                <a href="{{url("/product/$p->id")}}"><img src="{{asset("productimages/$p->image")}}" class="img-fluid" alt="{{$p->name}} Image"><p>{{$p->name}}</p></a>
                                                                </div>
                                                               @endforeach
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                       </div>
                                     
                                    </div>
                                    <p>No order has been made yet.</p>
                                    <a href="category.html" class="btn btn-outline-primary-2"><span>GO SHOP</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- .End .tab-pane -->
                            </div>
                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .dashboard -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->
</x-body>