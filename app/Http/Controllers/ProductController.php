<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public function product(): View | RedirectResponse
    {
        $products = Product::all();

        return view('admin.product.product', compact('products'));
    }

    public function createproduct(): View
    {
        $categories = Category::orderBy('name')->get(['name','id']);

         return view('admin.product.create-product', compact('categories'));
    }

    public function storeproduct(ProductRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $data['slug'] = Str::slug($data['name']);

        Product::create($data);

         return redirect()->route('product')->with('success', 'product created successfully');
    }

    public function viewproduct(): View
    {
        return view('admin.product.view-product');
    }

    public function updateproduct(): RedirectResponse
    {
        return redirect('product.view-product');
    }
}
