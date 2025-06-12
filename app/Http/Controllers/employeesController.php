<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateemployeesRequest;
use App\Http\Requests\UpdateemployeesRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\employeesRepository;
use Illuminate\Http\Request;
use Flash;

class employeesController extends AppBaseController
{
    /** @var employeesRepository $employeesRepository*/
    private $employeesRepository;

    public function __construct(employeesRepository $employeesRepo)
    {
        $this->employeesRepository = $employeesRepo;
    }

    /**
     * Display a listing of the employees.
     */
    public function index(Request $request)
    {
        $employees = $this->employeesRepository->paginate(10);

        return view('employees.index')
            ->with('employees', $employees);
    }

    /**
     * Show the form for creating a new employees.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created employees in storage.
     */
    public function store(CreateemployeesRequest $request)
    {
        $input = $request->all();

        $employees = $this->employeesRepository->create($input);

        Flash::success('Employees saved successfully.');

        return redirect(route('employees.index'));
    }

    /**
     * Display the specified employees.
     */
    public function show($id)
    {
        $employees = $this->employeesRepository->find($id);

        if (empty($employees)) {
            Flash::error('Employees not found');

            return redirect(route('employees.index'));
        }

        return view('employees.show')->with('employees', $employees);
    }

    /**
     * Show the form for editing the specified employees.
     */
    public function edit($id)
    {
        $employees = $this->employeesRepository->find($id);

        if (empty($employees)) {
            Flash::error('Employees not found');

            return redirect(route('employees.index'));
        }

        return view('employees.edit')->with('employees', $employees);
    }

    /**
     * Update the specified employees in storage.
     */
    public function update($id, UpdateemployeesRequest $request)
    {
        $employees = $this->employeesRepository->find($id);

        if (empty($employees)) {
            Flash::error('Employees not found');

            return redirect(route('employees.index'));
        }

        $employees = $this->employeesRepository->update($request->all(), $id);

        Flash::success('Employees updated successfully.');

        return redirect(route('employees.index'));
    }

    /**
     * Remove the specified employees from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $employees = $this->employeesRepository->find($id);

        if (empty($employees)) {
            Flash::error('Employees not found');

            return redirect(route('employees.index'));
        }

        $this->employeesRepository->delete($id);

        Flash::success('Employees deleted successfully.');

        return redirect(route('employees.index'));
    }
}
