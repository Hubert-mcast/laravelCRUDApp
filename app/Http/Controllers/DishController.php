<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dishes = Dish::all();
        return view('dishes.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dish = new Dish();
        return view('dishes.create', compact('dishes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        Dish::create($request->all());
        return redirect()->route('dishes.index')->with('message', 'Dish added sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $dish = Dish::find($id);
        return view('dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $dish = Dish::find($id);
        $dishes = Dish::orderBy('name')->pluck('name', 'id')->prepend('All Dishes', '');
        return view('dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        $dish = Dish::find($id);
        $dish->update($request->all());
        return redirect()->route('dishes.index')->with('message', 'Dish updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dish = Dish::find($id);
        $dish->delete();
        return redirect()->route('dishes.index')->with('message', 'Dish deleted successfully');
    }
}
