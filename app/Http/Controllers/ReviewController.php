<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('reviews.index', compact('reviews'));
    }

    public function create()
    {
        return view('reviews.create');
    }

    public function store(Request $request)
    {
        $review = new Review();
        $review->product_id = $request->input('product_id');
        $review->user_id = $request->input('user_id');
        $review->rating = $request->input('rating');
        $review->review = $request->input('review');
        $review->save();
        return redirect()->route('reviews.index');
    }

    public function show($id)
    {
        $review = Review::find($id);
        return view('reviews.show', compact('review'));
    }

    public function edit($id)
    {
        $review = Review::find($id);
        return view('reviews.edit', compact('review'));
    }

    public function update(Request $request, $id)
    {
        $review = Review::find($id);
        $review->product_id = $request->input('product_id');
        $review->user_id = $request->input('user_id');
        $review->rating = $request->input('rating');
        $review->review = $request->input('review');
        $review->save();
        return redirect()->route('reviews.index');
    }

    public function destroy($id)
    {
        Review::destroy($id);
        return redirect()->route('reviews.index');
    }
}
