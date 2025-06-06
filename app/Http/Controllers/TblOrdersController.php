<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\tbl_orders;

class TblOrdersController extends Controller
{
    public function index()
    {
        $orders = tbl_orders::all();

        if ($orders->isEmpty()) {
            return redirect()->route('orders.create')->with('info', 'No orders found.');
        } else {
            return view('orders.index', compact('orders'));
        }
    }

    public function show($id)
    {
        $order = tbl_orders::findOrFail($id);

        if (!$order) {
            return redirect()->route('orders.index')->with('error', 'Order not found.');
        }

        return view('orders.show', compact('order'));
    }
}
