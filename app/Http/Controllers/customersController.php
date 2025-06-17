<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\CustomerRepository;
use Illuminate\Http\Request;
use Flash;

class CustomersController extends AppBaseController
{
    /** @var CustomerRepository $customersRepository*/
    private $customersRepository;

    public function __construct(CustomerRepository $customersRepo)
    {
        $this->customersRepository = $customersRepo;
    }

    /**
     * Display a listing of the customers.
     */
    public function index(Request $request)
    {
        $customers = $this->customersRepository->paginate(10);

        return view('customers.index')
            ->with('customers', $customers);
    }

    /**
     * Show the form for creating a new customers.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created customers in storage.
     */
    public function store(CreateCustomerRequest $request)
    {
        $input = $request->all();

        $customers = $this->customersRepository->create($input);

        Flash::success('Customers saved successfully.');

        return redirect(route('customers.index'));
    }

    /**
     * Display the specified customers.
     */
    public function show($id)
    {
        $customers = $this->customersRepository->find($id);

        if (empty($customers)) {
            Flash::error('Customers not found');

            return redirect(route('customers.index'));
        }

        return view('customers.show')->with('customers', $customers);
    }

    /**
     * Show the form for editing the specified customers.
     */
    public function edit($id)
    {
        $customers = $this->customersRepository->find($id);

        if (empty($customers)) {
            Flash::error('Customers not found');

            return redirect(route('customers.index'));
        }

        return view('customers.edit')->with('customers', $customers);
    }

    /**
     * Update the specified customers in storage.
     */
    public function update($id, UpdateCustomerRequest $request)
    {
        $customers = $this->customersRepository->find($id);

        if (empty($customers)) {
            Flash::error('Customers not found');

            return redirect(route('customers.index'));
        }

        $customers = $this->customersRepository->update($request->all(), $id);

        Flash::success('Customers updated successfully.');

        return redirect(route('customers.index'));
    }

    /**
     * Remove the specified customers from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $customers = $this->customersRepository->find($id);

        if (empty($customers)) {
            Flash::error('Customers not found');

            return redirect(route('customers.index'));
        }

        $this->customersRepository->delete($id);

        Flash::success('Customers deleted successfully.');

        return redirect(route('customers.index'));
    }
}
