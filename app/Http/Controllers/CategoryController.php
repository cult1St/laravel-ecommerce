<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function view_allcategories(){
        $cartitems = [];
        if(session("cart")){
            foreach(session("cart") as $k => $c){
                $prod = Product::findOrFail($k);
                array_push($cartitems, $prod);
                
            }
        }
      
            $categories = Category::all();
      
        return view("ecommerce.categories", ["categories"=>$categories, "items"=> $cartitems]);
    }
    public function view_categories($id){
        $cartitems = [];
        if(session("cart")){
            foreach(session("cart") as $k => $c){
                $prod = Product::findOrFail($k);
                array_push($cartitems, $prod);
                
            }
        }
     
            $categories = Category::findOrFail($id);
            $categories2 = Category::all();
      
        return view("ecommerce.category", ["categories"=>$categories, "items"=> $cartitems, "allcategories"=> $categories2]);
    }
}
