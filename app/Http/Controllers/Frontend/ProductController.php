<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $banner = Banner::where(['position_id' => 3])->get();
        $category = Category::where(['id' => 3])->first();
        $menu = Product::with('product_image')->where(['status' => 'on'])->get();
        return view('frontend.pages.product', ['menu' => $menu, 'category' => $category, 'banner' => $banner]);
    }
}
