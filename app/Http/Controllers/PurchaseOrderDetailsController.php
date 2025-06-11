<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePurchaseOrderDetailsRequest;
use App\Http\Requests\UpdatePurchaseOrderDetailsRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PurchaseOrderDetailsRepository;
use Illuminate\Http\Request;
use Flash;

class PurchaseOrderDetailsController extends AppBaseController
{
    /** @var PurchaseOrderDetailsRepository $purchaseOrderDetailsRepository*/
    private $purchaseOrderDetailsRepository;

    public function __construct(PurchaseOrderDetailsRepository $purchaseOrderDetailsRepo)
    {
        $this->purchaseOrderDetailsRepository = $purchaseOrderDetailsRepo;
    }

    /**
     * Display a listing of the purchase-order-details.
     */
    public function index(Request $request)
    {
        $purchaseOrderDetails = $this->purchaseOrderDetailsRepository->paginate(10);

        return view('purchase_order_details.index')
            ->with('purchaseOrderDetails', $purchaseOrderDetails);
    }

    /**
     * Show the form for creating a new purchase-order-details.
     */
    public function create()
    {
        return view('purchase_order_details.create');
    }

    /**
     * Store a newly created PurchaseOrderDetails in storage.
     */
    public function store(CreatePurchaseOrderDetailsRequest $request)
    {
        $input = $request->all();

        $purchaseOrderDetails = $this->purchaseOrderDetailsRepository->create($input);

        Flash::success('Purchase Order Details saved successfully.');

        return redirect(route('purchase-order-details.index'));
    }

    /**
     * Display the specified purchase-order-details.
     */
    public function show($id)
    {
        $purchaseOrderDetails = $this->purchaseOrderDetailsRepository->find($id);

        if (empty($purchaseOrderDetails)) {
            Flash::error('Purchase Order Details not found');

            return redirect(route('purchase-order-details.index'));
        }

        return view('purchase_order_details.show')->with('purchaseOrderDetails', $purchaseOrderDetails);
    }

    /**
     * Show the form for editing the specified purchase-order-details.
     */
    public function edit($id)
    {
        $purchaseOrderDetails = $this->purchaseOrderDetailsRepository->find($id);

        if (empty($purchaseOrderDetails)) {
            Flash::error('Purchase Order Details not found');

            return redirect(route('purchase-order-details.index'));
        }

        return view('purchase_order_details.edit')->with('purchaseOrderDetails', $purchaseOrderDetails);
    }

    /**
     * Update the specified PurchaseOrderDetails in storage.
     */
    public function update($id, UpdatePurchaseOrderDetailsRequest $request)
    {
        $purchaseOrderDetails = $this->purchaseOrderDetailsRepository->find($id);

        if (empty($purchaseOrderDetails)) {
            Flash::error('Purchase Order Details not found');

            return redirect(route('purchase-order-details.index'));
        }

        $purchaseOrderDetails = $this->purchaseOrderDetailsRepository->update($request->all(), $id);

        Flash::success('Purchase Order Details updated successfully.');

        return redirect(route('purchase-order-details.index'));
    }

    /**
     * Remove the specified PurchaseOrderDetails from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $purchaseOrderDetails = $this->purchaseOrderDetailsRepository->find($id);

        if (empty($purchaseOrderDetails)) {
            Flash::error('Purchase Order Details not found');

            return redirect(route('purchase-order-details.index'));
        }

        $this->purchaseOrderDetailsRepository->delete($id);

        Flash::success('Purchase Order Details deleted successfully.');

        return redirect(route('purchase-order-details.index'));
    }
}
