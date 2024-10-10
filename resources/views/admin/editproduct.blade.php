<x-admindash :$admin>
 <div class="container">
    <div class="row">
        <div class="col">
            <form action="{{route("admin.edit.products")}}" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="{{$product->id}}">
             @csrf
             <div class="col-sm-12 col-xl-6">
                 <div class="bg-light rounded h-100 p-4">
                     <h3 class="mb-4">Edit a Product</h3>
                     <div class="form-floating mb-3">
                         <input name="name" value="{{$product->name}}" type="text" class="form-control" id="floatingInput"
                             placeholder="product name">
                         <label for="floatingInput">Product Name</label>
                         @error('name')
                             <p class="text-danger">{{$message}}</p>
                         @enderror
                     </div>
                     <div class="form-floating mb-3">
                         <input name="price" value="{{$product->price}}" type="text" class="form-control" id="floatingInput"
                             placeholder="Price">
                         <label for="floatingInput">Product Price</label>
                         @error('price')
                             <p class="text-danger">{{$message}}</p>
                         @enderror
                     </div>
                     <div class="form-floating mb-3">
                         <select name="cat" class="form-select" id="floatingSelect"
                             aria-label="Floating label select example">
                             <option value="" selected>Select the category fo your product</option>
                             @foreach ($category as $cat)
                                   <option {{$product->category->id == $cat->id ? "selected" : ""}} value="{{$cat->id}}">{{$cat->name}} </option>
                             @endforeach
                           
                             
                         </select>
                         <label for="floatingSelect">Categories</label>
                         @error('cat')
                         <p class="text-danger">{{$message}}</p>
                     @enderror
         
                     </div>
                     <div class="form-floating mb-3">
                         <textarea name="desc" class="form-control" placeholder="Leave a comment here"
                             id="floatingTextarea" style="height: 150px;">{{$product->description}}</textarea>
                         <label for="floatingTextarea">Description</label>
                         @error('desc')
                             <p class="text-danger">{{$message}}</p>
                         @enderror
                     </div>
                     <div class="mb-3">
                         <label for="formFile" class="form-label">Choose the image file for the product</label>
                         <input name="image" class="form-control" type="file" id="formFile">
                         @error('image')
                             <p class="text-danger">{{$message}}</p>
                         @enderror
                     </div>
                     <button class="btn btn-outline-primary w-100 m-2" type="submit">Edit Product</button>
                 </div>
             </div>
            </form>
        </div>
    </div>
 </div>
 
 
    
 </x-admindash>