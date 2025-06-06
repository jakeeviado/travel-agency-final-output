<?php

namespace App\Http\Controllers;

use App\Models\tbl_orderPackages;
use Illuminate\Http\Request;

class TblOrderPackagesController extends Controller
{
    public function index()
    {
        $orderPackages = tbl_orderPackages::all();
        if ($orderPackages->isEmpty()) {
            return redirect()->route('order_packages.create')->with('info', 'No order packages found.');
        } else {
            return view('orders', compact('orderPackages'));
        }
    }
}
