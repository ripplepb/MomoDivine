<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
{
    public function locationSearch(Request $request)
    {
        // dd($request);

        $locations = Location::where('location_name','like','%' . $request->input('search_key').'%')->orderBy('location_name','asc')->get(['id','location_name', 'price']);
        $response = [
            'status' => true,
            'results' => $locations,
        ];
        return response()->json($response,200);
    }

    // public function ()
    // {
    //     # code...
    // }
}
