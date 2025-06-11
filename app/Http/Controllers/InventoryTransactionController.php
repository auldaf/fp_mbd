<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateInventoryTransactionRequest;
use App\Http\Requests\UpdateInventoryTransactionRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\InventoryTransactionRepository;
use Illuminate\Http\Request;
use Flash;

class InventoryTransactionController extends AppBaseController
{
    /** @var InventoryTransactionRepository $inventoryTransactionRepository*/
    private $inventoryTransactionRepository;

    public function __construct(InventoryTransactionRepository $inventoryTransactionRepo)
    {
        $this->inventoryTransactionRepository = $inventoryTransactionRepo;
    }

    /**
     * Display a listing of the InventoryTransaction.
     */
    public function index(Request $request)
    {
        $inventoryTransactions = $this->inventoryTransactionRepository->paginate(10);

        return view('inventory_transactions.index')
            ->with('inventoryTransactions', $inventoryTransactions);
    }

    /**
     * Show the form for creating a new InventoryTransaction.
     */
    public function create()
    {
        return view('inventory_transactions.create');
    }

    /**
     * Store a newly created InventoryTransaction in storage.
     */
    public function store(CreateInventoryTransactionRequest $request)
    {
        $input = $request->all();

        $inventoryTransaction = $this->inventoryTransactionRepository->create($input);

        Flash::success('Inventory Transaction saved successfully.');

        return redirect(route('inventory-transactionsindex'));
    }

    /**
     * Display the specified InventoryTransaction.
     */
    public function show($id)
    {
        $inventoryTransaction = $this->inventoryTransactionRepository->find($id);

        if (empty($inventoryTransaction)) {
            Flash::error('Inventory Transaction not found');

            return redirect(route('inventory-transactionsindex'));
        }

        return view('inventory_transactions.show')->with('inventoryTransaction', $inventoryTransaction);
    }

    /**
     * Show the form for editing the specified InventoryTransaction.
     */
    public function edit($id)
    {
        $inventoryTransaction = $this->inventoryTransactionRepository->find($id);

        if (empty($inventoryTransaction)) {
            Flash::error('Inventory Transaction not found');

            return redirect(route('inventory-transactionsindex'));
        }

        return view('inventory_transactions.edit')->with('inventoryTransaction', $inventoryTransaction);
    }

    /**
     * Update the specified InventoryTransaction in storage.
     */
    public function update($id, UpdateInventoryTransactionRequest $request)
    {
        $inventoryTransaction = $this->inventoryTransactionRepository->find($id);

        if (empty($inventoryTransaction)) {
            Flash::error('Inventory Transaction not found');

            return redirect(route('inventory-transactionsindex'));
        }

        $inventoryTransaction = $this->inventoryTransactionRepository->update($request->all(), $id);

        Flash::success('Inventory Transaction updated successfully.');

        return redirect(route('inventory-transactionsindex'));
    }

    /**
     * Remove the specified InventoryTransaction from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inventoryTransaction = $this->inventoryTransactionRepository->find($id);

        if (empty($inventoryTransaction)) {
            Flash::error('Inventory Transaction not found');

            return redirect(route('inventory-transactionsindex'));
        }

        $this->inventoryTransactionRepository->delete($id);

        Flash::success('Inventory Transaction deleted successfully.');

        return redirect(route('inventory-transactionsindex'));
    }
}
