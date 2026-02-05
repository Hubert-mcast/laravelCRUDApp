<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Menu;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();
        return view('reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reviews = new Review();
        $menus = Menu::orderBy('name')->pluck('name', 'id')->prepend('All Menus', '');
        return view('reviews.create', compact('reviews', 'menus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'rating' => 'required',
            'body' => 'required',
        ]);
        Review::create($request->all());
        return redirect()->route('reviews.index')->with('message', 'Review added sucessfully');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $review = Review::find($id);
        return view('reviews.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $review = Review::find($id);
        $menus = Menu::orderBy('name')->pluck('name', 'id')->prepend('All Reviews', '');
        return view('reviews.edit', compact('review', 'menus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'menu_id' => 'required|exists:menus,id',
            'rating' => 'required',
            'body' => 'required',
        ]);
        $review = Review::find($id);
        $review->update($request->all());
        return redirect()->route('reviews.index')->with('message', 'Review updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $review = Review::find($id);
        $review->delete();
        return redirect()->route('reviews.index')->with('message', 'Review deleted successfully');
    }
}
