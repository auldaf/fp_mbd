<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSuppliersRequest;
use App\Http\Requests\UpdateSuppliersRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\SuppliersRepository;
use Illuminate\Http\Request;
use Flash;

class SuppliersController extends AppBaseController
{
    /** @var SuppliersRepository $suppliersRepository*/
    private $suppliersRepository;


    public function __construct(SuppliersRepository $suppliersRepo)
    {
        $this->suppliersRepository = $suppliersRepo;
    }

    /**
     * Display a listing of the Suppliers.
     */
    public function index(Request $request)
    {
        $suppliers = $this->suppliersRepository->paginate(10);
        // dd($suppliers);

        return view('suppliers.index')
            ->with('suppliers', $suppliers);
    }

    /**
     * Show the form for creating a new Suppliers.
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created Suppliers in storage.
     */
    public function store(CreateSuppliersRequest $request)
    {
        $input = $request->all();

        $suppliers = $this->suppliersRepository->create($input);

        Flash::success('Suppliers saved successfully.');

        return redirect(route('suppliers.index'));
    }

    /**
     * Display the specified Suppliers.
     */
    public function show($id)
    {
        $suppliers = $this->suppliersRepository->find($id);

        if (empty($suppliers)) {
            Flash::error('Suppliers not found');

            return redirect(route('suppliers.index'));
        }

        return view('suppliers.show')->with('suppliers', $suppliers);
    }

    /**
     * Show the form for editing the specified Suppliers.
     */
    public function edit($id)
    {
        $suppliers = $this->suppliersRepository->find($id);

        if (empty($suppliers)) {
            Flash::error('Suppliers not found');

            return redirect(route('suppliers.index'));
        }

        return view('suppliers.edit')->with('suppliers', $suppliers);
    }

    /**
     * Update the specified Suppliers in storage.
     */
    public function update($id, UpdateSuppliersRequest $request)
    {
        $suppliers = $this->suppliersRepository->find($id);

        if (empty($suppliers)) {
            Flash::error('Suppliers not found');

            return redirect(route('suppliers.index'));
        }

        $suppliers = $this->suppliersRepository->update($request->all(), $id);

        Flash::success('Suppliers updated successfully.');

        return redirect(route('suppliers.index'));
    }

    /**
     * Remove the specified Suppliers from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $suppliers = $this->suppliersRepository->find($id);

        if (empty($suppliers)) {
            Flash::error('Suppliers not found');

            return redirect(route('suppliers.index'));
        }

        $this->suppliersRepository->delete($id);

        Flash::success('Suppliers deleted successfully.');

        return redirect(route('suppliers.index'));
    }
}
