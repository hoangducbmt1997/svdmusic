<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\CartHelper;
use App\Models\Song;
use Illuminate\Support\Facades\Session;



class CartController extends Controller
{
    public function add(CartHelper $cart, $id)
    {
        $song = Song::find($id);
        $cart->add($song);
        Session::flash('success','Đã thêm vào bài hát yêu thích thành công!');
        return redirect()->back();
    }
    public function remove(CartHelper $cart, $id)
    {
        $cart->remove($id);
        return redirect()->back();
    }
    public function view ()
    {
        return view('user');
    }
}
