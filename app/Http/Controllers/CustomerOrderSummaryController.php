<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerOrderSummaryController extends Controller
{
    public function index()
    {
        $customerOrderSummary = DB::select('select * from vw_customer_order_summary');
        return view('customer_order_summary.index', compact('customerOrderSummary'));
    }
}
