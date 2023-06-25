<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\book_hourly;
use App\Models\BookRide;
use Illuminate\Http\Request;

class RideController extends Controller
{
    public function locationRides()
    {
        $rides = BookRide::latest()->get();
        return view('admin.location.rides', compact('rides'));
    }

    public function hourRides()
    {
        $rides = book_hourly::latest()->get();
        return view('admin.hour.rides', compact('rides'));
    }

    public function pay($id, $type)
    {
        if ($type == 1) {
            $clear_amount = BookRide::findOrFail($id);
            $clear_amount->total_payment_status = 2;
            $clear_amount->price += $clear_amount->pending_price;
            $clear_amount->pending_price = 0;
            $clear_amount->save();
        } else {
            $clear_amount = book_hourly::findOrFail($id);
            $clear_amount->total_payment_status = 2;
            $clear_amount->paid_price += $clear_amount->pending_price;
            $clear_amount->pending_price = 0;
            $clear_amount->save();
        }
        return back()->with('message', 'Payment Completed');
        
    }
}
