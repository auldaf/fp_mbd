<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateShippersRequest;
use App\Http\Requests\UpdateShippersRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\ShippersRepository;
use Illuminate\Http\Request;
use Flash;

class ShippersController extends AppBaseController
{
    /** @var ShippersRepository $shippersRepository*/
    private $shippersRepository;

    public function __construct(ShippersRepository $shippersRepo)
    {
        $this->shippersRepository = $shippersRepo;
    }

    /**
     * Display a listing of the Shippers.
     */
    public function index(Request $request)
    {
        $shippers = $this->shippersRepository->paginate(10);

        return view('shippers.index')
            ->with('shippers', $shippers);
    }

    /**
     * Show the form for creating a new Shippers.
     */
    public function create()
    {
        return view('shippers.create');
    }

    /**
     * Store a newly created Shippers in storage.
     */
    public function store(CreateShippersRequest $request)
    {
        $input = $request->all();

        $shippers = $this->shippersRepository->create($input);

        Flash::success('Shippers saved successfully.');

        return redirect(route('shippers.index'));
    }

    /**
     * Display the specified Shippers.
     */
    public function show($id)
    {
        $shippers = $this->shippersRepository->find($id);

        if (empty($shippers)) {
            Flash::error('Shippers not found');

            return redirect(route('shippers.index'));
        }

        return view('shippers.show')->with('shippers', $shippers);
    }

    /**
     * Show the form for editing the specified Shippers.
     */
    public function edit($id)
    {
        $shippers = $this->shippersRepository->find($id);

        if (empty($shippers)) {
            Flash::error('Shippers not found');

            return redirect(route('shippers.index'));
        }

        return view('shippers.edit')->with('shippers', $shippers);
    }

    /**
     * Update the specified Shippers in storage.
     */
    public function update($id, UpdateShippersRequest $request)
    {
        $shippers = $this->shippersRepository->find($id);

        if (empty($shippers)) {
            Flash::error('Shippers not found');

            return redirect(route('shippers.index'));
        }

        $shippers = $this->shippersRepository->update($request->all(), $id);

        Flash::success('Shippers updated successfully.');

        return redirect(route('shippers.index'));
    }

    /**
     * Remove the specified Shippers from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $shippers = $this->shippersRepository->find($id);

        if (empty($shippers)) {
            Flash::error('Shippers not found');

            return redirect(route('shippers.index'));
        }

        $this->shippersRepository->delete($id);

        Flash::success('Shippers deleted successfully.');

        return redirect(route('shippers.index'));
    }
}
