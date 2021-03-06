<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Config;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HeaderController extends Controller
{
    public function index()
    {
        $config = Config::first();
        return view('frontend.blocks.header', ['config' => $config]);
    }
}
