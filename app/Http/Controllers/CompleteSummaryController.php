<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompleteSummaryController extends Controller
{
    public function index()
    {
        $completeSummary = DB::select("
            select
                c.name as customer_name,
                e.name as employee_info,
                s.company as shipper_company,
                date_format(o.order_date, '%y-%m-%d %h:%i') as formatted_order_date,
                p.product_name,
                od.quantity,
                od.unit_price,
                (od.quantity * od.unit_price) as item_total,
                o.shipping_fee,
                o.status as order_status
            from
                customers c
            join
                orders o on c.id = o.customer_id
            join
                employees e on o.employee_id = e.id
            join
                shippers s on o.shipper_id = s.id
            join
                order_details od on o.id = od.order_id
            join
                products p on od.product_id = p.id
            order by
                o.order_date desc, c.name;
        ");
        return view('complete_summary.index', compact('completeSummary'));
    }
}
