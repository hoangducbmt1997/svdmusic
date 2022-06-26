<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Session;

use App\Models\Customer;
use App\Models\Artist;
use App\Models\ArtistRegistered;
use App\Models\CategoryRegistered;
use App\Models\Top100Registered;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CustomerController extends Controller
{
    public function login()
    {
        return view('customer.login');//return ra trang login để đăng nhập
    }

    public function postLogin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required',
        ],[
            'email.required' => 'Email không được để trống',
            'password.required' => 'Mật khẩu không được để trống'

        ]);

        if (Auth::guard('customer')->attempt($request->only('email','password'),$request->has('remember'))) {
            return redirect()->route('home.index')->with('success','Đăng nhập thành công!');
        }
        else
        {
            Session::flash('error','Email hoặc password không chính xác!');
            return redirect()->back();
        }
    }
    public function register()
    {
        return view('customer.register');
    }
    public function postRegister(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email|unique:account',
            'password'=>'required',
            'confirm_password'=>'required|same:password'
        ],[
            'email.required' => 'Email không được để trống',
            'name.required' => 'Tên không được để trống',
            'password.required' => 'Password không được để trống',
            'confirm_password.required' => 'Nhập lại mật khẩu không được để trống',
            'confirm_password.same' => 'Nhập lại mật khẩu không khớp'

        ]);
        $request->merge(['password'=>bcrypt($request->password)]);
        $reg = Customer::create($request->all());
        if($reg){
            return redirect()->route('customer.login')->with('success','Đăng kí tài khoản thành công!');
        }
        return redirect()->back()->with('error','Đăng kí thất bại');
    }
    public function profile()
    {
        if(Auth::guard('customer')->check()){
            $registeredArist = ArtistRegistered::where('account_id',Auth::guard('customer')->user()->id)->get();
            $registeredTop100 = Top100Registered::where('account_id',Auth::guard('customer')->user()->id)->get();
            $registeredCategory = CategoryRegistered::where('account_id',Auth::guard('customer')->user()->id)->get();
            return view('user',compact('registeredArist','registeredTop100','registeredCategory'));
        }
        else{
            return redirect()->route('customer.login');
        }
    }
    public function logout()
    {
        Auth::guard('customer')->logout();
        return redirect()->route('home.index')->with('success','Đăng xuất thành công!');
    }

}
