<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CategoryRegistered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CategoryRegisteredController extends Controller
{

    public function view($id_user,$category_id){


    }
    public function registered ($id_user,$category_id)
    {
        $registered= CategoryRegistered::create([
            'account_id' => $id_user,
            'category_id' => $category_id,
        ]);
        if($registered){
            Session::flash('success','Đăng kí playlist yêu thích thành công!');
            return redirect()->back();
        }

    }
    public function unRegistered($id_user,$category_id)
    {
        $check = CategoryRegistered::where('account_id',$id_user)->where('category_id',$category_id)->first();
        $registered = CategoryRegistered::where('id',$check->id)->first();
        if ($registered != null) {
            $registered->delete();
            return redirect()->back();
        }
    }
}
