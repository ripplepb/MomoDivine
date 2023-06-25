<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TaxiFare;
use Illuminate\Http\Request;

class FareController extends Controller
{
    public function list()
    {
        $hourly = TaxiFare::latest()->get();
        return view('admin.hour.list', compact('hourly'));
    }

    public function form($id = null)
    {
        if ($id) {
            $hourly = TaxiFare::findOrFail($id);
            return view('admin.hour.form', compact('hourly'));
        }
        return view('admin.hour.form');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'hourly_id' => 'nullable|numeric|exists:taxi_fares,id',
            'hour' => 'required|string|max:50',
            'price' => 'required|string|max:10'
        ]);

        if($request->input('hourly_id')){
            $update_hour = TaxiFare::findOrFail($request->input('hourly_id'));
            $update_hour->hour = $request->input('hour');
            $update_hour->price = $request->input('price');
            $update_hour->save();

            if ($update_hour->save()) {
                return redirect()->route('admin.fare.list')->with('message', 'Updated Successfully');
            } else {
                return redirect()->route('')->with('error', 'Please Try Again!');
            }
            
        } else {
            $update_hour = new TaxiFare();
            $update_hour->hour = $request->input('hour');
            $update_hour->price = $request->input('price');
            $update_hour->save();

            if ($update_hour->save()) {
                return redirect()->route('admin.fare.list')->with('message', 'Added Successfully');
            } else {
                return redirect()->route('')->with('error', 'Please Try Again!');
            }
        }
    }
}
