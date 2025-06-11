<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInvoicesRequest;
use App\Http\Requests\UpdateInvoicesRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\InvoicesRepository;
use Illuminate\Http\Request;
use Flash;

class InvoicesController extends AppBaseController
{
    /** @var InvoicesRepository $invoicesRepository*/
    private $invoicesRepository;

    public function __construct(InvoicesRepository $invoicesRepo)
    {
        $this->invoicesRepository = $invoicesRepo;
    }

    /**
     * Display a listing of the Invoices.
     */
    public function index(Request $request)
    {
        $invoices = $this->invoicesRepository->paginate(10);

        return view('invoices.index')
            ->with('invoices', $invoices);
    }

    /**
     * Show the form for creating a new Invoices.
     */
    public function create()
    {
        return view('invoices.create');
    }

    /**
     * Store a newly created Invoices in storage.
     */
    public function store(CreateInvoicesRequest $request)
    {
        $input = $request->all();

        $invoices = $this->invoicesRepository->create($input);

        Flash::success('Invoices saved successfully.');

        return redirect(route('invoices.index'));
    }

    /**
     * Display the specified Invoices.
     */
    public function show($id)
    {
        $invoices = $this->invoicesRepository->find($id);

        if (empty($invoices)) {
            Flash::error('Invoices not found');

            return redirect(route('invoices.index'));
        }

        return view('invoices.show')->with('invoices', $invoices);
    }

    /**
     * Show the form for editing the specified Invoices.
     */
    public function edit($id)
    {
        $invoices = $this->invoicesRepository->find($id);

        if (empty($invoices)) {
            Flash::error('Invoices not found');

            return redirect(route('invoices.index'));
        }

        return view('invoices.edit')->with('invoices', $invoices);
    }

    /**
     * Update the specified Invoices in storage.
     */
    public function update($id, UpdateInvoicesRequest $request)
    {
        $invoices = $this->invoicesRepository->find($id);

        if (empty($invoices)) {
            Flash::error('Invoices not found');

            return redirect(route('invoices.index'));
        }

        $invoices = $this->invoicesRepository->update($request->all(), $id);

        Flash::success('Invoices updated successfully.');

        return redirect(route('invoices.index'));
    }

    /**
     * Remove the specified Invoices from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $invoices = $this->invoicesRepository->find($id);

        if (empty($invoices)) {
            Flash::error('Invoices not found');

            return redirect(route('invoices.index'));
        }

        $this->invoicesRepository->delete($id);

        Flash::success('Invoices deleted successfully.');

        return redirect(route('invoices.index'));
    }
}
