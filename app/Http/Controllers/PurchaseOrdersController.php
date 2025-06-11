<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePurchaseOrdersRequest;
use App\Http\Requests\UpdatePurchaseOrdersRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PurchaseOrdersRepository;
use Illuminate\Http\Request;
use Flash;

class PurchaseOrdersController extends AppBaseController
{
    /** @var PurchaseOrdersRepository $purchaseOrdersRepository*/
    private $purchaseOrdersRepository;

    public function __construct(PurchaseOrdersRepository $purchaseOrdersRepo)
    {
        $this->purchaseOrdersRepository = $purchaseOrdersRepo;
    }

    /**
     * Display a listing of the purchase-orders.
     */
    public function index(Request $request)
    {
        $purchaseOrders = $this->purchaseOrdersRepository->paginate(10);

        return view('purchase_orders.index')
            ->with('purchaseOrders', $purchaseOrders);
    }

    /**
     * Show the form for creating a new purchase-orders.
     */
    public function create()
    {
        return view('purchase_orders.create');
    }

    /**
     * Store a newly created PurchaseOrders in storage.
     */
    public function store(CreatePurchaseOrdersRequest $request)
    {
        $input = $request->all();

        $purchaseOrders = $this->purchaseOrdersRepository->create($input);

        Flash::success('Purchase Orders saved successfully.');

        return redirect(route('purchase-orders.index'));
    }

    /**
     * Display the specified purchase-orders.
     */
    public function show($id)
    {
        $purchaseOrders = $this->purchaseOrdersRepository->find($id);

        if (empty($purchaseOrders)) {
            Flash::error('Purchase Orders not found');

            return redirect(route('purchase-orders.index'));
        }

        return view('purchase_orders.show')->with('purchaseOrders', $purchaseOrders);
    }

    /**
     * Show the form for editing the specified purchase-orders.
     */
    public function edit($id)
    {
        $purchaseOrders = $this->purchaseOrdersRepository->find($id);

        if (empty($purchaseOrders)) {
            Flash::error('Purchase Orders not found');

            return redirect(route('purchase-orders.index'));
        }

        return view('purchase_orders.edit')->with('purchaseOrders', $purchaseOrders);
    }

    /**
     * Update the specified PurchaseOrders in storage.
     */
    public function update($id, UpdatePurchaseOrdersRequest $request)
    {
        $purchaseOrders = $this->purchaseOrdersRepository->find($id);

        if (empty($purchaseOrders)) {
            Flash::error('Purchase Orders not found');

            return redirect(route('purchase-orders.index'));
        }

        $purchaseOrders = $this->purchaseOrdersRepository->update($request->all(), $id);

        Flash::success('Purchase Orders updated successfully.');

        return redirect(route('purchase-orders.index'));
    }

    /**
     * Remove the specified PurchaseOrders from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $purchaseOrders = $this->purchaseOrdersRepository->find($id);

        if (empty($purchaseOrders)) {
            Flash::error('Purchase Orders not found');

            return redirect(route('purchase-orders.index'));
        }

        $this->purchaseOrdersRepository->delete($id);

        Flash::success('Purchase Orders deleted successfully.');

        return redirect(route('purchase-orders.index'));
    }
}
