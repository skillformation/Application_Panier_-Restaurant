<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart_item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        $cart = session()->get('cart', []);

        $product = Product::find($request->product_id);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                'product' => $product,
                'quantity' => 1,
                'unit_price' => $product->price,
            ];
        }

        session(['cart' => $cart]);

        // Prépare la structure attendue par le JS
        $items = [];
        foreach ($cart as $id => $item) {
            $items[] = [
                'id' => $id,
                'product' => [
                    'name' => $item['product']->name,
                    'image' => $item['product']->image ?? null,
                ],
                'quantity' => $item['quantity'],
                'unit_price' => $item['unit_price'],
            ];
        }

        return response()->json(['items' => $items]);
    }
}