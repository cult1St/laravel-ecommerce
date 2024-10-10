<x-admindash :$admin>
    @if (session("message"))
    <div class="alert alert-success">{{session("message")}}</div>
    @endif
  <div class="container">
    <div class="row">
        <div class="col">
            <div class="m-2 bg-light rounded h-100 p-4 table-responsive">
                <h6 class="mb-4">Order Table</h6>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>User</th>
                            <th>Date</th>
                            <th>Location</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$order->user->name}}</td>
                                <td>{{$order->created_at}}</td>
                                <td>{{$order->state->name}}</td>
                                <th>{{$order->status}}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</x-admindash>