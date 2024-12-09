<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        $brands = Brand::all();
        return view('frontend.index', compact('products', 'categories', 'brands'));
    }

    public function product($id)
    {
        $product = Product::find($id);
        return view('frontend.product', compact('product'));
    }

    public function category($id)
    {
        $category = Category::find($id);
        $products = Product::where('category_id', $id)->get();
        return view('frontend.category', compact('category', 'products'));
    }

    public function brand($id)
    {
        $brand = Brand::find($id);
        $products = Product::where('brand_id', $id)->get();
        return view('frontend.brand', compact('brand', 'products'));
    }

    public function cart()
    {
        return view('frontend.cart');
    }

    public function checkout()
    {
        return view('frontend.checkout');
    }




    public function order(Request $request)
    {
        // Process order
        $order = new Order();
        $order->user_id = Auth::id();
        $order->order_date = now();
        $order->total = $request->input('total');
        $order->status = 'pending';
        $order->save();

        // Add order items
        foreach ($request->input('order_items') as $item) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $item['product_id'];
            $orderItem->quantity = $item['quantity'];
            $orderItem->price = $item['price'];
            $orderItem->save();
        }

        return redirect()->route('frontend.index');
    }
}
