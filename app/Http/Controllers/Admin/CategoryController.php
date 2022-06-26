<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Category::orderBy('created_at','DESC')->search()->paginate(10);
        return view('admin.category.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::orderBy('created_at','DESC')->get();
        return view('admin.category.create',compact('category'));
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
            $file_name = time().'_'.'category_song_gif.'.$ext;
            $file->move(public_path('uploads/category'),$file_name);
            $request->merge(['image_category'=>$file_name]);
        }
        if($request->hasFile('upload_image_gif')){
            $file = $request ->upload_image_gif;
            $ext = $request ->upload_image_gif->extension();
            $file_name = time().'_'.'category_image_gif.'.$ext;
            $file->move(public_path('uploads/category'),$file_name);
            $request->merge(['image_gif_category'=>$file_name]);
        }

        if(Category::create($request->all())){
            return redirect()->route('admin.category.index')->with('success','Thêm mới danh mục thành công!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $category = Category::find($id);
        if($request->hasFile('upload_image'))
        {
            $destination = public_path('uploads/category/').$category->image_category;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->upload_image;
            $ext = $request->upload_image->extension();
            $file_name = time().'_'.'category_image.'.$ext;
            $file->move(public_path('uploads/category'),$file_name);
            $request->merge(['image_category'=>$file_name]);
        }
        if($request->hasFile('upload_image_gif'))
        {
            $destination = public_path('uploads/category/').$category->image_gif_category;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->upload_image_gif;
            $ext = $request->upload_image_gif->extension();
            $file_name = time().'_'.'category_image_gif.'.$ext;
            $file->move(public_path('uploads/category'),$file_name);
            $request->merge(['image_gif_category'=>$file_name]);
        }
        $category->update($request->only('name_category','image_gif_category','image_category','prioty','status'));
        return redirect()->route('admin.category.index')->with('success','Cập nhật danh mục thành công!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        if($category->songs->count()>0){
            return redirect()->route('admin.category.index')->with('error','Danh mục chứa bài hát, không thể xóa!');
        }
        else{
            $destination = public_path('uploads/category/').$category->image_category;
            $des_image_gif = public_path('uploads/category/').$category->image_gif_category;
            if(File::exists($destination)){
                File::delete($destination);
             }
             if(File::exists($des_image_gif)){
                File::delete($des_image_gif);
             }
            $category->delete();
            return redirect()->route('admin.category.index')->with('success','Xóa danh mục thành công!');
        }

    }
}
