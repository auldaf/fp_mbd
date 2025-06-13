<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductsRequest;
use App\Http\Requests\UpdateproductsRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\productsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Flash;

class productsController extends AppBaseController
{
    /** @var productsRepository $productsRepository*/
    private $productsRepository;

    public function __construct(productsRepository $productsRepo)
    {
        $this->productsRepository = $productsRepo;
    }

    /**
     * Display a listing of the products.
     */
    public function index(Request $request)
    {
  
        // $products = $this->productsRepository->paginate(10);
        // $reportData = DB::select("
        //     SELECT p.product_name,
        //         SUM(od.quantity) AS total_sold
        //     FROM order_details od
        //     JOIN products p ON od.product_id = p.id
        //     GROUP BY p.product_name
        //     HAVING SUM(od.quantity) > 0
        // ");
       $products = DB::table('products as p')
        ->leftJoin('order_details as od', 'p.id', '=', 'od.product_id')
        ->leftJoin(DB::raw('
        (SELECT id as pid, get_last_date_order(id) as last_order_date FROM products) as dates
    '), 'p.id', '=', 'dates.pid')
        ->select(
            'p.id',
            'p.product_code',
            'p.product_name',
            'p.description',
            'p.list_price',
            'p.product_category',
            'p.product_image',
            'p.image_mime_type',
            DB::raw('SUM(od.quantity) as total_sold'),
            'dates.last_order_date'

            // DB::raw('get_last_date_order(p.id) as last_order_date')
        )
        ->groupBy(
            'p.id',
            'p.product_code',
            'p.product_name',
            'p.description',
            'p.list_price',
            'p.product_category',
            'p.product_image',
            'p.image_mime_type',
            'dates.last_order_date'

        )
        ->paginate(10);

         $reportData = DB::select("
            SELECT p.id, p.product_name
            FROM products p
            LEFT JOIN order_details od ON p.id = od.product_id
            WHERE od.product_id IS NULL;

        ");

        $bulanList = collect(range(5, 0))->map(function ($i) {
            return now()->subMonths($i)->format('Y-m');
        })->toArray();

        $selects = [
            'p.id',
            'p.product_name',
        ];

        foreach ($bulanList as $bulan) {
            $alias = 'sales_' . str_replace('-', '_', $bulan); // contoh: sales_2025_01
            $selects[] = DB::raw("get_monthly_sales(p.id, '$bulan') as $alias");
        }

        $month = DB::table('products as p')
            ->select($selects)
            ->get();




           
            return view('products.index', compact('products', 'reportData','month','bulanList'));
    }

    /**
     * Show the form for creating a new products.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created products in storage.
     */
    public function store(CreateproductsRequest $request)
    {
        $input = $request->all();

            if ($request->hasFile('product_image')) {
                $image = $request->file('product_image');

                // Validasi gambar (pastikan juga ada di CreateproductsRequest)
                $request->validate([
                    'product_image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5120',
                ]);

                // Simpan isi file (binary) ke DB
                $input['product_image'] = file_get_contents($image->getRealPath());

                // Simpan tipe mime-nya untuk kebutuhan <img>
                $input['image_mime_type'] = $image->getMimeType();
            }

        $products = $this->productsRepository->create($input);

        Flash::success('Products saved successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Display the specified products.
     */
    public function show($id)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        return view('products.show')->with('products', $products);
    }

    /**
     * Show the form for editing the specified products.
     */
    public function edit($id)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        return view('products.edit')->with('products', $products);
    }

    /**
     * Update the specified products in storage.
     */
    public function update($id, UpdateproductsRequest $request)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

         $validatedData = $request->validated();

            if ($request->hasFile('product_image')) {
                $image = $request->file('product_image');

                $validatedData['product_image'] = file_get_contents($image->getRealPath());
                $validatedData['image_mime_type'] = $image->getMimeType();
            }



        $products = $this->productsRepository->update($validatedData, $id);


        Flash::success('Products updated successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified products from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $products = $this->productsRepository->find($id);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        $this->productsRepository->delete($id);

        Flash::success('Products deleted successfully.');

        return redirect(route('products.index'));
    }

   public function penjualanNull()
    {
        $reportData = DB::select("
            SELECT p.id, p.product_name
            FROM products p
            LEFT JOIN order_details od ON p.id = od.product_id
            WHERE od.product_id IS NULL;

        ");

        return view('products.index', compact('reportData'));
    }
}
