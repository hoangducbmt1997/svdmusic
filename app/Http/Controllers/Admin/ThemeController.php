<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Theme\StoreRequest;
use App\Http\Requests\Theme\UpdateRequest;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Theme::orderBy('created_at','DESC')->search()->paginate(10);
        return view('admin.theme.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $theme = Theme::orderBy('created_at','DESC')->get();
        return view('admin.Theme.create',compact('theme'));
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
            $file_name = time().'_'.'theme_song.'.$ext;
            $file->move(public_path('uploads/theme'),$file_name);
        }
        $request->merge(['image_theme'=>$file_name]);
        if(theme::create($request->all())){
            return redirect()->route('admin.theme.index')->with('success','Thêm mới chủ đề thành công!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Theme  $Theme
     * @return \Illuminate\Http\Response
     */
    public function show(Theme $theme)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Theme  $Theme
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $song = Theme::find($id);
        return view('admin.theme.edit',compact('theme'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Theme  $Theme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $theme = Theme::find($id);
        if($request->hasFile('upload_image'))
        {
            $destination = public_path('uploads/theme/').$theme->image_theme;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->upload_image;
            $ext = $request->upload_image->extension();
            $file_name = time().'_'.'theme_song.'.$ext;
            $file->move(public_path('uploads/theme'),$file_name);
            $request->merge(['image_theme'=>$file_name]);
        }

        $theme->update($request->only('name_theme','image_theme','prioty','status'));
        return redirect()->route('admin.theme.index')->with('success','Cập nhật Theme thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Theme  $Theme
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $theme = Theme::find($id);
        $destination = public_path('uploads/theme/').$theme->image_theme;
        if(File::exists($destination)){
            File::delete($destination);
            }
        $theme->delete();
        return redirect()->route('admin.theme.index')->with('success','Xóa thành công!');

    }
}
