<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\book_hourly;
use App\Models\BookRide;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashController extends Controller
{
    public function dashboardView()
    {
        $user_detail = User::findOrFail(Auth::user()->id);
        return view('web.dashboard', compact('user_detail'));
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'nullable|numeric|exists:users,id',
            'name' => 'required|string|max:50',
            'email' => 'required|email|max:50',
            'mobile' => 'required|string|max:10'
        ]);
        $check = User::where('mobile', $request->input('mobile'))->where('email', $request->input('email'))->count();
        if ($check > 0) {
            return back()->with('error', 'Either Mobile or Email has been taken');
        }
        $user = User::findOrFail($request->input('user_id'));
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->mobile = $request->input('mobile');
        $user->save();

        return back();
    }
    
    public function dashAirtodes()
    {
        $details = BookRide::latest()->where('ride_type', 1)->where('user_id', Auth::user()->id)->get();
        return view('web.dashairtodes', compact('details'));
    }

    public function dashDestoair()
    {
        $details = BookRide::latest()->where('ride_type', 2)->where('user_id', Auth::user()->id)->get();
        return view('web.dashdestoair', compact('details'));
    }

    public function dashHourbook()
    {
        $details = book_hourly::latest()->where('user_id', Auth::user()->id)->get();
        return view('web.dashhourbook', compact('details'));
    }
}
