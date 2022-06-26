<?php

namespace App\Http\Controllers;
use App\Models\Top100;
use App\Models\Theme;
use App\Models\Song;
use App\Models\Category;
use App\Models\ArtistRegistered;
use App\Models\CategoryRegistered;
use App\Models\Top100Registered;
use App\Models\Artist;
use App\Models\Area;
use App\Models\Mv;
use App\Models\Banner;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     // cu vao controller se yeu cau dang nhap
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $top100=Top100::where('status',1)->orderBy('created_at','DESC')->limit(7)->get();
        $banner=Banner::where('status',1)->orderBy('prioty','DESC')->limit(3)->get();
        $mv =MV::where('status',1)->orderBy('created_at','DESC')->get();
        $songnew = Song::where('status',1)->orderBy('created_at','DESC')->limit(3)->get();
        $song = Song::where('status',1)->orderBy('created_at','DESC')->limit(20)->get();
        $category = Category::where('status',1)->orderBy('name_category','ASC')->get();
        $artist = Artist::where('status',1)->orderBy('created_at','DESC')->get();
        $area = Area::where('status',1)->orderBy('id','ASC')->get();

        return view('home',compact('song','category','artist','area','songnew','mv','banner','top100'));
    }
    public function view($id,$slug)
    {
        $songArea = Song::where('area_id',$id)->where('status',1)->limit(3)->get();
        $modelArtist = Artist::where('slug_artist',$slug)->first();
        $modelArea = Area::where('slug_area',$slug)->first();
        $artist = Artist::where('slug_artist',$slug)->first();
        $artists = Artist::where('status',1)->orderBy('created_at','DESC')->limit(7)->get();

        //kiem tra user co dang ki artist ko

        //neu user co dang nhap
        if(Auth::guard('customer')->check()){
            $registered = ArtistRegistered::where('artist_id',$id)->first();
            if($registered){
                $checkRegistered = '1';
            }
            else{
                $checkRegistered = '0';
            }
        }
        //neu user ko dang nhap
        else{
            $checkRegistered = '0';
        }
        if($modelArea){
            return view('area',['model'=>$modelArea,'songArea'=>$songArea]);
        }
        elseif($artist){
            return view('artistdetail',['artists'=>$artists,'checkRegistered'=>$checkRegistered,'artist'=>$artist,'model'=>$modelArtist]);
        }
    }
    public function viewSong($id){
        $artist = Artist::where('status',1)->orderBy('name_artist','ASC')->limit(7)->get();
        $songSuggestion= Song::where('status',1)->orderBy('name_song','DESC')->get();
        $song = Song::where('id',$id)->where('status',1)->first();
        if($song){
            $songView = Song::where('id',$id)->where('status',1)->first();
            $songView->view = $songView->view + 1;
            $songView->save();
            return view('songdetail',['artist'=>$artist,'song'=>$song,'songSuggestion'=>$songSuggestion]);
        }
    }
    public function viewMv($id){
        $mv= MV::where('id',$id)->first();
        return view('mv',compact('mv'));
    }
    public function viewTop100($id){

        //neu user co dang nhap
        if(Auth::guard('customer')->check()){
            $registered = Top100Registered::where('top100_id',$id)->first();
            if($registered){
                $checkRegistered = '1';
            }
            else{
                $checkRegistered = '0';
            }
        }
        //neu user ko dang nhap
        else{
            $checkRegistered = '0';
        }
        $top100= Top100::where('id',$id)->first();
        $topSong = Song::where('top100_id',$id)->limit(3)->get();
        $song = Song::where('top100_id',$id)->get();
        return view('songtop100',compact('top100','song','topSong','checkRegistered'));
    }
    public function viewCategory($id){
        //neu user co dang nhap
        if(Auth::guard('customer')->check()){
            $registered = CategoryRegistered::where('category_id',$id)->first();
            if($registered){
                $checkRegistered = '1';
            }
            else{
                $checkRegistered = '0';
            }
        }
        //neu user ko dang nhap
        else{
            $checkRegistered = '0';
        }
        $category= Category::where('id',$id)->first();
        $song = Song::where('category_id',$id)->get();
        return view('songcategory',compact('song','category','checkRegistered'));
    }

    public function error500 ()
    {
        return view('errors.500');
    }
    public function error404()
    {
        return view('errors.404');
    }
    public function user()
    {
        return view('user');

    }
    public function artist()
    {
        $artist = Artist::where('status',1)->orderBy('name_artist','ASC')->first();
         //neu user co dang nhap
         if(Auth::guard('customer')->check()){

            $registered = ArtistRegistered::where('artist_id',$artist->id)->first();
            if($registered){
                $checkRegistered = '1';
            }
            else{
                $checkRegistered = '0';
            }
        }
        //neu user ko dang nhap
        else{
            $checkRegistered = '0';
        }
        $artist = Artist::where('status',1)->orderBy('name_artist','ASC')->first();
        $artists = Artist::where('status',1)->orderBy('created_at','DESC')->get();
        $artist = Artist::where('status',1)->orderBy('name_artist','ASC')->first();
        if($artist){
            return view('artist',['artist'=>$artist,'model'=>$artist,'artists'=>$artists,'checkRegistered'=>$checkRegistered]);
        }
    }
    public function bxh()
    {
        $artist = Artist::where('status',1)->orderBy('created_at','DESC')->limit(7)->get();
        $topSong = Song::where('status',1)->orderBy('view','DESC')->limit(3)->get();
        $song = Song::where('status',1)->orderBy('view','DESC')->get();
        return view('bxh',compact('song','topSong','artist'));
    }
    public function top100()
    {
        $top100 = Top100::orderBy('created_at','DESC')->get();
        $areas = Area::orderBy('name_area','ASC')->select('id','name_area')->get();
        return view('top100',compact('areas','top100'));
    }
    public function theme()
    {
        $theme = theme::orderBy('created_at','DESC')->get();
        return view('theme',compact('theme'));
    }
    public function newSong()
    {
        $mv =MV::where('status',1)->orderBy('created_at','DESC')->get();
        $artist = Artist::where('status',1)->orderBy('created_at','DESC')->limit(7)->get();
        $song = Song::where('status',1)->orderBy('created_at','DESC')->get();
        return view('newsong',compact('song','artist','mv'));
    }
}
