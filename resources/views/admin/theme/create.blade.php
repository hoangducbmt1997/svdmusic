@extends('layouts.admin')
@section('title', 'Add Theme')
@section('main')
<form action="{{ route('admin.theme.store') }}" method="POST" enctype="multipart/form-data" role="form" class="form-group">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Name theme</label>
                    <input id="input_slug" type="text" name="name_theme" class="form-control">
                    @error('name_theme')
                        <small id="helpId" class="text-muted">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Image theme</label>
                    <div>
                      <input type="file" name="upload_image" >
                    </div>
                    @error('upload_image')
                        <small id="helpId" class="text-muted">{{ $message }}</small>
                    @enderror
                </div>


            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Prioty</label>
                    <input type="number" value="" class="form-control" name="prioty">
                    @error('prioty')
                        <small id="helpId" class="text-muted">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <div>
                        <label>
                            <input type="radio" name="status" value="1" checked>
                            Public
                        </label>
                        <label>
                            <input type="radio" name="status" value="0">
                            Private
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add theme</button>
            </div>
        </div>
    </form>
@endsection
