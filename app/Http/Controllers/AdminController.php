<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Illuminate\Validation\ValidationException;
use function Laravel\Prompts\error;

class AdminController extends Controller
{
    //
    public function login(){
        request()->validate([
            "email"=> "required|email",
            "password"=>"required"
        ]);
        $admin = Admin::where("email", request()->email)->first();
       
        if($admin){
           
           $chk =  Hash::check(request()->password, $admin->password);
           if($chk){
            session()->put("adminonline", $admin->id);
            return redirect()->intended(route("admin.dashboard", absolute: false));
           }else{
            throw ValidationException::withMessages([
                "password"=>"Incorrect password"
            ]);
           }
        }else{
            throw ValidationException::withMessages([
                "email"=>"Incorrect Email"
            ]);
        }
    }
    public function view_admin(){
        $products = Product::all();
        $orders = Order::all();
        $payments = Payment::all();
        $users = User::all();
        $admin = Admin::findOrFail(session("adminonline"));
        // $admin = "Hello worldd";
        return view("admin.dashboard", ["admin"=> $admin, "products"=> $products, "orders" => $orders, "payments"=> $payments, "users"=> $users]) ;
    }
    public function destroy(){
        session()->flush();
       return redirect(route('admin.login'));
    }
}
