<?php

namespace App\Http\Controllers\Frontend;

use App\Models\News;
use App\Models\Category;
use App\Models\Category_News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewController extends Controller
{
    public function index()
    {
        $category = Category::where(['id' => 2])->first();
        $news = Category_News::with('news')->where(['category_id' => 2])->paginate(3);
        return view('frontend.pages.new', ['news' => $news, 'category' => $category]);
    }

    public function detail(Request $request)
    {
        $slug = $request->slug;
        $data = News::where(['slug' => $slug])->first();
        $relate = Category::with(['news' => function ($query) use ($slug) {
            $query->where('slug', '!=', $slug);
        }])->where(['id' => 2])->first();
        return view('frontend.pages.new_detail', ['data' => $data, 'relate' => $relate->news]);
    }

    public function search(Request $request)
    {
        $key = $request->tu_khoa;
        $data = News::where('title', 'like', '%' . $key . '%')->paginate(3);
        return view('frontend.pages.search', ['data' => $data]);
    }
}
