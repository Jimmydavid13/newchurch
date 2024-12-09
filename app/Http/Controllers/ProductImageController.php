<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductImage;

class ProductImageController extends Controller
{
    public function index()
    {
        $productImages = ProductImage::all();
        return view('product-images.index', compact('productImages'));
    }

    public function create()
    {
        return view('product-images.create');
    }

    public function store(Request $request)
    {
        $productImage = new ProductImage();
        $productImage->product_id = $request->input('product_id');
        $productImage->image = $request->input('image');
        $productImage->save();
        return redirect()->route('product-images.index');
    }

    public function show($id)
    {
        $productImage = ProductImage::find($id);
        return view('product-images.show', compact('productImage'));
    }

    public function edit($id)
    {
        $productImage = ProductImage::find($id);
        return view('product-images.edit', compact('productImage'));
    }

    public function update(Request $request, $id)
    {
        $productImage = ProductImage::find($id);
        $productImage->product_id = $request->input('product_id');
        $productImage->image = $request->input('image');
        $productImage->save();
        return redirect()->route('product-images.index');
    }

    public function destroy($id)
    {
        ProductImage::destroy($id);
        return redirect()->route('product-images.index');
    }
}
