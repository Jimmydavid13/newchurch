<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
    }

    public function create()
    {
        return view('brands.create');
    }

    public function store(Request $request)
    {
        $brand = new Brand();
        $brand->name = $request->input('name');
        $brand->description = $request->input('description');
        $brand->save();
        return redirect()->route('brands.index');
    }

    public function show($id)
    {
        $brand = Brand::find($id);
        return view('brands.show', compact('brand'));
    }

    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('brands.edit', compact('brand'));
    }

    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $brand->name = $request->input('name');
        $brand->description = $request->input('description');
        $brand->save();
        return redirect()->route('brands.index');
    }

    public function destroy($id)
    {
        Brand::destroy($id);
        return redirect()->route('brands.index');
    }
}
