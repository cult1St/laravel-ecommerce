<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function show_index(){
        $cartitems = [];
        if(session("cart")){
            foreach(session("cart") as $k => $c){
                $prod = Product::findOrFail($k);
                array_push($cartitems, $prod);
                
            }
        }
        $category = Category::all();
        $product = Product::all()->where('status', "available");
        return view("ecommerce.index", ["category"=> $category, "products"=>$product, "items"=> $cartitems]);
    }
    public function show_add(){
        $admin = Admin::findOrFail(session("adminonline"));
        $categories = Category::all();
        return view("admin.addproduct", ["category"=> $categories, "admin"=> $admin]);
    }
    public function add_product(){
        request()->validate([
            "name"=>"required",
            "desc"=>"required",
            "price" => "required",
            "cat"=>"required|int",
            "image"=>"required|image"
        ]);
       $name = request()->name;
       $desc = request()->desc;
       $price = request()->price;
       $cat = request()->cat;
       $image = request()->file("image");
       $filename = time().rand().".".$image->getClientOriginalExtension();
        $product = new Product();
        $product->name = $name;
        $product->description = $desc;
        $product->price = $price;
        $product->image = $filename;
        $product->category_id = $cat;
        $product->save();
        $image->move(public_path("productimages"), $filename);
       
        session()->flash("message", "Product added successfully");
       return  redirect(route("admin.view.products"));
      
       
    }
    public function show_edit(){
        $id = request()->id;
        $admin = Admin::findOrFail(session("adminonline"));
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view("admin.editproduct", ["category"=> $categories, "admin"=> $admin, "product"=> $product]);
    }
    public function edit_product(){
        request()->validate([
            "name"=>"required",
            "desc"=>"required",
            "price" => "required",
            "cat"=>"required|int",
        ]);
        $id = request()->id;
       $name = request()->name;
       $desc = request()->desc;
       $price = request()->price;
       $cat = request()->cat;
       $image = request()->file("image");
       if($image){
        $filename = time().rand().".".$image->getClientOriginalExtension();
        $product = Product::findOrFail($id);
        $product->name = $name;
        $product->description = $desc;
        $product->price = $price;
        $product->image = $filename;
        $product->category_id = $cat;
        $product->save();
        $image->move(public_path("productimages"), $filename);
       }else{
        $product = Product::findOrFail($id);
        $product->name = $name;
        $product->description = $desc;
        $product->price = $price;
        $product->category_id = $cat;
        $product->save();
       }
       
       
        session()->flash("message", "Product Updated successfully");
       return  redirect(route("admin.view.products"));
      
       
    }

    public function view_products(){
        $admin = Admin::findOrFail(session("adminonline"));
        $products = Product::all();
        return view("admin.viewproducts", ["products"=> $products, "admin"=> $admin]);
    }
    public function status_change(){
       $status = request()->status;
       $id = request()->prodId;
       $product = Product::findOrFail($id);
       $product->status = $status;
       $product->save();
       echo json_encode([
        "status"=> true,
        "message"=> "Product status updated to $status"
       ]);
       
    }
    public function delete(){
        $id = request()->id;
        $product = Product::findOrFail($id);
        $product->delete();
        
        session()->flash("message", "Product Deleted successfully");
       return  redirect(route("admin.view.products"));
      
    }
    public function view_product($id){
        $cartitems = [];
        if(session("cart")){
            foreach(session("cart") as $k => $c){
                $prod = Product::findOrFail($k);
                array_push($cartitems, $prod);
            }
        }
        $products = Product::all();
        $product = Product::findOrFail($id);
        return view("ecommerce.product", ["products" => $products, "product" => $product, "items"=> $cartitems]);
    }
    public function fetch_api(){
        $products = Product::all();
        $newProducts = [];
        foreach($products as $product){
            $data = [
                "product_name" => $product->name,
                "product_desc" => $product->description,
                "product_image" => "http://127.0.0.1:8000/productimages/".$product->image,
                "product_price" => $product->price
            ];
            array_push($newProducts, $data);
        }
        return response()->json($newProducts, 200);
    }
}


