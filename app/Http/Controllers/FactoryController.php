<?php

namespace App\Http\Controllers;

use App\Models\Factory;
use App\Http\Requests\FactoryStoreRequest;
use App\Http\Requests\FactoryUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $factories = Factory::paginate(10);

        return view('factories.index', ['factories' => $factories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FactoryStoreRequest $request)
    {
        $factory = new Factory;
        $validated = $request->validated();

        $factory->fill($validated);
        $factory->save();

        return $factory;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FactoryUpdateRequest $request, string $id)
    {
        $factory = Factory::findOrFail($id);
        $validated = $request->validated();

        $factory->fill($validated);
        $factory->save();

        return $factory;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $factory = Factory::findOrFail($id);

        $factory->delete();
    }
}
