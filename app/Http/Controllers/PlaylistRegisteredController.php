<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PlaylistRegistered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class PlaylistRegisteredController extends Controller
{

    public function view($id_user,$playlist_id){


    }
    public function registered ($id_user,$playlist_id)
    {
        $regitered= playlistRegistered::create([
            'account_id' => $id_user,
            'playlist_id' => $playlist_id,
        ]);
        if($regitered){
            Session::flash('success','Đăng kí playlist yêu thích thành công!');
            return redirect()->back();
        }

    }
    public function unRegistered($id_user,$playlist_id)
    {
        $check = PlaylistRegistered::where('account_id',$id_user)->where('playlist_id',$playlist_id)->first();
        $regitered = PlaylistRegistered::where('id',$check->id)->first();
        if ($regitered != null) {
            $regitered->delete();
            return redirect()->back();
        }
    }
}
