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
        return view('Dish.index', compact('dishes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $dishes = new Dish();
        return view('dishes.create', compact('dish'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-validate([
            'name' => 'required',
            'price' => 'required',
            'prep time in minutes' => 'required',
        ]);
        Dish::create($request->all());
        return redirect()->route('dishes.index')->with('message', 'Dish added sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Dish $dish)
    {
        $dish = Dish::find($id);
        return view('dishes.show', compact('dish'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dish $dish)
    {
        $dish = Dish::find($id);
        $dishes = Dish::orderBy('name')->pluck('name', 'id')->prepend('All Dishes', '');
        return view('dishes.edit', compact('dish'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dish $dish)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'prep time in minutes' => 'required',
        ]);
        $dish = Dish::find($id);
        $dish->update($request->all());
        return redirect()->route('dishes.index')->with('message', 'Dish updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dish $dish)
    {
        $dish = Dish::find($id);
        $dish->delete();
        return redirect()->route('dishes.index')->with('message', 'Dish deleted successfully');
    }
}
