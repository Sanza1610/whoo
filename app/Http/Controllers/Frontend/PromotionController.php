<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Category;
use App\Models\Category_News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromotionController extends Controller
{
    public function index()
    {
        $category = Category::where(['id' => 1])->first();
        $promotion = Category_News::with('news')->where(['category_id' => 1])->paginate(3);
        return view('frontend.pages.promotion', ['promotion' => $promotion, 'category' => $category]);
    }
}
