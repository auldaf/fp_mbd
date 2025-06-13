<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateOrderDetailsRequest;
use App\Http\Requests\UpdateOrderDetailsRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\OrderDetailsRepository;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Database\QueryException;

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

        try {
            $orderDetails = $this->orderDetailsRepository->create($input);
            Flash::success('Order Details saved successfully.');
            return redirect(route('order-details.index'));
        } catch (QueryException $e) {
            // Check for the specific SQLSTATE and message
            if ($e->getCode() === '45000' && str_contains($e->getMessage(), 'Quantity must be a positive value')) {
                Flash::error('Error: Quantity must be a positive value.');
            } else {
                Flash::error('An unexpected database error occurred: ' . $e->getMessage());
            }
            return redirect()->back()->withInput();
        }
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
