<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\book_hourly;
use App\Models\BookRide;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(Request $request)
    {
        if ($request->book_type == 1) {
            $checkout = BookRide::findOrFail($request->book_id);
            $paid_price = $request->price;
            if ($paid_price < $checkout->total_price) {
                $checkout->total_payment_status = 1;
                $checkout->price = $paid_price;
                $checkout->pending_price = $checkout->total_price - $paid_price;
            } else {
                $checkout->total_payment_status = 2;
                $checkout->price = $paid_price;
                $checkout->pending_price = 0;
            }
            $checkout->save();
        } else {
            $checkout = book_hourly::findOrFail($request->book_id);
            $paid_price = $request->price;
            if ($paid_price < $checkout->total_price) {
                $checkout->total_payment_status = 2;
                $checkout->paid_price = $paid_price;
                $checkout->pending_price = 0;
            } else {
                $checkout->total_payment_status = 1;
                $checkout->paid_price = $paid_price;
                $checkout->pending_price = $checkout->hour->price - $paid_price;
            }
            $checkout->save();
        }
        return redirect()->route('users.web.payment_verify',['checkout_id'=>$checkout->id, 'book_type'=>$request->book_type, 'ride_type'=>$request->ride_type]);
        // $ch = curl_init();

        // // curl_setopt($ch, CURLOPT_URL, 'https://www.instamojo.com/api/1.1/payment-requests/');
        // curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');

        // curl_setopt($ch, CURLOPT_HEADER, FALSE);
        // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        // curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

        // curl_setopt(
        //     $ch,
        //     CURLOPT_HTTPHEADER,

        //     array(
        //         "X-Api-Key:".config('services.instamojo.api_key'),
        //         "X-Auth-Token:". config('services.instamojo.auth_token')
        //     )
        // );




        // $payload = array(

        //     'purpose' => 'Booking Bijli Cab',
        //     'phone' => $checkout->user->phone_number,
        //     'amount' => $paid_price,
        //     'buyer_name' => $checkout->name,
        //     'redirect_url' => route('users.web.payment_verify',['checkout_id'=>$checkout->id, 'book_type'=>$request->book_type]),
        //     'send_email' => false,
        //     'send_sms' => false,
        //     'allow_repeated_payments' => false
        // );



        // curl_setopt($ch, CURLOPT_POST, true);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));

        // $response = curl_exec($ch);

        // curl_close($ch);


        // $decodedTect = html_entity_decode($response);

        // $myArray = array(json_decode($response, true));
        // dd($myArray);

        // $longu = $myArray[0]["payment_request"]["longurl"];

        // return redirect()->to($longu);
    }
    //========== End Payment Function ==========//



    //========== Start Receipt Generated Function ==========//
    function verify($checkout_id, $book_type, $ride_type)
    {
        if ($book_type == 1) {
            $booked = BookRide::findOrFail($checkout_id);   
        } else {
            $booked = book_hourly::findOrFail($checkout_id);
        }
        // $payment_id = $_GET['payment_id'];
        // $payment_request_id = $_GET['payment_request_id'];
        // $payment_status = $_GET['payment_status'];
        
        
        // if ($payment_status == "Credit") {
            $booked->payment_status = 2;
            // $booked->transaction_id = $payment_id;
            // $booked->payment_req_id = $payment_request_id;
            
            $booked->save();
            if ($book_type == 2) {
                return redirect()->route('users.dashboard.dashhourbook')->with('message', 'Taxi booked');
            } else {
                if ($ride_type == 1) {
                    return redirect()->route('users.dashboard.dashairtodes')->with('message', 'Taxi booked');
                } else {
                    return redirect()->route('users.dashboard.dashdestoair')->with('message', 'Taxi booked');
                }
                
            }
            
        // } else {
        //     return redirect()->route('users.dashboard.view')->with('error', 'Something Went Wrong');
        // }
    }
}
