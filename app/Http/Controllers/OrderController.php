<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function insert(){
        $cart = session()->get("cart");
        $carts = [];
        if(!is_array($cart)){
           return redirect("/dashboard");
           die();
        }
        foreach($cart as $k => $v){
            
            array_push($carts, $k) * $v;
        }
        $order_details = session()->get("order");
        $order = new Order();
        $order->payment_id = session("payment_id");
        $order->user_id = auth()->user()->id;
        $order->address = $order_details['address'];
        $order->lga_id = $order_details['lga'];
        $order->state_id = $order_details['state'];
        $order->save();
        $order->product()->detach($carts);
        $order->product()->attach($carts);

        session()->put("cart", []);
        return redirect("/dashboard");
    }
    public function view_orders(){
        $orders = Order::all();
        $admin = Admin::find(session("adminonline"));
        return view("admin.view_orders", ["orders"=> $orders, "admin"=> $admin]);

    }
}
