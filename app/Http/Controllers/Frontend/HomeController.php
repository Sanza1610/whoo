<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\Config;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index()
    {
        $config = Config::first();
        return view('frontend.pages.index', [
            'config' => $config,
        ]);
    }

    public function store(Request $request)
    {
        $config = Config::first();
        $valid = Validator::make($request->all(), [
            'name' => 'required',
            'dob' => 'required|date_format:d-m-Y',
            'email' => 'required|email|unique:customers',
            'phone' => array(
                'required',
                'regex:/^(01[2689]|09)[0-9]{8}$/',
                'unique:customers',
            )
        ], [
            'name.required' => 'Bạn chưa nhập họ tên !',
            'dob.required' => 'Bạn chưa chọn ngày sinh !',
            'dob.date_format' => 'Bạn chọn sai định dạng ngày sinh !',
            'email.required' => 'Bạn chưa nhập email !',
            'email.email' => 'Không đúng định dạng email !',
            'email.unique' => 'Email này đã tồn tại !',
            'phone.required' => 'Bạn chưa nhập số điện thoại !',
            'phone.regex' => 'Bạn phải nhập đúng số điện thoại !',
            'phone.unique' => 'Số điện thoại này đã tồn tại !',
        ]);
        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        } else {
            $array = $request->all();
            unset($array['_token']);
            $code = 'WHOO' . rand(10000, 99999);
            $user = Customer::where('code', $code)->first();
            if ($user) {
                $this->store($request);
            } else {
                $array['code'] = $code;
                $array['dob'] = Carbon::parse($array['dob'])->format('Y-m-d');
                $data = new Customer;
                $data['attributes'] = $array;
                $data->save();
//            Mail::send(new SendMail());
                return redirect()->route('home.index')->with('message', 'Bạn đã đăng ký thành công.');
            }
        }
    }
}
