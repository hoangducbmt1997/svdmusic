@extends('layouts.admin')
@section('title', 'Edit theme')
@section('main')

    <form action="{{ route('admin.theme.update', $theme->id) }}" role="form" enctype="multipart/form-data" method="POST">
        @csrf @method('PUT')
        <input type="hidden" name="id" value="{{ $theme->id }}" />
        <div class="form-group">
            <label for="">Name Theme</label>
            <input type="text" id="input_slug" value="{{ $theme->name_theme}}" name="name_theme"
                class="form-control" placeholder="">
            @error('name_theme')
                <small id="helpId" class="text-muted">{{ $message }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Image theme</label>
            <div>
                <input type="file" name="upload_image">
                <img src="{{ url('uploads/theme') }}/{{ $theme->image_theme }}" width="100" />
            </div>
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <div>
                <label>
                    <input type="radio" name="status" value="1" <?php echo $theme->status == 1 ? 'checked': ''; ?>>
                    Public
                </label>
                <label>
                    <input type="radio" name="status" id="" value="0" <?php echo $theme->status == 0 ? 'checked': ''; ?>>
                    Private
                </label>
            </div>
        </div>
        <div class="form-group">
            <label for="">Prioty</label>
            <input type="number" value="{{ $theme->prioty }}" class="form-control" name="prioty" id="">
            @error('prioty')
                <small id="helpId" class="text-muted">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Save Data</button>
    </form>
@endsection
