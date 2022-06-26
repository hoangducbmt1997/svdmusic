<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ArtistRegistered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class ArtistRegisteredController extends Controller
{

    public function view($user_id,$artist_id){


    }
    public function registered ($user_id,$artist_id)
    {
        $registered= ArtistRegistered::create([
            'account_id' => $user_id,
            'artist_id' => $artist_id,
        ]);
        if($registered){
            Session::flash('success','Đăng kí nghệ sĩ yêu thích thành công!');
            return redirect()->back();
        }

    }
    public function unRegistered($user_id,$artist_id)
    {
        $check = ArtistRegistered::where('account_id',$user_id)->where('artist_id',$artist_id)->first();
        $registered =ArtistRegistered::where('id',$check->id)->first();
        if ($registered != null) {
            $registered->delete();
            return redirect()->back();
        }
    }
}
