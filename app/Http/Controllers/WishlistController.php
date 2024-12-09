<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlists = Wishlist::all();
        return view('wishlists.index', compact('wishlists'));
    }

    public function create()
    {
        return view('wishlists.create');
    }

    public function store(Request $request)
    {
        $wishlist = new Wishlist();
        $wishlist->user_id = $request->input('user_id');
        $wishlist->product_id = $request->input('product_id');
        $wishlist->save();
        return redirect()->route('wishlists.index');
    }

    public function show($id)
    {
        $wishlist = Wishlist::find($id);
        return view('wishlists.show', compact('wishlist'));
    }

    public function edit($id)
    {
        $wishlist = Wishlist::find($id);
        return view('wishlists.edit', compact('wishlist'));
    }

    public function update(Request $request, $id)
    {
        $wishlist = Wishlist::find($id);
        $wishlist->user_id = $request->input('user_id');
        $wishlist->product_id = $request->input('product_id');
        $wishlist->save();
        return redirect()->route('wishlists.index');
    }

    public function destroy($id)
    {
        Wishlist::destroy($id);
        return redirect()->route('wishlists.index');
    }
}
