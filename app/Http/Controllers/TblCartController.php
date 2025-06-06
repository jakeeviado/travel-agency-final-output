<?php

namespace App\Http\Controllers;

use App\Models\tbl_cart;
use Illuminate\Http\Request;

class TblCartController extends Controller
{
    public function index()
    {
        $cartItems = tbl_cart::all();
        return view('cart.index', compact('cartItems'));
    }
    public function add(Request $request)
    {
        $cartItem = new tbl_cart();
        $cartItem->product_id = $request->input('product_id');
        $cartItem->quantity = $request->input('quantity');
        $cartItem->save();

        return redirect()->route('cart')->with('success', 'Item added to cart successfully.');
    }
    public function update(Request $request, $id)
    {
        $cartItem = tbl_cart::findOrFail($id);
        $cartItem->quantity = $request->input('quantity');
        $cartItem->save();

        return redirect()->route('cart')->with('success', 'Cart item updated successfully.');
    }
    public function remove($id)
    {
        $cartItem = tbl_cart::findOrFail($id);
        $cartItem->delete();

        return redirect()->route('cart')->with('success', 'Item removed from cart successfully.');
    }
}
