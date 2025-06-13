<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        // return view('home');
        $topSelling = DB::select('SELECT * FROM vw_top_selling_product');
        $downSelling = DB::select('SELECT * FROM vw_lowest_selling_product');

        return view('home', compact('topSelling','downSelling'));
    }
}
