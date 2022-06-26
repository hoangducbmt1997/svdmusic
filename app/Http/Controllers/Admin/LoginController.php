<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Song;
use App\Models\Customer;
use App\Models\Artist;
use App\Models\Mv;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    public function dashboard()
    {
        $song_count = Song::count();
        $user_count = Customer::count();
        $artist_count = Artist::count();
        $mv_count = mv::count();
        return view('admin.dashboard',compact('song_count','user_count','artist_count','mv_count'));
    }
    public function login()
    {
        return view('admin.login');
    }
    public function postLogin(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required' => 'Email không được để trống',
            'password.required' => 'Password không được để trống'
        ]
        );
        //thực hiện login
        if (Auth::attempt([
            'email' => $request -> input('email'),
            'password' => $request -> input('password')
        ],$request->input('remember'))) {
            return redirect()->route('admin.LoginController.dashboard');
        } else {
            Session::flash('error','Email hoặc password không chính xác!');
            return redirect()->back();
        }

    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}


