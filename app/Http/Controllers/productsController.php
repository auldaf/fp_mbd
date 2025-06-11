<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductsRequest;
use App\Http\Requests\UpdateproductsRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\productsRepository;
use Illuminate\Http\Request;
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
        $products = $this->productsRepository->paginate(10);
        return view('products.index')
            ->with('products', $products);
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
}
