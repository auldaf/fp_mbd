<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsByCategoryController extends Controller
{
    public function index()
    {
        return view('products_by_category.index');
    }

    public function show(Request $request)
    {
        $categoryName = $request->input('category_name');
        $products = [];

        if ($categoryName) {
            $products = DB::select('CALL get_products_by_category(?)', [$categoryName]);
        }

        return view('products_by_category.index', compact('products', 'categoryName'));
    }
}
