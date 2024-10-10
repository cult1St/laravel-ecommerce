<x-admindash :$admin>

@if (session("message"))
    <div class="alert alert-success">{{session("message")}}</div>
@endif
<div class="container-fluid pt-4 px-4">
   <div class="row g-4">
    <div class="col-sm-6 col-md-3 col-xl-3">
        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-chart-line fa-3x text-primary"></i>
            <div class="ms-3">
                <p class="mb-2">Total Products</p>
                <h6 class="mb-0">{{count($products)}}</h6>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3 col-xl-3">
        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-chart-bar fa-3x text-primary"></i>
            <div class="ms-3">
                <p class="mb-2">Total Orders</p>
                <h6 class="mb-0">{{count($orders)}}</h6>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3 col-xl-3">
        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-chart-area fa-3x text-primary"></i>
            <div class="ms-3">
                <p class="mb-2">Today Payments</p>
                <h6 class="mb-0">{{count($payments)}}</h6>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3  col-xl-3">
        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-chart-pie fa-3x text-primary"></i>
            <div class="ms-3">
                <p class="mb-2">Total Users</p>
                <h6 class="mb-0">{{count($users)}}</h6>
            </div>
        </div>
    </div>
</div>
</div>

</x-admindash>
