<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Http\Requests\OrderRequest;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    /**
     * Display a listing of the orders.
     */
    public function index()
    {
        $orders = Order::with('customer')->get();
        return response()->json($orders);
    }

    /**
     * Store a newly created order.
     */
    public function store(OrderRequest $request)
    {
        // validate and store order
        $order = Order::create($request->validated());
        return response()->json($order, Response::HTTP_CREATED);
    }

    /**
     * Display the specified order.
     */
    public function show(Order $order)
    {
        $order->load('customer');
        return response()->json($order);
    }

    /**
     * Update the specified order.
     */
    public function update(OrderRequest $request, Order $order)
    {
        // validate and update order
        $validated = $request->validated(); 
        $order->update($validated);
        return response()->json($order);
    }

    /**
     * Remove the specified order.
     */
    public function destroy(Order $order)
    {
        // delete order
        $order->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
    // Return total revenue and number of orders per status
    public function stats()
    {
        // group orders by status and calculate count and revenue
        $stats = Order::selectRaw('status, COUNT(*) as count, SUM(price * quantity) as revenue')
            ->groupBy('status')
            ->get();
        return response()->json($stats);
    }

} 