<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\Top100Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Top100RegisteredController extends Controller
{

    public function view($id_user,$top100_id){


    }
    public function registered ($id_user,$top100_id)
    {
        Session::flash('success','Đăng kí nghệ sĩ yêu thích thành công!');
        $regitered= Top100Registered::create([
            'account_id' => $id_user,
            'top100_id' => $top100_id,
        ]);
        if($regitered){

            return redirect()->back();
        }

    }
    public function unRegistered($id_user,$top100_id)
    {
        $check = Top100Registered::where('account_id',$id_user)->where('top100_id',$top100_id)->first();
        $regitered = Top100Registered::where('id',$check->id)->first();
        if ($regitered != null) {
            $regitered->delete();
            return redirect()->back();
        }
    }
}
