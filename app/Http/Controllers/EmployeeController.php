<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmployeeStoreRequest;
use App\Http\Requests\EmployeeUpdateRequest;
use App\Models\Employee;
use App\Models\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $limit = 10;

        $employees = Employee::paginate($limit);

        return view('employees.index', ['employees' => $employees]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $factories = Factory::all();

        return view('employees.create', ['factories' => $factories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(EmployeeStoreRequest $request): RedirectResponse
    {
        $employee = new Employee;

        $validated = $request->validated();

        $employee->fill($validated);
        $employee->save();

        return Redirect::route('employees.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $employee = Employee::findOrFail($id);

        $factories = Factory::all();

        $data = [
            'employee' => $employee,
            'factories' => $factories,
        ];

        return view('employees.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EmployeeUpdateRequest $request, string $id): RedirectResponse
    {
        $employee = Employee::findOrFail($id);

        $validated = $request->validated();

        $employee->fill($validated);
        $employee->save();

        return Redirect::route('employees.edit', $employee->id)
            ->with('status', 'employee-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $employee = Employee::findOrFail($id);

        $employee->delete();

        return Redirect::route('employees.index');
    }
}
