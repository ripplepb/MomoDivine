<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Location;
use App\Models\MinPrice;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function form($id = null)
    {
        if($id){
            $location = Location::findOrFail($id);
            return view('admin.location.form', compact('location'));
        }
        return view('admin.location.form');
    }

    public function list()
    {
        $locations = Location::get();
        return view('admin.location.list', compact('locations'));
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'location_id' => 'nullable|numeric|exists:locations,id',
            'location' => 'required|string|max:100',
            'pincode' => 'required|numeric|digits:6',
            'price'=> 'required|string|max:10',
            'min_price' => 'required|string|max:10'
        ]);

        if ($request->input('location_id')) {
            $location = Location::findOrFail($request->input('location_id'));
            $location->location_name = $request->input('location');
            $location->pincode = $request->input('pincode');
            $location->price = $request->input('price');
            $location->min_price = $request->input('min_price');
            $location->save();

            if ($location->save()) {
                return redirect()->route('admin.location.list')->with('message', 'Location Updated Successfully');
            } else {
                return redirect()->route('admin.location.form', ['id' => $request->input('location_id')])->with('error', 'Please Try Again!');
            }
        } else {
            $location = new Location();
            $location->location_name = $request->input('location');
            $location->pincode = $request->input('pincode');
            $location->price = $request->input('price');
            $location->min_price = $request->input('min_price');
            $location->save();

            if ($location->save()) {
                return redirect()->route('admin.location.list')->with('message', 'Location Added Successfully');
            } else {
                return redirect()->route('admin.location.form')->with('error', 'Please Try Again!');
            }
        }
    }

    public function minForm($id = null)
    {
        if ($id) {
            $price = MinPrice::findOrFail($id);
            return view('admin.minimum.form', compact('price'));
        }
        return view('admin.minimum.form');
    }

    public function minList()
    {
        $price = MinPrice::latest()->get();
        return view('admin.minimum.list', compact('price'));
    }

    public function addMin(Request $request)
    {
        $this->validate($request, [
            'price_id' => 'nullable|numeric|exists:min_prices,id',
            'min_price' => 'required|string|max:3'
        ]);

        if ($request->input('price_id')) {
            $price = MinPrice::findOrFail($request->input('price_id'));
            $price->min_price = $request->input('min_price');
            $price->save();

            if ($price->save()) {
                return redirect()->route('admin.min_list')->with('message', 'Minimum Price updated successfully');
            } else {
                return redirect()->route('admin.min_form', ['id' => $request->input('price_id')])->with('error', 'Please Try Again!');;
            }
        } else {
            $price = new MinPrice();
            $price->min_price = $request->input('price');
            $price->save();

            if ($price->save()) {
                return redirect()->route('admin.min_list')->with('message', 'Minimum Price added successfully');
            } else {
                return redirect()->route('admin.min_form')->with('error', 'Please Try Again!');
            }
        }
    }

    public function minStatus($id = null)
    {
        $status = MinPrice::findOrFail($id);
        $status->status = $status->status == 1 ? 2 : 1;

        $status->save();
        return back();
    }
}
