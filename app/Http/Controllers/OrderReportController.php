<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderReportController extends Controller
{
    public function orderReport()
    {
        $reportData = DB::select("
            select
                orders.id           as order_id,
                customers.name      as customer_name,
                employees.name      as employee_name,
                orders.order_date,
                orders.status
            from
                orders
            join
                customers on orders.customer_id = customers.id
            join
                employees on orders.employee_id = employees.id;
        ");

        return view('orders.orderreport')->with('reportData', $reportData);
    }
}
