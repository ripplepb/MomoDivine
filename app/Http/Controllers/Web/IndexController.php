<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\TaxiFare;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('web.index');
    }

    // public function hourPrice($hour_id = null)
    // {
    //     $price = TaxiFare::findOrFail($hour_id);
    //     return $price;
    // }
}
