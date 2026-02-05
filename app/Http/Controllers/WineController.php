<?php

namespace App\Http\Controllers;

use App\Models\Wine;
use Illuminate\Http\Request;

class WineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wines = Wine::all();
        return view('wines.index', compact('wines'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $wines = new Wine();
        return view('wines.create', compact('wines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'colour' => 'required',
        ]);
        Wine::create($request->all());
        return redirect()->route('wines.index')->with('message', 'Wine added sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $wine = Wine::find($id);
        return view('wines.show', compact('wines'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $wine = Wine::find($id);
        return view('wines.edit', compact('wine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'colour' => 'required',
        ]);
        $wine = Wine::find($id);
        $wine->update($request->all());
        return redirect()->route('wines.index')->with('message', 'Wine updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $wine = Wine::find($id);
        $wine->delete();
        return redirect()->route('wines.index')->with('message', 'Wine deleted successfully');
    }
}
