@extends('layouts.admin')
@section('title','Edit Category')
@section('main')

    <form action="{{route('admin.category.update',$category->id)}}" role="form" enctype="multipart/form-data" method="POST">
        @csrf @method('PUT')
        <input type="hidden" name="id" value="{{$category->id}}"/>
        <div class="form-group">
          <label for="">Name Category</label>
          <input type="text" value="{{$category->name_category}}" name="name_category"  class="form-control" placeholder="" >
          @error('name_category')
          <small id="helpId" class="text-muted">{{$message}}</small>
          @enderror
        </div>
        <div class="form-group">
          <label for="">Image Category</label>
          <div>
            <input type="file" name="upload_image" >
            <img src="{{url('uploads/category')}}/{{$category->image_category}}" width="50" />
          </div>
        </div>
        <div class="form-group">
            <label for="">Image Gif Category</label>
            <div>
              <input type="file"  name="upload_image_gif">
            <img src="{{url('uploads/category')}}/{{$category->image_gif_category}}" width="50" />

            </div>
            @error('upload_image_gif')
            <small id="helpId" class="text-muted">{{$message}}</small>
            @enderror
          </div>
        <div class="form-group">
          <label for="">Status</label>
          <div>
            <label>
                <input type="radio" name="status" value="1" <?php echo $category->status == 1 ? 'checked': ''; ?>>
                Public
              </label>
              <label>
                  <input type="radio" name="status" id="" value="0" <?php echo $category->status == 0 ? 'checked': ''; ?>>
                  Private
                </label>
          </div>
        </div>
          <div class="form-group">
          <label for="">Prioty</label>
          <input type="number" value="{{$category->prioty}}" class="form-control" name="prioty" id="" >
          @error('prioty')
          <small id="helpId" class="text-muted">{{$message}}</small>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save Data</button>
    </form>

@endsection
