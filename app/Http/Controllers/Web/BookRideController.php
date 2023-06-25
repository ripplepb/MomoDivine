<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\book_hourly;
use App\Models\BookRide;
use App\Models\MinPrice;
use App\Models\TaxiFare;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookRideController extends Controller
{
    public function form()
    {
        $hours = TaxiFare::latest()->where('status', 1)->get();
        return view('web.bookride', compact('hours'));
    }

    public function bookRide(Request $request)
    {
        $now = Carbon::now()->format('g:i a');
        // dd(Carbon::today()->format('Y-m-d'));
        // dd($now);
        $check = Carbon::parse($now)->addHour(3);
        // dd();
        if ($request->input('date') == Carbon::today()->format('Y-m-d')) {
            if (Carbon::parse($request->input('time'))->format('g:i a') < $check->format('g:i a')) {
                return back()->with('time_error', ' Warning: Time Selection should Prior to 3 Hours from now!');
                // dd(1);
            }
        }
        $this->validate($request, [
            'pickup' => 'nullable|string|max:100',
            'dropoff' => 'nullable|string|max:100',
            'date' => 'required|string|max:10',
            'time' => 'required|string|max:100',
            'price' => 'required|string|max:100',
            'ride_type' => 'required|numeric'
        ]);

        if ($request->input('ride_type') == 1) {
            $ride_book = new BookRide();
            $ride_book->location = $request->input('dropoff');
            $ride_book->date = $request->input('date');
            $ride_book->time = $request->input('time');
            $ride_book->total_price = $request->input('price');
            $ride_book->ride_type = $request->input('ride_type');
            $ride_book->user_id = Auth::user()->id;
        } else {
            $ride_book = new BookRide();
            $ride_book->location = $request->input('pickup');
            $ride_book->date = $request->input('date');
            $ride_book->time = $request->input('time');
            $ride_book->total_price = $request->input('price');
            $ride_book->ride_type = $request->input('ride_type');
            $ride_book->user_id = Auth::user()->id;
        }

        $ride_book->save();

        if(Auth::guard('web')->check()){
            return redirect()->route('users.web.checkout', ['book_id' => $ride_book->id, 'book_type' => 1, 'ride_type' => $request->input('ride_type')]);
        } else {
            return redirect()->route('users.dashboard.view')->with('error', 'Please Try Again!');
        }
    }

    public function bookTaxi(Request $request)
    {
        $now = Carbon::now()->format('g:i a');
        $check = Carbon::parse($now)->addHour(2);
        if (Carbon::parse($request->input('time'))->format('g:i a') < $check->format('g:i a')) {
            return back()->with('error_time', ' Warning: Time Selection should Prior to 2 Hours from now!');
            // dd(1);
        }
        $this->validate($request, [
            'hour_id' => 'required|numeric|exists:taxi_fares,id',
            'location' => 'required|string|max:100',
            'date' => 'required|string|max:10',
            'time' => 'required|string|max:100',
        ],['hour_id' => 'Please Select  Hour']);

        $book_ride = new book_hourly();
        $book_ride->user_id = Auth::user()->id;
        $book_ride->hour_id = $request->input('hour_id');
        $book_ride->location = $request->input('location');
        $book_ride->time = $request->input('time');
        $book_ride->date = $request->input('date');
        $book_ride->save();

        if ($book_ride->save()) {
            return redirect()->route('users.web.checkout', ['book_id' => $book_ride->id, 'book_type' => 2]);
        } else {
            return redirect()->route('users.dashboard.dashhourbook')->with('error', 'Oops!!Please Try Again!');
        }
    }

    public function checkOut($book_id, $book_type, $ride_type = null)
    {
        if ($book_type == 1) {
            $proceed = BookRide::findOrFail($book_id);
            $min = MinPrice::latest()->first();
            return view('web.checkout', compact('proceed', 'ride_type', 'book_type', 'min'));
        } else {
            $proceed = book_hourly::findOrFail($book_id);
            $min = MinPrice::latest()->first();
            // dd($min);
            return view('web.checkout', compact('proceed', 'book_type', 'min'));
        }
    }
}
