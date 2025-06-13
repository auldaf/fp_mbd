<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerOrdersController extends Controller
{
    public function index()
    {
        return view('customer_orders.index');
    }

    public function show(Request $request)
    {
        $customerId = $request->input('customer_id');
        $orders = [];

        if ($customerId) {
            $orders = DB::select('CALL get_customer_orders(?)', [$customerId]);
        }

        return view('customer_orders.index', compact('orders', 'customerId'));
    }
}
