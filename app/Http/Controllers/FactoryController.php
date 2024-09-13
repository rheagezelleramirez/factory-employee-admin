<?php

namespace App\Http\Controllers;

use App\Models\Factory;
use App\Http\Requests\FactoryStoreRequest;
use App\Http\Requests\FactoryUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class FactoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $page_limit = 10;

        $factories = Factory::paginate($page_limit);

        return view('factories.index', ['factories' => $factories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('factories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FactoryStoreRequest $request): RedirectResponse
    {
        $factory = new Factory;

        $factory->fill($request->validated());
        $factory->save();

        return Redirect::route('factories.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $factory = Factory::findOrFail($id);

        return view('factories.edit', ['factory' => $factory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(FactoryUpdateRequest $request, string $id): RedirectResponse
    {
        $factory = Factory::findOrFail($id);

        $factory->fill($request->validated());
        $factory->save();

        return Redirect::route('factories.edit', $factory->id)
            ->with('status', 'factory-updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $factory = Factory::findOrFail($id);

        $factory->delete();

        return Redirect::route('factories.index');
    }
}
