<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    public function insert(){
        $cart = session()->get("cart");
        $total = 0;
        if(!is_array($cart)){
            return redirect("/dashboard");
            die();
         }
        foreach($cart as $k => $q){
            $product = Product::findOrFail($k);
            $total_price = $product->price * $q;
            $total = $total + $total_price;
        }
        $trans_ref = time().rand();
        $user_id = auth()->user()->id;
        $transaction = new Transaction();
        $transaction->trans_ref = $trans_ref;
        $transaction->user_id = $user_id;
        $transaction->total_amount = $total;
        $transaction->save();
        $details = [
            "trans_ref" => $trans_ref,
        ];
        session()->put("trans_details", $details);
        return redirect(route("transaction.details.insert"));
        #return redirect(route("payment.insert"));
        
    }
}
