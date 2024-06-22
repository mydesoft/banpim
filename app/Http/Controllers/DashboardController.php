<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class DashboardController extends Controller
{
    public function dashboard(): View | RedirectResponse
    {
        $product = Product::count();

        $media = Media::count();

        return view('admin.dashboard', compact('product', 'media'));
    }
}
