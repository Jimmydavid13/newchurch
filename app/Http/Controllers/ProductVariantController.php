<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductVariant;

class ProductVariantController extends Controller
{
    public function index()
    {
        $productVariants = ProductVariant::all();
        return view('product-variants.index', compact('productVariants'));
    }

    public function create()
    {
        return view('product-variants.create');
    }

    public function store(Request $request)
    {
        $productVariant = new ProductVariant();
        $productVariant->product_id = $request->input('product_id');
        $productVariant->variant = $request->input('variant');
        $productVariant->save();
        return redirect()->route('product-variants.index');
    }

    public function show($id)
    {
        $productVariant = ProductVariant::find($id);
        return view('product-variants.show', compact('productVariant'));
    }

    public function edit($id)
    {
        $productVariant = ProductVariant::find($id);
        return view('product-variants.edit', compact('productVariant'));
    }

    public function update(Request $request, $id)
    {
        $productVariant = ProductVariant::find($id);
        $productVariant->product_id = $request->input('product_id');
        $productVariant->variant = $request->input('variant');
        $productVariant->save();
        return redirect()->route('product-variants.index');
    }

    public function destroy($id)
    {
        ProductVariant::destroy($id);
        return redirect()->route('product-variants.index');
    }
}
