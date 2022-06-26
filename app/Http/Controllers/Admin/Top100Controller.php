<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Top100;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Top100\StoreRequest;
use App\Http\Requests\Top100\UpdateRequest;

class Top100Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Top100::orderBy('created_at','DESC')->search()->paginate(10);

        return view('admin.top100.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = Area::orderBy('name_area','ASC')->select('id','name_area')->get();
        $top100 = Top100::orderBy('created_at','DESC')->get();
        return view('admin.top100.create',compact('top100','areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        if($request->hasFile('upload_image')){
            $file = $request ->upload_image;
            $ext = $request ->upload_image->extension();
            $file_name = time().'_'.'top100_image.'.$ext;
            $file->move(public_path('uploads/top100'),$file_name);
            $request->merge(['image_top100'=>$file_name]);
        }
        if($request->hasFile('upload_image_gif')){
            $file = $request ->upload_image_gif;
            $ext = $request ->upload_image_gif->extension();
            $file_name = time().'_'.'top100_image_gif.'.$ext;
            $file->move(public_path('uploads/top100'),$file_name);
            $request->merge(['image_gif_top100'=>$file_name]);
        }

        if(Top100::create($request->all())){
            return redirect()->route('admin.top100.index')->with('success','Thêm mới Top100 thành công!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\top100  $top100
     * @return \Illuminate\Http\Response
     */
    public function show(top100 $top100)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\top100  $top100
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $top100 = Top100::find($id);
        $areas = Area::orderBy('name_area','ASC')->select('id','name_area')->get();
        return view('admin.top100.edit',compact('top100','areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\top100  $top100
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $top100 = Top100::find($id);
        if($request->hasFile('upload_image')){
            $destination = public_path('uploads/top100/').$top100->image_top100;
            if(File::exists($destination)){
            File::delete($destination);
            }
            $file = $request ->upload_image;
            $ext = $request ->upload_image->extension();
            $file_name = time().'_'.'top100_image.'.$ext;
            $file->move(public_path('uploads/top100'),$file_name);
            $request->merge(['image_top100'=>$file_name]);
        }
        if($request->hasFile('upload_image_gif')){
            $destination = public_path('uploads/top100/').$top100->image_gif_top100;
            if(File::exists($destination)){
            File::delete($destination);
            }
            $file = $request ->upload_image_gif;
            $ext = $request ->upload_image_gif->extension();
            $file_name = time().'_'.'top100_image_gif.'.$ext;
            $file->move(public_path('uploads/top100'),$file_name);
            $request->merge(['image_gif_top100'=>$file_name]);
        }

        $top100->update($request->only('name_top100','image_top100','image_gif_top100','area_id','prioty','status'));
        return redirect()->route('admin.top100.index')->with('success','Cập nhật Top100 thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\top100  $top100
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $top100 = Top100::find($id);
        if($top100->songs->count()>0){
            return redirect()->route('admin.top100.index')->with('error','Top100 chứa bài hát, không thể xóa!');
        }
        else{
            $des_image = public_path('uploads/top100/').$top100->image_top100;
            $des_image_gif = public_path('uploads/top100/').$top100->image_gif_top100;
            if(File::exists($des_image)){
                File::delete($des_image);
             }
             if(File::exists($des_image_gif)){
                File::delete($des_image_gif);
            }
            $top100->delete();
            return redirect()->route('admin.top100.index')->with('success','Xóa thành công!');
        }
    }
}
