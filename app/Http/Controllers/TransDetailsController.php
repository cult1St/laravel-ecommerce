<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Trans_details;
use App\Models\Transaction;
use App\Models\Lga;
use App\Models\Order;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;

class TransDetailsController extends Controller
{
    //
    public function insert(){
        $cart = session()->get("cart");
        if(!is_array($cart)){
            return redirect("/dashboard");
            die();
         }
        foreach($cart as $k => $c){
            $transaction = Transaction::where("trans_ref", session("trans_details")['trans_ref'])->first();
            $trans = new Trans_details();
            $product = Product::find($k);
            $trans->product_id = $k;
            $trans->amount = $product->price;
            $trans->transaction_id = $transaction->id;
            $trans->quantity = $c;
            $trans->save();
        }

        return redirect(route("payment.insert"));

    }
    public function view_index(){
        $user = User::findOrFail(auth()->user()->id);
        $orders = Order::all()->where("user_id", auth()->user()->id);
        $cartitems = [];
        if(session("cart")){
            foreach(session("cart") as $k => $c){
                $prod = Product::findOrFail($k);
                array_push($cartitems, $prod);
                
            }
        }
        return view('ecommerce.dashboard', ["items"=> $cartitems, "orders"=> $orders, "user"=> $user]);
    }
}
