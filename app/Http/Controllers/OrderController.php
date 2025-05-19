<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        return Order::with('items')->get();
    }

    public function store(Request $request) {
        $order = Order::create($request->only(['user_id', 'total_price', 'status', 'delivery_address']));
        foreach ($request->items as $item) {
            $order->items()->create($item);
        }
        return $order->load('items');
    }

    public function show($id) {
        return Order::with('items')->findOrFail($id);
    }

    public function update(Request $request, $id) {
        $order = Order::findOrFail($id);
        $order->update($request->all());
        return $order;
    }

    public function destroy($id) {
        Order::destroy($id);
        return response()->noContent();
    }
}
