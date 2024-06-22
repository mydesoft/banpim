<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function category(): View | RedirectResponse
    {
        $categories = Category::all();

        return view('admin.category.category', compact('categories'));
    }

    public function createCategory(): View
    {
        return view('admin.category.create-category');
    }

    public function storeCategory(Request $request): RedirectResponse
    {
        $data = $request->validate(['name' => 'required']);

        $data['slug'] = Str::slug($data['name']);

        Category::create($data);

         return redirect()->route('category')->with('success', 'Category created successfully');
    }

    public function viewCategory(): View
    {
        return view('admin.category.view-category');
    }

    public function updateCategory(): RedirectResponse
    {
        return redirect('category.view-category');
    }
}
