<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\TaxiFare;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $hours = TaxiFare::latest()->where('status', 1)->get();
        return view('web.index', compact('hours'));
    }

    public function hourPrice($hour_id = null)
    {
        $price = TaxiFare::findOrFail($hour_id);
        return $price;
    }
}
