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
        return view('menus.create', compact('menus', 'dishes', 'wines'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'appetizer' => 'required|exists:dishes,id',
            'main_course' => 'required|exists:dishes,id',
            'dessert' => 'required|exists:dishes,id',
            'wine_pairing' => 'required|exists:wines,id',
        ]);
        Menu::create($request->all());
        return redirect()->route('menus.index')->with('message', 'Menu added sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $menu = Menu::find($id);
        return view('menus.show', compact('menu'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        $dishes = Dish::orderBy('name')->pluck('name', 'id')->prepend('All Dishes', '');
        $wines = Wine::orderBy('name')->pluck('name', 'id')->prepend('All Wines', '');
        return view('menus.edit', compact('menu', 'dishes', 'wines'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'appetizer' => 'required|exists:dishes,id',
            'main_course' => 'required|exists:dishes,id',
            'dessert' => 'required|exists:dishes,id',
            'wine_pairing' => 'required|exists:wines,id',
        ]);
        $menu = Menu::find($id);
        $menu->update($request->all());
        return redirect()->route('menus.index')->with('message', 'Menu updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
        return redirect()->route('menus.index')->with('message', 'Menu deleted successfully');
    }
}
