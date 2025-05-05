<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function add($id)
    {
        $cart = session()->get('cart', []);

        if (!in_array($id, $cart)) {
            $cart[] = $id;
            session(['cart' => $cart]);
        }

        return redirect()->back()->with('success', 'Produkt dodany do koszyka!');
    }

    public function index()
    {
        $cart = session()->get('cart', []);
        $products = Product::whereIn('id', $cart)->get();
        $total = $products->sum('cena');

        return view('cart.index', compact('products', 'total'));
    }
}
