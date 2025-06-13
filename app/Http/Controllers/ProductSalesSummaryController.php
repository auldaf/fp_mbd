<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductSalesSummaryController extends Controller
{
    public function index()
    {
        $productSalesSummary = DB::select('select * from wv_product_sales_summary');
        return view('product_sales_summary.index', compact('productSalesSummary'));
    }
}
