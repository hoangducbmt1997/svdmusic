<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Artist;


class ApiController extends Controller
{
    public function ajaxSearch()
    {
        $data = Song::where('status',1)->search()->get();
        return response()->json($data);
    }
    public function ajaxSearchArtist()
    {
        $data = Artist::where('status',1)->search()->get();
        return response()->json($data);
    }
}
