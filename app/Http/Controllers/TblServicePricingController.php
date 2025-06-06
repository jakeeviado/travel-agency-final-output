<?php

namespace App\Http\Controllers;

use App\Models\tbl_servicePricing;
use Illuminate\Http\Request;

class TblServicePricingController extends Controller
{
    public function index()
    {
        $pricings = tbl_servicePricing::all();
        return view('service_pricing.index', compact('pricings'));
    }
}
