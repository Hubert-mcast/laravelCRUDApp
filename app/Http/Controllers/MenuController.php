<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Dish;
use App\Models\Wine;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = Menu::all();
        return view('menus.index', compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menus = new Menu();
        $dishes = Dish::orderBy('name')->pluck('name', 'id')->prepend('All Dishes', '');
        $wines = Wine::orderBy('name')->pluck('name', 'id')->prepend('All Wines', '');
        return view('menus.create', compact('menu', 'dish', 'wine'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request-validate([
            'name' => 'required',
            'appetizer' => 'required|exists:dishes,id',
            'main course' => 'required|exists:dishes,id',
            'desert' => 'required|exists:dishes,id',
            'wine pairing' => 'nullable|exists:wines,id',
        ]);
        Menu::create($request->all());
        return redirect()->route('menus.index')->with('message', 'Menu added sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        $menu = Menu::find($id);
        return view('menus.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        $menu = Menu::find($id);
        $menus = Menu::orderBy('name')->pluck('name', 'id')->prepend('All Menus', '');
        return view('menus.edit', compact('menu', 'dish', 'wine'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'name' => 'required',
            'appetizer' => 'required|exists:dishes,id',
            'main course' => 'required|exists:dishes,id',
            'desert' => 'required|exists:dishes,id',
            'wine pairing' => 'required|exists:wines,id',
        ]);
        $menu = Menu::find($id);
        $menu->update($request->all());
        return redirect()->route('menus.index')->with('message', 'Menu updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->route('menus.index')->with('message', 'Menu deleted successfully');
    }
}
