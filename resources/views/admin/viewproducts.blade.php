<x-admindash :$admin>
    @if (session("message"))
    <div class="alert alert-success">{{session("message")}}</div>
    @endif
  <div class="container">
    <div class="row">
        <div class="col">
            <div class="m-2 bg-light rounded h-100 p-4 table-responsive">
                <h6 class="mb-4">Products Table</h6>
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Image</th>
                            <th scope="col">Product Description</th>
                            <th scope="col">Product Price</th>
                            <th scope="col">Product Category</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $p)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$p->name}}</td>
                            <td><img src="{{asset("productimages/$p->image")}}" style="width: 100px" alt=""></td>
                            <td>{{substr($p->description, 0, 100)}}...</td>
                            <td>{{$p->price}}</td>
                            <td>{{$p->category->name}}</td>
                            <td>{{$p->status}}</td>
                            <td>
                                <form action="{{route("admin.edit.product")}}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$p->id}}">
                                    <button type="submit" class="btn btn-info m-2">Edit</button>
                                </form>
                                <form action="{{route("admin.delete.product")}}" method="post">
                                    @csrf
                                    @method("delete")
                                    <input type="hidden" name="id" value="{{$p->id}}">
                                    <button type="submit" onclick="confirm('Are you sure you want to delete this product {{$p->name}}')" class="btn btn-danger m-2">Delete</button>
                                </form>
                            </td>
                            <td>
                                <form id="status_change">
                                    @csrf
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio1"
                                            value="available" {{$p->status=="available" ? "checked" : ""}}>
                                        <label class="form-check-label" for="inlineRadio1">Available</label>
                                    </div>
                                    <input type="hidden" name="prodId" value="{{$p->id}}">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="status" id="inlineRadio2"
                                            value="not_available" {{$p->status=="not_available" ? "checked" : ""}}>
                                        <label class="form-check-label" for="inlineRadio2">Not Available</label>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                       
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</x-admindash>