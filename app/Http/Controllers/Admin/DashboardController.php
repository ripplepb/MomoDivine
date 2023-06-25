<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\book_hourly;
use App\Models\BookRide;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardView()
    {
        $today_rides = BookRide::latest()->where('date', Carbon::now()->format('Y-m-d'))->get();
        $today_ride = book_hourly::latest()->where('date', Carbon::now()->format('Y-m-d'))->get();
        $users = User::count();
        return view('admin.dashboard', compact('today_rides', 'today_ride', 'users'));
    }
}
