<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    //
    public function paystack(){
        $email = Auth::user()->email;
        $details = session()->get("trans_details");
        $ref = $details["trans_ref"];
        $transaction = Transaction::where("trans_ref", $ref)->first();
        $amt = $transaction->total_amount * 100;
        $postRequest = [
            "email"=> $email,
            "amount"=> $amt,
            "reference"=> $ref,
            "callback_url" => route("payment.verify"),
        ];
        $headers = ['Content-Type: application/json', 'Authorization: Bearer sk_test_1a49b12d5f951b9eac13f893bf5b7a34ffac892d'];
        $url ='https://api.paystack.co/transaction/initialize';
        ////Step 1, initialize curl
        $cURLConnection = curl_init($url);
        ////step 2, Set the curl options using the functions curl_setopt()
        curl_setopt($cURLConnection, CURLOPT_CUSTOMREQUEST,'POST');
        curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, json_encode($postRequest));
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($cURLConnection, CURLOPT_SSL_VERIFYPEER, false);
        ////step 3, execute the curl session using curl_exec()
        $apiResponse = curl_exec($cURLConnection);
        if($apiResponse){
            curl_close($cURLConnection);
            $response = json_decode($apiResponse);
            if($response->status == true){
                 $url = $response->data->authorization_url;
          
             return redirect($url);
            }else{
                return redirect(route("cart.checkout"));
            }
            
        }else{
            $r = curl_error($cURLConnection);
            session()->flash("message", "poor connection status");
            return redirect(route("cart.checkout"));
        }

    
    }
    public function verify(){
        
        $ref = request()->get("reference");
      //  $reference = $ref['trans_ref'];
        $headers = ['Content-Type: application/json', 'Authorization: Bearer sk_test_1a49b12d5f951b9eac13f893bf5b7a34ffac892d'];
            $url ="https://api.paystack.co/transaction/verify/$ref";
            ////Step 1, initialize curl
            $cURLConnection = curl_init($url);
            ////step 2, Set the curl options using the functions curl_setopt()
           
            curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($cURLConnection, CURLOPT_SSL_VERIFYPEER, false);
            $apiResponse = curl_exec($cURLConnection);
            if($apiResponse){
                curl_close($cURLConnection);
                $response = json_decode($apiResponse);
               if($response){
                $trans = Transaction::where("trans_ref", $ref)->first();
                $payment = new Payment();
                $payment->amount = $trans->total_amount;
                $payment->user_id = auth()->user()->id;
                $payment->transaction_id = $trans->id;
                $payment->save();
               
                session()->put("payment_id", $payment->id);
                session()->flash("message", "payment made successfully check your orders now");
                return redirect(route("order.insert"));

               }else{
                session()->flash("message", "Invalid transaction ref");
                return redirect(route("cart.checkout"));
               }
            }else{
                $r = curl_error($cURLConnection);
                print_r($r);
                return false;
            }
    }
}
