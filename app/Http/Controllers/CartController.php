<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\State;
use Error;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function addToCartByClick(Request $request){
        $pId = request()->prodId;
        $val = request()->val;
        $cart = session()->get("cart");
        if(isset($cart[$pId])){
            $cart[$pId] =  $cart[$pId] + $val; ; 
        }else{
            $cart[$pId] = $val;
        }
        session()->put("cart", $cart);
        session()->flash("message", "Cart added successfully");
      return redirect()->back();
    }
    public function show_view(){
        $cartitems = [];
        if(session("cart")){
            foreach(session("cart") as $k => $c){
                $prod = Product::findOrFail($k);
                array_push($cartitems, $prod);
                
            }
        }
        $cat = Category::all();
        return view("ecommerce.cart", ["items"=> $cartitems, "category"=> $cat]);
    }
    public function remove_prod($id){
      $cart = session()->get("cart");
        unset($cart[$id]);
        session()->put("cart", $cart);
       return redirect()->back();
        
    }
    public function empty_cart(){
       $cart = session()->get("cart");
      $cart = [];
       session()->put("cart", $cart);
        return redirect()->back();
    }
    public function show_checkout(){
        $states = State::all();
        $cartitems = [];
        if(session("cart")){
            foreach(session("cart") as $k => $c){
                $prod = Product::findOrFail($k);
                array_push($cartitems, $prod);
                
            }
        }
        $cat = Category::all();
        return view("ecommerce.checkout", ["items"=> $cartitems, "category"=> $cat, "states" => $states]);
    }
    public function checkout(){
        $cart = session()->get("cart");
        if(empty($cart)){
            session()->flash("messsage", "cart cannot be empty");
            return redirect(route("cart.view"));
        }
        request()->validate([
            "address" => "required",
            "state" => "required",
            "lga" => "required"
        ]);
        
        $odetails = session()->get("order");
        $odetails['address'] = request()->address;
        $odetails['state'] = request()->state;
        $odetails['lga'] = request()->lga;
        session()->put("order", $odetails);
      return redirect(route("transaction.insert"));
    }
}
