<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderDetailsRequest;
use App\Http\Requests\UpdateOrderDetailsRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\OrderDetailsRepository;
use Illuminate\Http\Request;
use Flash;

class OrderDetailsController extends AppBaseController
{
    /** @var OrderDetailsRepository $orderDetailsRepository*/
    private $orderDetailsRepository;

    public function __construct(OrderDetailsRepository $orderDetailsRepo)
    {
        $this->orderDetailsRepository = $orderDetailsRepo;
    }

    /**
     * Display a listing of the order-details.
     */
    public function index(Request $request)
    {
        $orderDetails = $this->orderDetailsRepository->paginate(10);

        return view('order_details.index')
            ->with('orderDetails', $orderDetails);
    }

    /**
     * Show the form for creating a new order-details.
     */
    public function create()
    {
        return view('order_details.create');
    }

    /**
     * Store a newly created OrderDetails in storage.
     */
    public function store(CreateOrderDetailsRequest $request)
    {
        $input = $request->all();

        $orderDetails = $this->orderDetailsRepository->create($input);

        Flash::success('Order Details saved successfully.');

        return redirect(route('order-details.index'));
    }

    /**
     * Display the specified order-details.
     */
    public function show($id)
    {
        $orderDetails = $this->orderDetailsRepository->find($id);

        if (empty($orderDetails)) {
            Flash::error('Order Details not found');

            return redirect(route('order-details.index'));
        }

        return view('order_details.show')->with('orderDetails', $orderDetails);
    }

    /**
     * Show the form for editing the specified order-details.
     */
    public function edit($id)
    {
        $orderDetails = $this->orderDetailsRepository->find($id);

        if (empty($orderDetails)) {
            Flash::error('Order Details not found');

            return redirect(route('order-details.index'));
        }

        return view('order_details.edit')->with('orderDetails', $orderDetails);
    }

    /**
     * Update the specified OrderDetails in storage.
     */
    public function update($id, UpdateOrderDetailsRequest $request)
    {
        $orderDetails = $this->orderDetailsRepository->find($id);

        if (empty($orderDetails)) {
            Flash::error('Order Details not found');

            return redirect(route('order-details.index'));
        }

        $orderDetails = $this->orderDetailsRepository->update($request->all(), $id);

        Flash::success('Order Details updated successfully.');

        return redirect(route('order-details.index'));
    }

    /**
     * Remove the specified OrderDetails from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $orderDetails = $this->orderDetailsRepository->find($id);

        if (empty($orderDetails)) {
            Flash::error('Order Details not found');

            return redirect(route('order-details.index'));
        }

        $this->orderDetailsRepository->delete($id);

        Flash::success('Order Details deleted successfully.');

        return redirect(route('order-details.index'));
    }
}
