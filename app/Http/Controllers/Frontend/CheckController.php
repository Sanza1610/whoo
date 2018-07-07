<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Config;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CheckController extends Controller
{
    public function index(Request $request)
    {
        $config = Config::first();
        $user = '';
        return view('frontend.pages.check', [
            'config' => $config,
            'user' => $user,
        ]);
    }

    public function store(Request $request)
    {
        $config = Config::first();
        $user = '';
        $valid = Validator::make($request->all(), [
            'code' => 'required',
        ], [
            'code.required' => 'Bạn chưa nhập mã số !',
        ]);
        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        } else {
            $code = $request->code;
            $user = Customer::where('code', $code)->first();
            if ($user) {
                return redirect()->route('code.index')->with(['user' => $user, 'code' => $code]);
            } else {
                return redirect()->route('code.index')->with('message', 'Mã code này không tồn tại');
            }
        }
    }
}
